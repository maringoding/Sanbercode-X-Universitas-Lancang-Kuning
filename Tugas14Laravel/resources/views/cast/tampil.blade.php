@extends('layouts.master')

@section('title')
Halaman Tampil Cast  
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary"> Tambah </a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">UMUR</th>
        <th scope="col">BIO</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($cast as $key =>$item)
    <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>{{$item->bio}}</td>
        <td>
        <form action="/cast/{{$item->id}}" method="POST" onsubmit="return confirmDelete(event)">
            <a href="/cast/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
            <a href="/cast/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
            @csrf
            @method("DELETE")
            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>Data Cast Kosong</td>
    </tr>   
    @endforelse
    </tbody>
  </table>
@endsection