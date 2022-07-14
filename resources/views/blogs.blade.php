

@extends('layouts.main')

@section('container')
    
    @foreach ($blogs as $blog)
        <article class="mb-5">
            <h2>
                <a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
            </h2>
            <p>{{ $blog->excerpt }}</p>    
        </article>
        
    @endforeach

@endsection
