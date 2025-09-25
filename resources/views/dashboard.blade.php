@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;"
            >Graduation Registrations</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Main Content Section -->
          <div class="col-lg-7">
            <div class="row">
              <!-- First Row -->
              <div class="col-lg-6 col-12">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h2>Pendaftaran<br>Wisuda</h2>
                    <div class="icon">
                      <i class="fas fa-user-plus"></i>
                    </div>                    
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>  
              </div>
              <!-- Second Row -->
              <div class="col-lg-6 col-12">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h2>Verifikasi<br>Fakultas</h2>
                    <div class="icon">
                      <i class="fas fa-check"></i>
                    </div>  
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- Third Row -->
              <div class="col-lg-6 col-12">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h2>Yudisium <br><br></h2>
                    <div class="icon">
                      <i class="fas fa-certificate"></i>
                    </div> 
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- Fourth Row -->
              <div class="col-lg-6 col-12">
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h2>Calon<br>Wisudawan</h2>
                    <div class="icon">
                      <i class="fas fa-user-graduate"></i>
                    </div>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Mini Calendar Section -->
          <div class="col-lg-5 connectedSortable">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Mini Calendar
                </h3>
              </div>
              <div class="card-body pt-0">
                <!-- The mini calendar -->
                <div id="mini-calendar" ></div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
     
@endsection