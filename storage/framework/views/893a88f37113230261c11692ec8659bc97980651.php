

<?php $__env->startSection('content'); ?>
    <div class="col-md-10 mx-auto">
        <h1 class="mb-5">Dashboard</h1>
        <div class="row">
            <?php if(Auth::user()->role == 'admin'): ?>
                <div class="mb-5 col-12 col-md-6">
                    <h3>Paciente</h3>
                    <div>
                        <a href="/dashboard/crear-paciente">Crear paciente</a>
                    </div>
                    <div>
                        <a href="/dashboard/pacientes">Listado de pacientes</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(Auth::user()->role == 'admin'): ?>
                <div class="mb-5 col-12 col-md-6">
                    <h3>Enfermero</h3>
                    <div>
                        <a href="/dashboard/crear-enfermero">Crear enfermero</a>
                    </div>
                    <div>
                        <a href="/dashboard/enfermeros">Listado de enfermeros</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="mb-5 col-12 col-md-6">
                <h3>Llamados</h3>
                <div>
                    <a href="/escuchar-llamados">Escuchar llamados</a>
                </div>
                <?php if(Auth::user()->role == 'admin'): ?>
                <div>
                    <a href="/dashboard/llamados">Listado de llamados</a>
                </div>
                <?php endif; ?>
            </div>

            <?php if(Auth::user()->role == 'admin'): ?>
                <div class="mb-5 col-12 col-md-6">
                    <h3>Áreas</h3>
                    <div>
                        <a href="/dashboard/crear-area">Crear área</a>
                    </div>
                    <div>
                        <a href="/dashboard/areas">Listado de áreas</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(Auth::user()->role == 'admin'): ?>
                <div class="mb-5 col-12 col-md-6">
                    <h3>Usuarios</h3>
                    <div>
                        <a href="/dashboard/crear-usuario">Crear usuario</a>
                    </div>
                    <div>
                        <a href="/dashboard/usuarios">Listado de usuarios</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\Olimpiadas v2\code\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>