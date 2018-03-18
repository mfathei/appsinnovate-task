@extends ('layouts.master')

@section ('content')

<div style="width: 100%;
     margin-bottom: 50px;">
    <a href='/news/create' class="btn btn-primary float-right">Add News</a>
</div>

@foreach($news as $post)

@include ('news.post')

@endforeach

@endsection