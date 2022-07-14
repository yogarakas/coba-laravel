@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $blog->title }}</h2>
        {!! $blog->body !!}
    </article>

    <a href="/blogs">Back to Blogs</a>
    
@endsection