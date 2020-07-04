@extends('layouts.master')

@section('content')
<form action='/jawaban/{pertanyaan_id}' method='POST'>
@csrf
<div class="form-group">
    <label for="problem">Answer</label>
    <input type="text" class="form-control" id="problem" name="jawaban"placeholder="Answer">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection