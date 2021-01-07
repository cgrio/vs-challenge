<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products </h2>
            </div>
            <div class="pull-right">
                <form method="GET" action="/admin/products">
                 <div class="input-group mb-3">
                     <input type="text" class="form-control" name="q" placeholder="search" aria-label="search" aria-describedby="search">
                     <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="cancel">Clean</button>
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                     </div>
                   </div>
                </form>
             </div>
            <div class="pull-right mb-3">
                <a class="btn btn-success" href="<?php echo e(route('admin.products.create')); ?>" title="Nova Product"> <i class="fa fa-plus-circle">New</i>
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
            <td>Brand</td>
            <td>Qty</td>
            <td>Price</td>
            <td width='280px'>Actions</td>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->brand); ?></td>
            <td><?php echo e($product->qty); ?></td>
            <td><?php echo e($product->price); ?></td>

            <td>
                <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST">

                    <a href="<?php echo e(route('admin.products.show', $product->id)); ?>" title="show">
                        <i class="fa fa-eye text-success  fa-lg">View</i>
                    </a>

                    <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>">
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
<div class="links-paginacao">
    <?php echo $products->links("pagination::bootstrap-4"); ?>


</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/products/index.blade.php ENDPATH**/ ?>