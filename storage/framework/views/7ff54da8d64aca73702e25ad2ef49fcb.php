

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Todo</h5>
            <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <img width="230" class="rounded" src="<?php echo e(asset('images/' . $todo->image)); ?>" alt="">
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Title</label>
                    <input disabled type="text" value="<?php echo e($todo->title); ?>" class="form-control">
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Category</label>
                    <input disabled type="text" value="<?php echo e($todo->category->title); ?>" class="form-control">
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Status</label>
                    <input disabled type="text" value="<?php echo e($todo->status ? 'completed' : 'doing...'); ?>"
                        class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea disabled class="form-control" name="description" rows="3"><?php echo e($todo->description); ?></textarea>
            </div>
            <div class="d-flex">
                <a href="<?php echo e(route('todo.edit', ['todo' => $todo->id])); ?>" class="btn btn-secondary">Edit</a>
                <form action="<?php echo e(route('todo.destroy', ['todo' => $todo->id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger ms-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/iliarezaei/New Volume1/laravel/Task-Manager/resources/views/todos/show.blade.php ENDPATH**/ ?>