<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('admin.users.index')); ?>" title="Go back"> <i class="fa fa-backward "></i> </a>
            </div>
        </div>
    </div>

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

    <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">

            <input type="text" name="name" placeholder="Name"   class="form-control mb-2" value="<?php echo e(old('name') ?? $user->name ?? ''); ?>"/>
            <input type="text" name="email" placeholder="E-mail"   class="form-control col-12 mb-2" value="<?php echo e(old('email') ?? $user->email ?? ""); ?>"/>
            <input type="text" name="password" placeholder="Password"   class="form-control col-6 mb-2" value=""/>
            <input type="text" name="password_confirmation" placeholder="Password Confirmation"   class="form-control col-6 mb-2" value=""/>



            <select name="status" id="status" class="form-control mb-2">
                <option value="2" <?php echo e((old() ? old('status', 2) : ($user->status ?? -2) == 2 ) ? 'selected' : ''); ?>>Admin</option>
                <option value="1" <?php echo e((old() ? old('status', 1) : ($user->status ?? -1) == 1 ) ? 'selected' : ''); ?>>Usuário</option>
                <option value="0" <?php echo e((old() ? old('status', 0) : ($user->status ?? -1) == 0 ) ? 'selected' : ''); ?>>Inativa</option>
            </select>

        </div>
        <div class="row">
        <div class="col-6">

            <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
        </div>

        <div class="col-6">
            <button type="reset" class="btn btn-light" value="Cancelar">Cancelar</button>
        </div>
        </div>

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>