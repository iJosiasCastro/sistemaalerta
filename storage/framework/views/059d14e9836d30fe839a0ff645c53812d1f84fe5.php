

<?php $__env->startSection('content'); ?>
<div>
    <div class="col-md-10 mx-auto">
        <div class="py-4"></div>
        <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between mb-3">
            <h3>Todos los llamados</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir reporte
            </button>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered w-full table-responsive-lg">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Area</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Atendido</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha atendido</th>
                    <th scope="col">Fecha creado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $llamados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($llamado->id); ?></th>
                        <th><?php echo e($llamado->area->numero_de_area); ?></th>
                        <th><?php echo e($llamado->paciente->nombre_y_apellido); ?></th>
                        <td>
                            <?php if($llamado->atendido): ?>
                                Atendido
                            <?php else: ?>
                                No atendido
                            <?php endif; ?>
                        </td>
                        <td><?php echo e(ucfirst($llamado->tipo)); ?></td>
                        <td><?php if($llamado->fecha_atendido): ?><?php echo e($llamado->fecha_atendido); ?><?php else: ?> --- <?php endif; ?></td>
                        <td><?php echo e($llamado->created_at); ?></td>
                        <td>
                            
                            <?php if(!$llamado->atendido): ?>
                                <a class="btn btn-warning mr-2" href="/dashboard/atender-llamado/<?php echo e($llamado->id); ?>">Atender llamado</a>
                            <?php endif; ?>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero<?php echo e($llamado->id); ?>">Eliminar</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php $__currentLoopData = $llamados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="modalEnfermero<?php echo e($llamado->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($llamado->nombre_y_apellido); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Nombre y apellido</h5>
                        <p class="mb-3"><?php echo e($llamado->nombre_y_apellido); ?></p>

                        <h5>Dni</h5>
                        <p class="mb-3"><?php echo e($llamado->dni); ?></p>

                        <?php if(!empty($llamado->localidad)): ?>
                            <h5>Localidad</h5>
                            <p class="mb-3"><?php echo e($llamado->localidad); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($llamado->domicilio)): ?>
                            <h5>Domicilio</h5>
                            <p class="mb-3"><?php echo e($llamado->domicilio); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($llamado->telefono)): ?>
                            <h5>Telefono</h5>
                            <p class="mb-3"><?php echo e($llamado->telefono); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($llamado->detalles)): ?>
                            <h5>Detalles</h5>
                            <p class="mb-3"><?php echo e($llamado->detalles); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($llamado->area_id)): ?>
                            <h5>Area_id</h5>
                            <p class="mb-3"><?php echo e($llamado->area_id); ?></p>
                        <?php endif; ?>

                        

                        

                        

                        

                        


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero<?php echo e($llamado->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar llamado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el llamado <?php echo e($llamado->id); ?>?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <?php echo Form::open(['route' => ['llamado.destroy', $llamado->id], 'method' => 'delete']); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/llamado/index.blade.php ENDPATH**/ ?>