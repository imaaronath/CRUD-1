@extends('layouts.master')

@section('content')
<div class="container">           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->judul}}</td>
          <td>{{$item->isi}}</td>
          <td><button><a href='/jawaban/{{$item->id}}'>Jawaban</a></button></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection