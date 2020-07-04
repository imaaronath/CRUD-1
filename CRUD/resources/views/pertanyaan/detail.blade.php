@extends('layouts.master')

@section('content')
<div class="container">           
<table class="table table-bordered">
<thead>
    <tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Tanggal Dibuat</th>
    <th>Tanggal Diupdate</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->judul}}</td>
        <td>{{$item->isi}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
    </tr>
</tbody>
</table>
</div>
@endsection