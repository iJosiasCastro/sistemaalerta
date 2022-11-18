

<?php $__env->startSection('content'); ?>
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Crear paciente</h3>
         <?php echo Form::open(['route' => 'paciente.create', 'autocomplete' => 'off']); ?>


            <?php echo $__env->make('paciente.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo Form::submit('Crear paciente', ['class' => 'btn btn-primary']); ?>



         <?php echo Form::close(); ?>

      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/paciente/create.blade.php ENDPATH**/ ?>