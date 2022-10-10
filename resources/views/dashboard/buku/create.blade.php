@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah BUku</h1>
        
      </div>

<div class="col-lg-8">
    <form method="post" action="{{route('simpan-buku')}}">
        @csrf
        <div class="mb-3">
            <label for="NoBook" class="form-label">No Book</label>
            <input type="text" class="form-control" id="NoBook" aria-describedby="NoBook" name="NoBook">
            <div id="NoBook" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection