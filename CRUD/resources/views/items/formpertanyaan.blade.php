@extends('layouts.master')

@section('content')
<form action="/pertanyaan" method="POST">
@csrf
  <div class="form-group">
    <label for="pertanyaan">Question</label>
    <input type="text" class="form-control" id="pertanyaan" name="judul" placeholder="Enter question">
  </div>
  <div class="form-group">
    <label for="problem">Problem</label>
    <input type="text" class="form-control" id="problem" name="isi"placeholder="Problem">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
