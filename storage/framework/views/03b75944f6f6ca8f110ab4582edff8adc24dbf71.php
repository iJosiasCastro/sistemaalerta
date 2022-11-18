
<div class="form-group pb-3">
   <?php echo Form::label('nombre_y_apellido', 'Nombre y apellido:'); ?>

   <?php echo Form::text('nombre_y_apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre y apellido del enfermero']); ?>

   <?php $__errorArgs = ['nombre_y_apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group pb-3">
   <?php echo Form::label('dni', 'Dni:'); ?>

   <?php echo Form::number('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el dni del enfermero']); ?>

   <?php $__errorArgs = ['dni'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group pb-3">
   <?php echo Form::label('telefono', 'Teléfono (Opcional):'); ?>

   <?php echo Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del enfermero']); ?>

   <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group pb-3">
   <?php echo Form::label('detalles', 'Detalles (Opcional):'); ?>

   <?php echo Form::textarea('detalles', null, ['class' => 'form-control', 'placeholder' => 'Escriba detalles']); ?>

   <?php $__errorArgs = ['detalles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\Users\Desktop\Desktop\code\resources\views/enfermero/form.blade.php ENDPATH**/ ?>