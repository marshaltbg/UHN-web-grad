<?php $__env->startSection('content'); ?>
    <?php if(session('alert')): ?>
        <script>
            alert('<?php echo e(session('alert')); ?>');
        </script>
    <?php endif; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;"
            >Wisudawan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Table content -->
        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Upload Data Wisudatan</button>
                
                <div class="col-md-8 float-right">
                  <div class="row">
                    <div class="col-lg-4">
                      <form action="/wisudawan-faculty" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                          <input type="text" name="faculty_name" class="form-control" placeholder="Nama Fakultas" required aria-describedby="basic-addon2">
                          <button class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                      </form>
                    </div>

                    <div class="col-lg-4">
                      <form action="/wisudawan-prodi" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                          <input type="text" name="prodi_name" class="form-control" placeholder="Nama Program Studi" required aria-describedby="basic-addon2">
                          <button class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Lama Studi</th>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $dataMahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->nim); ?></td>
                        <td><?php echo e($student->jenis_kelamin); ?></td>
                        <td><?php echo e($student->lama_studi); ?></td>
                        <td><?php echo e($student->fakultas); ?></td>
                        <td><?php echo e($student->program_studi); ?></td>
                        <td>
                          <form action="/detail-wisudawan" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="nim" value="<?php echo e($student->nim); ?>">
                            <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">File Data Wisudawan</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <form action="/import-wisudawan" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <!-- Modal body -->
                        <div class="mb-3">
                            <input name="file" class="form-control" type="file" id="formFile" required>
                        </div>
                      <!-- Modal footer -->
                      <input type="submit" class ="btn btn-success">

                    </form>
                  </div>

                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nommensen Internship\master_uhn\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>