

<?php $__env->startSection('content'); ?>
<div>
    <div class="col-md-10 mx-auto">
        <div class="py-4"></div>
        <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
        <?php endif; ?>
        <h3 >Todos los enfermeros</h3>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($enfermero->id); ?></th>
                        <td><?php echo e($enfermero->nombre_y_apellido); ?></td>
                        <td><?php echo e($enfermero->dni); ?></td>
                        <td>
                            <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero<?php echo e($enfermero->id); ?>">Ver más</button>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-enfermero/<?php echo e($enfermero->id); ?>">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero<?php echo e($enfermero->id); ?>">Eliminar</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php $__currentLoopData = $enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="modalEnfermero<?php echo e($enfermero->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($enfermero->nombre_y_apellido); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Dni</h5>
                        <p class="mb-3"><?php echo e($enfermero->dni); ?></p>

                        <h5>Telefono</h5>
                        <p class="mb-3"><?php echo e($enfermero->telefono); ?></p>

                        <h5>Detalles</h5>
                        <p class="mb-3"><?php echo e($enfermero->detalles); ?></p>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero<?php echo e($enfermero->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar enfermero</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el enfermero <?php echo e($enfermero->nombre_y_apellido); ?>?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <?php echo Form::open(['route' => ['enfermero.destroy', $enfermero->id], 'method' => 'delete']); ?>

                            <button type="submit" class="btn btn-danger">Eliminar</a>
                        <?php echo Form::close(); ?>


                        </div>
                    </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Desktop\Desktop\code\resources\views/enfermero/index.blade.php ENDPATH**/ ?>