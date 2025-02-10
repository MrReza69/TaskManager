<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /media/iliarezaei/New Volume/laravel/Task-Manager/resources/views/layout/master.blade.php ENDPATH**/ ?>