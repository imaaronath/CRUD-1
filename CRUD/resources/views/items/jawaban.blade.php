@extends('layouts.master')

@section('content')
<div class="container">           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->isi}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection