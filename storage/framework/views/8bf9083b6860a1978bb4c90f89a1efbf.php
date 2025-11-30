<nav>
    <a href="<?php echo e(route('index')); ?>" class="logo">Nisee</a>

    <div class="nav-links">
        <a href="<?php echo e(route('catalog')); ?>">Catalog</a>
        <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#testimonials">Testimonials</a>

        <?php if(auth()->guard()->check()): ?>
        <!-- PROFILE MENU -->
        <div class="profile-menu">
            <button class="profile-trigger">⋮</button>

            <div class="profile-dropdown">
                <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                <a href="<?php echo e(route('profile.edit')); ?>">My Profile</a>
                <a href="<?php echo e(route('orders')); ?>">My Orders</a>

                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="w-full text-left px-4 py-2">Logout</button>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="login-btn">Login</a>
        <?php endif; ?>
    </div>
</nav>

<!-- PROFILE MENU STYLE -->
<style>
.profile-menu { position: relative; }
.profile-trigger {
    background: transparent; border: none;
    font-size: 28px; cursor: pointer; color: #333;
    padding: 5px 10px;
}
.profile-dropdown {
    display: none; position: absolute; right: 0; top: 40px;
    background: white; border-radius: 12px; width: 180px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.12); padding: 10px 0;
}
.profile-dropdown a, .profile-dropdown button {
    display: block; padding: 10px 15px; font-size: 15px; color: #333;
}
.profile-dropdown a:hover, .profile-dropdown button:hover {
    background: #f5f5f5;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const trigger = document.querySelector(".profile-trigger");
    const dropdown = document.querySelector(".profile-dropdown");

    trigger?.addEventListener("click", e => {
        e.stopPropagation();
        dropdown.style.display =
            dropdown.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", () => dropdown.style.display = "none");
});
</script>
<?php /**PATH C:\xampp\htdocs\niseeproject\resources\views/components/navbar.blade.php ENDPATH**/ ?>