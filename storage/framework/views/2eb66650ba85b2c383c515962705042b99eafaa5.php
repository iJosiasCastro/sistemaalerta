

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
            <h3>Todos los pacientes</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir datos
            </button>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Area</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($paciente->id); ?></th>
                        <th><?php echo e($paciente->nombre_y_apellido); ?></th>
                        <td><?php echo e($paciente->dni); ?></td>
                        <td><?php echo e($paciente->area_id); ?></td>
                        <td>
                            <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero<?php echo e($paciente->id); ?>">Ver más</button>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-paciente/<?php echo e($paciente->id); ?>">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero<?php echo e($paciente->id); ?>">Eliminar</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="modalEnfermero<?php echo e($paciente->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($paciente->nombre_y_apellido); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Nombre y apellido</h5>
                        <p class="mb-3"><?php echo e($paciente->nombre_y_apellido); ?></p>

                        <h5>Dni</h5>
                        <p class="mb-3"><?php echo e($paciente->dni); ?></p>

                        <?php if(!empty($paciente->localidad)): ?>
                            <h5>Localidad</h5>
                            <p class="mb-3"><?php echo e($paciente->localidad); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($paciente->domicilio)): ?>
                            <h5>Domicilio</h5><div class="d-flex justify-content-between mb-3">
            <h3>Todos los llamados</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir reporte
            </button>
        </div>
                            <p class="mb-3"><?php echo e($paciente->domicilio); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($paciente->telefono)): ?>
                            <h5>Telefono</h5>
                            <p class="mb-3"><?php echo e($paciente->telefono); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($paciente->detalles)): ?>
                            <h5>Detalles</h5>
                            <p class="mb-3"><?php echo e($paciente->detalles); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($paciente->area_id)): ?>
                            <h5>Area</h5>
                            <p class="mb-3"><?php echo e($paciente->area->numero_de_area); ?></p>
                        <?php endif; ?>

                        <?php if(!empty($paciente->enfermeros)): ?>
                            <h5>Enfermeros</h5>
                            <?php $__currentLoopData = $paciente->enfermeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enfermero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="mb-1"><?php echo e($enfermero->nombre_y_apellido); ?> - <a href="/dashboard/editar-enfermero/<?php echo e($enfermero->id); ?>">Ver perfil</a></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        

                        

                        

                        

                        


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero<?php echo e($paciente->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar paciente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el paciente <?php echo e($paciente->nombre_y_apellido); ?>?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <?php echo Form::open(['route' => ['paciente.destroy', $paciente->id], 'method' => 'delete']); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/paciente/index.blade.php ENDPATH**/ ?>