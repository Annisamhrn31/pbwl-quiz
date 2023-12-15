@extends('layouts.app')
@section('content')
<a href="{{route('golongan_create')}}"class ="btn" style="background-color: #F08080">tambah data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kode golongan</th>
        <th scope="col">Nama golongan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
       <?php $no=1; ?> 
    @foreach ($data as $d )
        
        <tr>
        <th >{{$no++}}</th>
        <td>{{$d->gol_kode}}</td>
        <td>{{$d->gol_nama}}</td>
        <td>
            <a href="{{route('golongan_edit', ['id' => $d->id])}}"class = "btn btn-warning"><i class="fas fa-edit"></i></a>
            <form action="{{ route('golongan_delete', ['id' => $d->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
      </tr>
      @endforeach 
    
    </tbody>
  </table>
@endsection 

