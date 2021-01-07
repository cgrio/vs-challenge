<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('admin.users.create')); ?>" title="Nova User"> <i class="fa fa-plus-circle">New</i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>

            <td>Name</td>
            <td>E-mail</td>
            <td>Status</td>

            <td width='280px'>Ações</td>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->getStatusText()); ?></td>

            <td>
                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST">

                    <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" title="show">
                        <i class="fa fa-eye text-success  fa-lg">View</i>
                    </a>

                    <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>">
                        <i class="fa fa-pencil  fa-lg">Edit</i>

                    </a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" title="apagar" style="border: none; background-color:transparent;">
                        <i class="fa fa-trash fa-lg text-danger">Delete</i>

                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $users->links("pagination::bootstrap-4"); ?>

</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/users/index.blade.php ENDPATH**/ ?>