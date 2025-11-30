// Simple interactive preview logic
const canvas = document.getElementById('previewCanvas');
const ctx = canvas.getContext('2d');
const templateSelect = document.getElementById('templateSelect');
const bgColor = document.getElementById('bgColor');
const overlaySelect = document.getElementById('overlaySelect');
const imageUpload = document.getElementById('imageUpload');
const overlayText = document.getElementById('overlayText');
const renderBtn = document.getElementById('renderBtn');
const downloadBtn = document.getElementById('downloadBtn');

let uploadedImage = null;
let sampleImage1 = new Image();
let sampleImage2 = new Image();
// sample images from container (developer will map local path to url)
sampleImage1.src = '/mnt/data/download (18).jpeg';
sampleImage2.src = '/mnt/data/Mapa Gel boys 01.jpeg';

// scale canvas to device pixel ratio for crispness
function resizeCanvasForDPR() {
  const DPR = window.devicePixelRatio || 1;
  const displayedWidth = Math.min(800, window.innerWidth - 80);
  canvas.width = displayedWidth * DPR;
  canvas.height = displayedWidth * DPR;
  canvas.style.width = displayedWidth + 'px';
  canvas.style.height = displayedWidth + 'px';
  ctx.setTransform(DPR, 0, 0, DPR, 0, 0);
}
resizeCanvasForDPR();
window.addEventListener('resize', resizeCanvasForDPR);

// helper to draw overlay patterns
function drawOverlayPattern(type, w, h) {
  if (type === 'stars') {
    ctx.fillStyle = 'rgba(255,215,110,0.18)';
    for (let i = 0; i < 40; i++) {
      const x = Math.random() * w;
      const y = Math.random() * h;
      const r = 4 + Math.random()*8;
      ctx.beginPath();
      ctx.arc(x, y, r, 0, Math.PI*2);
      ctx.fill();
    }
  } else if (type === 'dots') {
    ctx.fillStyle = 'rgba(0,0,0,0.06)';
    for (let i = 0; i < 160; i++) {
      const x = Math.random() * w;
      const y = Math.random() * h;
      const r = 1 + Math.random()*2;
      ctx.beginPath();
      ctx.arc(x, y, r, 0, Math.PI*2);
      ctx.fill();
    }
  }
}

// main render function
function renderPreview() {
  // clear
  const width = canvas.width / (window.devicePixelRatio || 1);
  const height = canvas.height / (window.devicePixelRatio || 1);
  ctx.clearRect(0,0,width,height);

  // background
  ctx.fillStyle = bgColor.value || '#fff';
  ctx.fillRect(0,0,width,height);

  // pick base template image
  const chosenTemplate = templateSelect.value;
  const baseImg = (chosenTemplate === 'template1') ? sampleImage1 : sampleImage2;

  // draw base image centered and contained
  const margin = 30;
  const imgBoxW = width - margin*2;
  const imgBoxH = height - margin*2;
  const imgAspect = baseImg.width / baseImg.height || 1;
  let drawW = imgBoxW, drawH = imgBoxH;
  if (imgBoxW / imgBoxH > imgAspect) {
    drawW = imgBoxH * imgAspect;
  } else {
    drawH = imgBoxW / imgAspect;
  }
  const dx = (width - drawW) / 2;
  const dy = (height - drawH) / 2;

  try {
    ctx.drawImage(baseImg, dx, dy, drawW, drawH);
  } catch (e) {
    // in case image not loaded yet, draw a placeholder
    ctx.fillStyle = '#eee';
    ctx.fillRect(dx, dy, drawW, drawH);
  }

  // if user uploaded an image, draw on top (scaled)
  if (uploadedImage) {
    const uiAspect = uploadedImage.width / uploadedImage.height;
    // small overlay box
    const overlayW = drawW * 0.5;
    const overlayH = overlayW / uiAspect;
    ctx.globalAlpha = 0.95;
    ctx.drawImage(uploadedImage, dx + drawW - overlayW - 12, dy + drawH - overlayH - 12, overlayW, overlayH);
    ctx.globalAlpha = 1;
    // add a small border
    ctx.strokeStyle = 'rgba(255,255,255,0.9)';
    ctx.lineWidth = 6;
    ctx.strokeRect(dx + drawW - overlayW - 12, dy + drawH - overlayH - 12, overlayW, overlayH);
  }

  // overlay pattern
  drawOverlayPattern(overlaySelect.value, width, height);

  // overlay text
  const text = overlayText.value || '';
  if (text.trim()) {
    ctx.font = 'bold 26px Poppins, sans-serif';
    ctx.textAlign = 'center';
    ctx.fillStyle = 'rgba(255,255,255,0.92)';
    // text background pill
    const pad = 14;
    const textWidth = Math.min(600, ctx.measureText(text).width);
    const pillW = textWidth + pad*2;
    const pillH = 48;
    const px = width/2 - pillW/2;
    const py = height - 80 - pillH/2;
    // shadow
    ctx.fillStyle = 'rgba(0,0,0,0.26)';
    roundRect(ctx, px+4, py+6, pillW, pillH, 12, true, false);
    // pill
    ctx.fillStyle = 'rgba(255,255,255,0.96)';
    roundRect(ctx, px, py, pillW, pillH, 12, true, false);
    // text
    ctx.fillStyle = '#111';
    ctx.fillText(text, width/2, py + pillH/2 + 10);
  }

  // small watermark bottom-left
  ctx.font = '600 12px Poppins, sans-serif';
  ctx.fillStyle = 'rgba(0,0,0,0.35)';
  ctx.textAlign = 'left';
  ctx.fillText('Nisee • Preview', 12, height - 12);
}

// helper roundRect
function roundRect(ctx, x, y, w, h, r, fill, stroke) {
  if (typeof r === 'undefined') r = 5;
  ctx.beginPath();
  ctx.moveTo(x + r, y);
  ctx.arcTo(x + w, y, x + w, y + h, r);
  ctx.arcTo(x + w, y + h, x, y + h, r);
  ctx.arcTo(x, y + h, x, y, r);
  ctx.arcTo(x, y, x + w, y, r);
  ctx.closePath();
  if (fill) ctx.fill();
  if (stroke) ctx.stroke();
}

// upload handler
imageUpload.addEventListener('change', (e) => {
  const f = e.target.files[0];
  if (!f) return;
  const url = URL.createObjectURL(f);
  const img = new Image();
  img.onload = () => {
    uploadedImage = img;
    URL.revokeObjectURL(url);
  }
  img.src = url;
});

// render button
renderBtn.addEventListener('click', () => {
  renderPreview();
});

// auto render on changes for better UX
[templateSelect, bgColor, overlaySelect].forEach(el => el.addEventListener('change', renderPreview));
overlayText.addEventListener('input', () => {
  // throttle small delay
  clearTimeout(window._previewTextTimer);
  window._previewTextTimer = setTimeout(renderPreview, 180);
});

// download handler
downloadBtn.addEventListener('click', () => {
  renderPreview(); // ensure current state
  const link = document.createElement('a');
  link.download = `nisee-preview-${Date.now()}.png`;
  link.href = canvas.toDataURL('image/png');
  link.click();
});

// initial render when sample images loaded
let sampleLoadedCount = 0;
[sampleImage1, sampleImage2].forEach(img=>{
  img.onload = () => {
    sampleLoadedCount++;
    if (sampleLoadedCount >= 1) renderPreview();
  };
  img.onerror = () => {
    sampleLoadedCount++;
    if (sampleLoadedCount >= 1) renderPreview();
  }
});

// footer year
document.getElementById('year').textContent = (new Date()).getFullYear();
