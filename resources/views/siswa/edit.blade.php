@extends('layouts.master')

@section('content')

<h1>Edit data siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
           {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                <form action="/siswa/{{$data->id}}/update" method="POST">
                  @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$data->nama_depan}}">
              </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$data->nama_belakang}}">
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                  <option selected disable>{{ $data->jenis_kelamin }}</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$data->agama}}">
                </div>

                <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->alamat}}</textarea>
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-warning">Update</button>
                </div>
         </form>
     </div>
  </div>

@endsection
       

        
