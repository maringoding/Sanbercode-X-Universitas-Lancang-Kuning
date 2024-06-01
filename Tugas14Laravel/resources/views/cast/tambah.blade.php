@extends('layouts.master')

@section('title')
    Halaman Tambah Cast
@endsection

@section('content')

<form method="POST" action="/cast">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    <div class="form-group">
      <label>Cast Name</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>Cast Umur</label>
      <input type="text" class="form-control" name="umur">
    </div>
    <div class="form-group">
        <label>Cast Bio</label><br>
         <textarea name="bio" class="from-control" cols="165" rows="10"></textarea>
     </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection