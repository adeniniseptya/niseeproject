<?php if (isset($component)) { $__componentOriginal03b6c44728e100ba2673d02906458342 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03b6c44728e100ba2673d02906458342 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="feature-card" style="width:380px; padding:40px;">
        <h2 style="text-align:center; font-size:28px; margin-bottom:15px; color:#6b4bff;">
            Create Your Account
        </h2>

        
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

            
            <div style="margin-bottom:20px;">
                <label>Name</label>
                <input type="text" name="name" required value="<?php echo e(old('name')); ?>"
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color:red; font-size:13px; margin-top:5px;"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div style="margin-bottom:20px;">
                <label>Email</label>
                <input type="email" name="email" required value="<?php echo e(old('email')); ?>"
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color:red; font-size:13px; margin-top:5px;"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div style="margin-bottom:20px;">
                <label>Password</label>
                <input type="password" name="password" required
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color:red; font-size:13px; margin-top:5px;"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div style="margin-bottom:20px;">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
            </div>

            <button type="submit"
                style="
                    width:100%;
                    padding:12px;
                    background:#6b4bff;
                    color:white;
                    border:none;
                    border-radius:14px;
                    font-size:16px;
                    margin-top:10px;
                ">
                Register
            </button>
        </form>

        <p style="text-align:center; margin-top:18px; font-size:14px;">
            Sudah punya akun?
            <a href="<?php echo e(route('login')); ?>" style="color:#6b4bff;">Login</a>
        </p>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03b6c44728e100ba2673d02906458342)): ?>
<?php $attributes = $__attributesOriginal03b6c44728e100ba2673d02906458342; ?>
<?php unset($__attributesOriginal03b6c44728e100ba2673d02906458342); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03b6c44728e100ba2673d02906458342)): ?>
<?php $component = $__componentOriginal03b6c44728e100ba2673d02906458342; ?>
<?php unset($__componentOriginal03b6c44728e100ba2673d02906458342); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\niseeproject\resources\views/auth/register.blade.php ENDPATH**/ ?>