@extends('layout.main')
@section('content')
<!--content wrapper-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pengumuman</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

  <!-- Main content -->

      <section class="content">
      
        <form action="/pengumuman-update" method="POST" enctype="multipart/form-data">
        @csrf

          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Form Edit Pengumuman</h3>
                  </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Lembaga</th>
                        <td>
                          <select name="lembaga" class="form-control select2" style="width: 100%;">
                            <option selected="selected">Fakultas Teknik</option>
                            <option>Fakultas Hukum</option>
                            <option>Fakultas Bahasa dan Seni</option>
                            <option>Fakultas Keguruan dan Ilmu Pendidikan</option>
                            <option>Fakultas Ilmu Sosial dan Politik</option>
                            <option>FAkultas Peternakan</option>
                          </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Judul Berita</th>
                        <td>
                          <input type="hidden" name="id" value="{{$data->id}}"/>
                          <input name="judul" type="text" value="{{$data->judul}}" class="form-control" id="exampleInputEmail1" placeholder="Judul Berita">
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Rilis</th>
                        <td>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input name="date_release" type="date" class="form-control float-right" id="reservation" required>
                          </div>
                        </td>
                    </tr>
                    </thead>
                    </table>
                    <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Berita
                          </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <textarea name="content" id="summernote">
                            {!! $data->content !!}
                          </textarea>
                        </div>
                    </div>
                    <button class="btn btn-info btn-lg" >Submit</button>
                  </div>
                </div>
            </div>
            </div>
          </div>

        </form>

      </section>
</div>

@endsection


