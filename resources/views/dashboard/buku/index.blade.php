@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Buku</h1>
        
      </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

      <div class="table-responsive">
        <a href="/dashboard/buku/create" class="btn btn-success mb-2">Tambah Buku</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">No Book</th>
              <th scope="col">Nama Pemilik</th>
              <th scope="col">No HP</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($buku as $b)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>BOOK/{{ $b->tanggal_buku }}/{{$b->NoBook}}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->no_hp }}</td>
                <td>{{$b->email}}</td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete-buku',$b->id)}}">Delete</a>
                    <a class="btn btn-primary" href="{{url('edit-buku',$b->id)}}">Edit</a>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>

@endsection