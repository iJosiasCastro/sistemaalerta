

<?php $__env->startSection('content'); ?>
<div>
    <div class="col-md-10 mx-auto">
        <div class="py-4"></div>
        <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
        <?php endif; ?>
        <h3 >Todas los áreas</h3>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">Numero</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($area->numero_de_area); ?></td>
                        <td><?php echo e($area->descripcion); ?></td>
                        <td>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-area/<?php echo e($area->id); ?>">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarArea<?php echo e($area->id); ?>">Eliminar</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="modalArea<?php echo e($area->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($area->nombre_y_apellido); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Dni</h5>
                        <p class="mb-3"><?php echo e($area->dni); ?></p>

                        <h5>Telefono</h5>
                        <p class="mb-3"><?php echo e($area->telefono); ?></p>

                        <h5>Detalles</h5>
                        <p class="mb-3"><?php echo e($area->detalles); ?></p>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarArea<?php echo e($area->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar area</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el area <?php echo e($area->numero_de_area); ?>?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <?php echo Form::open(['route' => ['area.destroy', $area->id], 'method' => 'delete']); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Desktop\Desktop\code\resources\views/area/index.blade.php ENDPATH**/ ?>