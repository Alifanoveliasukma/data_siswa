@extends('layouts.master')

@section('content')

@stop
@section('content1')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
           {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Siswa</h1>
                </div>
            <div class="col-6 mt-3">
                <button type="button" class="btn btn-primary btn-sm float right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                    </button>
                <!-- modal --->
            </div>

<table class="table table-hover">
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    @foreach($data_siswa as $a)
        <tr>
            <td>{{$a->nama_depan}}</td>
            <td>{{$a->nama_belakang}}</td>
            <td>{{$a->jenis_kelamin}}</td>
            <td>{{$a->agama}}</td>
            <td>{{$a->alamat}}</td>
            <td>
                <a href="/siswa/{{$a->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/siswa/{{$a->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
            </td>
            </tr>
    @endforeach
</table>
            </div>
        </div>

        
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <!--Awal dari form overview -->
    <form action="siswa/create" method="POST">
          @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
      </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Nama Belakang</label>
        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
        </div>

        <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option>Pilih</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>
        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      
    <!--Akhir dari form overview -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
         </form>
   
   @endsection


