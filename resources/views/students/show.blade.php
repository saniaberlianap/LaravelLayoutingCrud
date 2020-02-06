
@extends('layout/main')

@section('title', 'Show Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-4"><font color="#2c6ca9">Detail Mahasiswa</font></h1>
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title">{{$student->nama}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
          <p class="card-text">{{$student->nohp}}</p>
          <p class="card-text">{{$student->email}}</p>

          <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
          <form action="/students/{{ $student->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/students" class="card-link">Kembali</a>
        </div>
</div>

    </div>
  </div>
</div>
@endsection