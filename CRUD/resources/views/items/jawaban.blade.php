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
        <tr>
          <td>{{$items->id}}</td>
          <td>{{$items->isi}}</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection