@extends('layouts.app')
@section('content')
<div class="card p-4 shadow p-3 mb-5 bg-body-tertiary rounded">

    <h3>HAI TEMAN-TEMAN</h3>
    <h3>Selamat Datang....</h3>
    <h2 style="color : #F08080">
        {{ Auth::user()->name }}

    </h2>
</div>
@endsection