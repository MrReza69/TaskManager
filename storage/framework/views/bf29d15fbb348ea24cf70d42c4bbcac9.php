<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Todos</h5>
            <a href="<?php echo e(route('todo.create')); ?>" class="btn btn-dark">create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img width="90" class="rounded" src="<?php echo e(asset('images/' . $todo->image)); ?>" alt="image">
                            </td>
                            <td><?php echo e($todo->title); ?></td>
                            <td><?php echo e($todo->category->title); ?></td>
                            <td>
                                <a href="<?php echo e(route('todo.show', ['todo' => $todo->id])); ?>"
                                    class="btn btn-sm btn-secondary">Show</a>
                                <?php if($todo->status): ?>
                                    <button disabled class="btn btn-sm btn-outline-danger">Completed</button>
                                <?php else: ?>
                                    <a href="<?php echo e(route('todo.completed', ['todo' => $todo->id])); ?>" class="btn btn-sm btn-info">Done?</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($todos->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/iliarezaei/New Volume1/laravel/Task-Manager/resources/views/todos/index.blade.php ENDPATH**/ ?>