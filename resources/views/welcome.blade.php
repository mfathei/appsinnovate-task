@extends ('layouts.master')

@section ('content')

@foreach($news as $post)

    @include ('news.post')

@endforeach
    
@endsection