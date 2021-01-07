<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST">

                    <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" title="show">
                        <i class="fa fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>">
                        <i class="fa fa-pencil  fa-lg"></i>
                    </a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" title="apagar" style="border: none; background-color:transparent;">
                        <i class="fa fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </div>
            <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('admin.users.index')); ?>" title="Go back"> <i class="fa fa-backward ">Back</i> </a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please review your information.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

<div class="row">
    <div class="col-3">Name</div>
<div class="col-9"><?php echo e($user->name); ?></div>
</div>
<div class="row">
    <div class="col-3">E-mail</div>
<div class="col-9"><?php echo e($user->email); ?></div>
</div>

<div class="row">
    <div class="col-3">Status</div>
<div class="col-9"><?php echo e($user->getStatusText()); ?></div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/users/show.blade.php ENDPATH**/ ?>