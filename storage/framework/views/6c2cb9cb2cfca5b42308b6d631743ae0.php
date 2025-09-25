<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <br>
        <div class="card text-center">
            <div class="card-header">
                <h3><?php echo e($data->judul); ?></h3>
                <p>(<?php echo e($data->lembaga); ?>)  Tanggal Publish : <?php echo e($data->tanggal); ?></p>
                
                <?php if(Auth::user()->role == 'Admin'): ?>
                <div class="row justify-content-md-center">
                    <form action="/pengumuman-edit" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        <button class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button>
                    </form>
                    &nbsp&nbsp&nbsp
                    <form action="/pengumuman-delete" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i>Delete</button>
                    </form>
                </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Isi:</h5>
            <br>
            <p class="card-text"><?php echo $data->content; ?></p>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nommensen Internship\master_uhn\resources\views/pengumuman/detail.blade.php ENDPATH**/ ?>