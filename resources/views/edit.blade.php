<x-app-layout>

    {{-- HEADER --}}
    <div class="profile-header" style="text-align:center; padding-top:120px; margin-bottom:40px;">
        <h1 style="font-size:42px; font-weight:900; color:#333;">My Profile</h1>
        <p style="color:#666; margin-top:10px;">Kelola informasi akunmu dengan tampilan aesthetic pastel ✨</p>
    </div>

    {{-- PROFILE CONTAINER --}}
    <div class="profile-container" 
         style="max-width:900px; margin:auto; padding:40px; 
                background:rgba(255,255,255,0.55); backdrop-filter:blur(12px);
                border-radius:28px; box-shadow:0 8px 25px rgba(0,0,0,0.08);
                border:2px solid rgba(255,255,255,0.4);">

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            {{-- PROFILE PHOTO --}}
            <div style="text-align:center; margin-bottom:35px;">
                <img src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/120' }}"
                     style="width:130px; height:130px; border-radius:50%;
                            object-fit:cover; border:4px solid #ff7eb8;
                            box-shadow:0 6px 18px rgba(0,0,0,0.12);">
                
                <div style="margin-top:14px;">
                    <input type="file" name="photo"
                        style="padding:12px; background:#ffe6f1; border:2px solid #ffb8d8;
                               border-radius:14px; font-size:14px; cursor:pointer;">
                </div>
            </div>

            {{-- NAME --}}
            <div style="margin-bottom:25px;">
                <label style="font-weight:600; color:#333;">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}"
                    style="width:100%; margin-top:8px; padding:14px 18px;
                           border-radius:16px; border:2px solid #ffd6e9;
                           background:white; font-size:16px;">
            </div>

            {{-- BIO --}}
            <div style="margin-bottom:25px;">
                <label style="font-weight:600; color:#333;">Bio</label>
                <textarea name="bio" rows="3"
                    style="width:100%; margin-top:8px; padding:14px 18px;
                           border-radius:16px; border:2px solid #ffd6e9;
                           background:white; font-size:15px;">{{ Auth::user()->bio ?? '' }}</textarea>
            </div>

            {{-- EMAIL --}}
            <div style="margin-bottom:25px;">
                <label style="font-weight:600; color:#333;">Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}"
                    style="width:100%; margin-top:8px; padding:14px 18px;
                           border-radius:16px; border:2px solid #ffd6e9;
                           background:white; font-size:16px;">
            </div>

            {{-- SAVE BUTTON --}}
            <div style="text-align:right; margin-top:40px;">
                <button type="submit"
                    style="padding:14px 28px; background:#6b4bff; color:white;
                           border-radius:18px; font-size:17px; font-weight:600;
                           border:none; cursor:pointer; box-shadow:0 5px 20px rgba(107,75,255,0.25);
                           transition:0.25s;">
                    Save Changes
                </button>
            </div>

        </form>
    </div>

    {{-- DELETE SECTION --}}
    <div style="max-width:900px; margin:60px auto; padding:30px;
                background:rgba(255,255,255,0.55); backdrop-filter:blur(10px);
                border-radius:20px; box-shadow:0 8px 22px rgba(0,0,0,0.08);
                border:2px solid rgba(255,255,255,0.4);">
        
        <h3 style="color:#ff4971; font-size:22px; font-weight:700;">
            Delete Account
        </h3>
        <p style="color:#666; margin-top:8px;">
            Menghapus akun bersifat permanen dan tidak dapat dikembalikan.
        </p>

        <form method="POST" action="{{ route('profile.destroy') }}" style="margin-top:20px;">
            @csrf
            @method('DELETE')
            <button type="submit"
                onclick="return confirm('Yakin ingin menghapus akun ini?')"
                style="padding:12px 22px; background:#ff4971; color:white;
                       border-radius:14px; font-size:15px; font-weight:600;
                       border:none; cursor:pointer; box-shadow:0 5px 15px rgba(255,73,113,0.25);
                       transition:0.25s;">
                Delete My Account
            </button>
        </form>

    </div>

</x-app-layout>
