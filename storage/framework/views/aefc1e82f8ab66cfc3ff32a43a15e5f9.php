<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Edit Category</h5>
            <a href="<?php echo e(route('category.index')); ?>" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('category.update', ['category' => $category->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="<?php echo e($category->title); ?>" class="form-control">
                    <div class="form-text text-danger">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/iliarezaei/New Volume1/laravel/Task-Manager/resources/views/categories/edit.blade.php ENDPATH**/ ?>