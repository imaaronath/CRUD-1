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
          <td>
            <a href='/jawaban/{{$item->id}}' class = 'btn btn-sm btn-info'>Jawaban</a>
            <a href='/pertanyaan/{{$item->id}}' class = 'btn btn-sm btn-info'>Detail</a>
            <a href='/pertanyaan/{{$item->id}}/edit' class = 'btn btn-sm btn-default'>edit</a>
            <form action = '/pertanyaan/{{$item->id}}' method='POST' style="display:inline">
              @csrf
              @method('delete')
              <button type='submit' class='btn btn-sm btn-danger'><i class= 'fas fa-trash'></i></button>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection