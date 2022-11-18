
<div class="form-group pb-3">
   <?php echo Form::label('numero_de_area', 'Numero de area:'); ?>

   <?php echo Form::number('numero_de_area', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero del area']); ?>

   <?php $__errorArgs = ['numero_de_area'];
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
   <?php echo Form::label('descripcion', 'Descripcion:'); ?>

   <?php echo Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del area']); ?>

   <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/area/form.blade.php ENDPATH**/ ?>