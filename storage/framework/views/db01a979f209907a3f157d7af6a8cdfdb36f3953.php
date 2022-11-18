
<div class="form-group pb-3">
   <?php echo Form::label('nombre_y_apellido', 'Nombre y apellido:'); ?>

   <?php echo Form::text('nombre_y_apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre y apellido del paciente']); ?>

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

   <?php echo Form::number('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el dni del paciente']); ?>

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
   <?php echo Form::label('localidad', 'Localidad (Opcional):'); ?>

   <?php echo Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el localidad del paciente']); ?>

   <?php $__errorArgs = ['localidad'];
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
   <?php echo Form::label('domicilio', 'Domicilio (Opcional):'); ?>

   <?php echo Form::text('domicilio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el domicilio del paciente']); ?>

   <?php $__errorArgs = ['domicilio'];
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

   <?php echo Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del paciente']); ?>

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



<div class="form-group">
    <?php echo Form::label('area_id', 'Area'); ?>

    <?php echo Form::select('area_id', $areas, null, ['class' => 'form-control']); ?>

    <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="mt-3 alert alert-danger">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group pb-3">
   <?php echo Form::label('enfermeros', 'Enfermeros:'); ?>

   <div class="mt-n2 mb-2">
      <small>Seleccione los enfermeros encargados del paciente</small>
   </div>
   <?php $__currentLoopData = $enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php echo Form::checkbox('enfermeros[]', $enfermero->id, null); ?>

       <?php echo e($enfermero->nombre_y_apellido); ?>

       <br>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php $__errorArgs = ['enfermeros'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <div class="mt-3 alert alert-danger">
           <?php echo e($message); ?>

       </div>
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
<?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/paciente/form.blade.php ENDPATH**/ ?>