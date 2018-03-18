@extends('layouts.master')

@section('content')
<h1  class="page-heading center" align="center">Add News</h1>
<div style="width: 100%;
     margin-bottom: 50px;">
    <a href='/' class="float-right"><i class="glyphicon glyphicon-arrow-left" area-hidden="true"></i>Back</a>
</div>
@include('layouts.error')

<form method="post" action="/news/create/">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">News Title </label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"/>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">News Details</label>
        <textarea class="form-control" id="summernote" name="body" value="{{ old('body') }}"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <br/><br/>
</form>


@endsection

@section ('scripts')

<script>

$(document).ready(function(){
   $('#summernote') .summernote({
       height: 250
   });
});

</script>

@endsection