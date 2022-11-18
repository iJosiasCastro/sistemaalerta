<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  </head>
  <body class="bg-dark text-white col-md-10 mx-auto px-2 mt-5">

    <?php if(count($llamados_importantes)): ?>
        <h3>Llamados importantes</h3>
        <table class="table table-striped table-bordered w-full table-responsive-sm mb-5">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Area</th>
                <th scope="col">Paciente</th>
                <th scope="col">Enfermeros</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha creado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-white">
                <?php $__currentLoopData = $llamados_importantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($llamado->id); ?></th>
                    <th><?php echo e($llamado->area->numero_de_area); ?></th>
                    <th><?php echo e($llamado->paciente->nombre_y_apellido); ?></th>
                    <th>
                        <?php $__currentLoopData = $llamado->paciente->enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($enfermero->nombre_y_apellido); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </th>
                    <td>
                        <?php echo e(ucfirst($llamado->tipo)); ?>

                    </td>
                    <td><?php echo e($llamado->created_at); ?></td>
                    <td>
                        
                        <?php if(!$llamado->atendido): ?>
                            <a class="btn btn-warning mr-2" href="/dashboard/atender-llamado/<?php echo e($llamado->id); ?>">Atender llamado</a>
                        <?php endif; ?>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h3>Llamados no atendidos</h3>
    <?php if(count($llamados)): ?>
        <table class="table table-striped table-bordered w-full table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Area</th>
                <th scope="col">Paciente</th>
                <th scope="col">Enfermeros</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha creado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-white">
                <?php $__currentLoopData = $llamados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($llamado->id); ?></th>
                    <th><?php echo e($llamado->area->numero_de_area); ?></th>
                    <th><?php echo e($llamado->paciente->nombre_y_apellido); ?></th>
                    <th>
                        <?php $__currentLoopData = $llamado->paciente->enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($enfermero->nombre_y_apellido); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </th>
                    <td>
                        <?php echo e(ucfirst($llamado->tipo)); ?>

                    </td>
                    <td><?php echo e($llamado->created_at); ?></td>
                    <td>
                        
                        <?php if(!$llamado->atendido): ?>
                            <a class="btn btn-warning mr-2" href="/atender-llamado/<?php echo e($llamado->id); ?>">Atender llamado</a>
                        <?php endif; ?>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        No hay llamados sin atender
    <?php endif; ?>
    
    <?php if(count($llamados_importantes)): ?>
        <audio controls autoplay id="audioElement" class="d-none">
            <source src="<?php echo e(asset('tone.mp3')); ?>" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
    <?php endif; ?>

    <script>
        setInterval(function (){
            location.reload()
        }, 3000);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --><!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script></body>
</html><?php /**PATH C:\Users\Desktop\Desktop\code\resources\views/llamado/listen.blade.php ENDPATH**/ ?>