

<?php $__env->startSection('content'); ?>
    <div class="py-5"></div>
    <form class="col-md-6 mx-auto" method="POST" action="/login">
        <!-- <ul class="navbar-nav bg-primary h-0 sidebar sidebar-dark accordion mx-auto mb-5" style="min-height: 100%;" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="sidebar-brand-text" style="display: inline !important;">Sistema Alerta</div>
            </a>
        </ul> -->
        <div class="text-center mb-3">
            <img src="<?php echo e(asset('logo.png')); ?>" style="max-width:250px;" alt="">
        </div>
        <h3 class="text-center">Iniciar sesión</h3>
        <?php echo csrf_field(); ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <strong><?php echo e(session('error')); ?></strong>
            </div>
        <?php endif; ?>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
            <label class="form-label" for="form2Example1">Correo eletronico</label>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
            <label class="form-label" for="form2Example2">Contraseña</label>

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
            <?php echo e(__('Ingresar')); ?>

        </button>

        <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
        <?php endif; ?>
    </form>

    </form>
  <div class="py-5"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/admin/login.blade.php ENDPATH**/ ?>