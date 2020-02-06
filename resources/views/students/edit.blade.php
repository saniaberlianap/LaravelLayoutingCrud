
@extends('layout/main')

@section('title', 'Edit Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-4"><font color="#2c6ca9">Form Ubah Data Mahasiswa</font></h1>
      <p>
      <form method="post" action="/students/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama Mahasiswa</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
          @error('nama')
          <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{$student->nim}}">
          @error('nim')
          <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="nohp">No HP</label>
          <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="Masukkan No HP" name="nohp" value="{{$student->nohp}}">
           @error('nohp')
          <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{$student->email}}">
          @error('email')
          <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>

    </div>
  </div>
</div>
@endsection