@extends('layouts.app')
@section('content')
<form action="{{route('golongan_store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Golongan kode</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "gol_kode">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama kode</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "gol_nama">
    </div>
    
  
    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
  </form>
@endsection