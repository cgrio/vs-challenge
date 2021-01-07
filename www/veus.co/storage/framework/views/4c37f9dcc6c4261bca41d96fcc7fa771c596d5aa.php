<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-12">
            <h2>Users</h2>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Atenção!</strong> Revise as informações preenchidas.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
            <form action="/admin/users" method="POST">
            <?php echo csrf_field(); ?>
       <?php echo $__env->make('admin.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/users/create.blade.php ENDPATH**/ ?>