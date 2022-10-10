@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Buku</h1>
        
      </div>

<div class="col-lg-8">
    <form method="post" action="{{url('edit-buku',$data->id)}}">
        @csrf
        <div class="mb-3">
            <label for="NoBook" class="form-label">No Book</label>
            <input type="text" class="form-control" id="NoBook" aria-describedby="NoBook" name="NoBook" value="{{$data->NoBook}}">
            <div id="NoBook" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$data->no_hp}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
        </div>
        <div class="mb-3">
            <label for="tantanggal_bukugal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal_buku" name="tanggal_buku" value="{{$data->tanggal_buku}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection