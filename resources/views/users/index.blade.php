@extends('layouts.app')
@section('content')

<a href="{{route('user_create')}}"class ="btn" style="background-color: #F08080">tambah data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Email</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Hp</th>
        <th scope="col">Pos</th>
        <th scope="col">Role</th>
        <th scope="col">Aktif</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
       <?php $no=1; ?> 
    @foreach ($data as $d )
        
        <tr>
        <th >{{$no++}}</th>
        <td>{{$d->email}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->user_alamat}}</td>
        <td>{{$d->user_hp}}</td>
        <td>{{$d->user_pos}}</td>
        <td>{{$d->user_role}}</td>
        <td>{{$d->user_aktif}}</td>
        <td>
            <a href="{{route('user_edit', ['id' => $d->id])}}"class = "btn btn-warning"><i class="fas fa-edit"></i></a>
            <form action="{{ route('user_delete', ['id' => $d->id]) }}" method="POST">
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
