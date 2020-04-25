@extends('layout/main')

@section('title','Daftar Matakuliah')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class='mt-3'>Daftar Matakuliah  !</h1>
        <a href="/ujian/create" class="btn btn-primary my-3">Tambah Matakuliah</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!-- <ul class="list-group">
            @foreach($ujian as $un) 
                <li class="list-group-item d-flex justify-content-between align-items-center">                   
                    {{$un->nama_mk }}
                    <a href="/ujian/{{$un->id}}" class="badge badge-info">detail</a>
                </li>    
            @endforeach           
            </ul> -->
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama MK</th>
                    <th scope="col">Dosen</th>                    
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ujian as $un)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$un->nama_mk}}</td>
                        <td>{{$un->dosen}}</td>                  
                        <td>
                            <a href="/ujian/{{$un->id}}" class="badge badge-info">detail</a>                                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>

      </div>
  </div>
</div>

@endsection