@extends('layout.main')
@section('content')
    @if(session('alert'))
        <script>
            alert('{{ session('alert') }}');
        </script>
    @endif
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
                        @csrf
                        <div class="input-group mb-3">
                          <input type="text" name="faculty_name" class="form-control" placeholder="Nama Fakultas" required aria-describedby="basic-addon2">
                          <button class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                      </form>
                    </div>

                    <div class="col-lg-4">
                      <form action="/wisudawan-prodi" method="post">
                        @csrf
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
                    @foreach($dataMahasiswa as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->nim}}</td>
                        <td>{{$student->jenis_kelamin}}</td>
                        <td>{{$student->lama_studi}}</td>
                        <td>{{$student->fakultas}}</td>
                        <td>{{$student->program_studi}}</td>
                        <td>
                          <form action="/detail-wisudawan" method="post">
                            @csrf
                            <input type="hidden" name="nim" value="{{$student->nim}}">
                            <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
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
                        @csrf
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
@endsection