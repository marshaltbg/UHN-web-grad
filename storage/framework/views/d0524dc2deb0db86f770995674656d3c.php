<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;">
            <i class="nav-icon fas fa-info-circle"></i>
            Pengumuman
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Table content -->
   <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header"  style="background-color: #235d7e; color: white;">
          <marquee behavior="scroll" direction = "left">
            <h3 class="card-title" style="letter-spacing: 3px;  font-family: 'Lucida Bright', sans-serif; font-size: 20px; font-weight: bold; color: #dfd4d4;">
                Pro Deo et Patria 
                <img src="<?php echo e(asset('lte/dist/img/nommensen.png')); ?>" alt="AdminLTE Logo" style="margin: 0 25px; width: 40px; height: auto;">
                Bagi Tuhan dan Ibu Pertiwi
            </h3>
          </marquee>
        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Lembaga</th>
                <th>Berita</th>
                <th>Rilis</th>
                <th>Setting
                <?php if(Auth::user()->role == 'Admin'): ?>
                  <a href="/tambah-pengumuman" class="btn btn-success btn-sm" style="margin-left: 10px;">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                <?php endif; ?>
                </th>
              </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($data->lembaga); ?></td>
                <td><?php echo e($data->judul); ?></td>
                <td><?php echo e($data->tanggal); ?></td>
                  <td class="project-actions text-left">
                      <div class="row">
                        <form action="/pengumuman-content" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                          <button class="btn btn-primary btn-sm"> <i class="fas fa-eye"></i></button>
                        </form>&nbsp
                        <?php if(Auth::user()->role == 'Admin'): ?>
                        <form action="/pengumuman-edit" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                          <button class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                        </form>&nbsp

                        <form action="/pengumuman-delete" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                          <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                        </form>&nbsp
                        <?php endif; ?>
                      </div>
                  </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nommensen Internship\master_uhn\resources\views/pengumuman/index.blade.php ENDPATH**/ ?>