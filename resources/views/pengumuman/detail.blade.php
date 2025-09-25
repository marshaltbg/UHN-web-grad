@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <br>
        <div class="card text-center">
            <div class="card-header">
                <h3>{{$data->judul}}</h3>
                <p>({{$data->lembaga}})  Tanggal Publish : {{$data->tanggal}}</p>
                
                @if(Auth::user()->role == 'Admin')
                <div class="row justify-content-md-center">
                    <form action="/pengumuman-edit" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <button class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button>
                    </form>
                    &nbsp&nbsp&nbsp
                    <form action="/pengumuman-delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i>Delete</button>
                    </form>
                </div>
                @endif

            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Isi:</h5>
            <br>
            <p class="card-text">{!! $data->content !!}</p>
        </div>
</div>

@endsection