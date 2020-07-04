@extends('layouts.master')

@section('content')
<form action="/pertanyaan/{{$item->id}}" method="POST">
@method('put')
@csrf
  <div class="form-group">
    <label for="pertanyaan">Question</label>
    <input type="text" class="form-control" id="pertanyaan" name="judul" value="{{$item->judul}}"placeholder="Enter question">
  </div>
  <div class="form-group">
    <label for="problem">Problem</label>
    <input type="text" class="form-control" id="problem" value="{{$item->isi}}"name="isi"placeholder="Problem">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
