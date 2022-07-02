@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $blog["title"] }}</h2>
        <h5>By : {{ $blog["author"] }}</h5>
        <p>{{ $blog["blog"] }}</p>
    </article>

    <a href="/blogs">Back to Blogs</a>
    
@endsection