@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->slug }}</p>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection