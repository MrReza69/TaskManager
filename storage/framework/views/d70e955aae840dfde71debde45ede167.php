

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Edit Todo</h5>
            <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('todo.update', ['todo' => $todo->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    <div class="form-text text-danger">
                        <?php $__errorArgs = ['image'];
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
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="<?php echo e($todo->title); ?>" class="form-control">
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
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($todo->category_id == $category->id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>">
                                <?php echo e($category->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="form-text text-danger">
                        <?php $__errorArgs = ['category_id'];
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
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo e($todo->description); ?></textarea>
                    <div class="form-text text-danger">
                        <?php $__errorArgs = ['description'];
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/iliarezaei/New Volume1/laravel/Task-Manager/resources/views/todos/edit.blade.php ENDPATH**/ ?>