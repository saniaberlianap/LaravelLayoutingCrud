
@extends('layout/main')

@section('title', 'Index Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <center>
      	<h1 class="mt-4"><font color="#2c6ca9">Mahasiswa TI - M4A </font></h1>
	</center>
<p><br>
	<a href="/students/create" class="btn btn-primary my-1">Tambah Data Mahasiswa</a>
		@if (session('status'))
		    <div class="alert alert-success">
		        {{ session('status') }}
		    </div>
		@endif
	     <ul class="list-group">
	      	@foreach($students as $student)
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    {{ $student -> nama }}
			    <a href="/students/{{$student -> id}}" class="badge badge-info">Detail</a>
			  </li>
	  		@endforeach
		</ul>
    </div>
  </div>
</div>
@endsection