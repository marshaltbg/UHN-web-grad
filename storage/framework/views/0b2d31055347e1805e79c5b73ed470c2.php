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
            >Upload Dokumen</h1>
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
                    <h3 class="card-title">Data Mahasiswa Calon Wisudawan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th>NIM</th>
                                <td><?php echo e($mahasiswa->nim); ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?php echo e($mahasiswa->name); ?></td>
                            </tr>
                            <tr>
                                <th>Fakultas</th>
                                <td><?php echo e($mahasiswa->fakultas); ?></td>
                            </tr>
                            <tr>
                                <th>Program Studi</th>
                                <td><?php echo e($mahasiswa->program_studi); ?></td>
                            </tr>
                            <tr>
                                <th>Lama Studi</th>
                                <td><?php echo e($mahasiswa->lama_studi); ?></td>
                            </tr>
                            <tr>
                                <th>IPK</th>
                                <td><?php echo e($mahasiswa->ipk); ?></td>
                            </tr>
                            <tr>
                                <th>Status Kelulusan</th>
                                <td><?php echo e($mahasiswa->status_kelulusan); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </thead>
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

        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Upload Dokumen Calon Wisudawan</h3>
                </div>
                <!-- /.card-header -->
                <?php if($dokumen->isEmpty()): ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama file</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Bukti Penyerahan Artefak</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Upload File</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Pernyataan PPKHA</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Upload File</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Surat Bebas Sanksos/Jam Karya</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Upload File</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Surat Pernyataan BAAF</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4">Upload File</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Foto</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">Upload File</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama file</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $dokumen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokumen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Surat Bukti Penyerahan Artefak</td>

                                        <?php if($dokumen->artefak == '-'): ?>

                                        <td>-</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Upload File</button></td>

                                        <?php else: ?>
                                        <td><?php echo e($dokumen->artefak); ?></td>
                                        <td>
                                            <form action="/detail-dokumen" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="file" value="<?php echo e($dokumen->artefak); ?>">
                                                <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                                            </form>
                                        </td>

                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Surat Pernyataan PPKHA</td>

                                        <?php if($dokumen->ppkha == '-'): ?>

                                        <td>-</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Upload File</button></td>

                                        <?php else: ?>
                                        <td><?php echo e($dokumen->ppkha); ?></td>
                                        <td>
                                            <form action="/detail-dokumen" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="file" value="<?php echo e($dokumen->ppkha); ?>">
                                                <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                                            </form>
                                        </td>

                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Surat Bebas Sanksos/Jam Karya</td>
                                        
                                        <?php if($dokumen->sanksos == '-'): ?>

                                        <td>-</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Upload File</button></td>

                                        <?php else: ?>
                                        <td><?php echo e($dokumen->sanksos); ?></td>
                                        <td>
                                            <form action="/detail-dokumen" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="file" value="<?php echo e($dokumen->sanksos); ?>">
                                                <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                                            </form>
                                        </td>
s
                                        <?php endif; ?>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Surat Pernyataan BAAF</td>
                                        
                                        <?php if($dokumen->pernyataan_baaf == '-'): ?>

                                        <td>-</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4">Upload File</button></td>

                                        <?php else: ?>
                                        <td><?php echo e($dokumen->pernyataan_baaf); ?></td>
                                        <td>
                                            <form action="/detail-dokumen" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="file" value="<?php echo e($dokumen->pernyataan_baaf); ?>">
                                                <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                                            </form>
                                        </td>

                                        <?php endif; ?>

                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Foto</td>
                                        <?php if($dokumen->foto == '-'): ?>

                                        <td>-</td>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">Upload File</button></td>

                                        <?php else: ?>
                                        <td><?php echo e($dokumen->foto); ?></td>
                                        <td>
                                            <form action="/detail-dokumen" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="file" value="<?php echo e($dokumen->foto); ?>">
                                                <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                                            </form>
                                        </td>

                                        <?php endif; ?>
                                    </tr>
                                </tbody>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                <?php endif; ?>
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

        <!-- The Modal -->
        <div class="modal" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File Bukti Penyerahan Artefak</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/upload-artefak" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="file_artefak" required>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

        <div class="modal" id="myModal2">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File Surat Pernyataan PPKHA</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/upload-file-ppkha" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="file_ppkha" required>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

        <div class="modal" id="myModal3">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File Surat Bebas Sanksi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/upload-bebas-sanksos" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="file_bebas_sanksos" required>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

        <div class="modal" id="myModal4">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File Surat Pernyataan BAAF</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/upload-pernyataan-baaf" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="file_pernyataan_baaf" required>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

        <div class="modal" id="myModal5">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File Foto Formal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/upload-foto" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="foto" required>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nommensen Internship\master_uhn\resources\views/dokumen/index.blade.php ENDPATH**/ ?>