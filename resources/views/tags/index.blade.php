@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center text-primary">All Tags</h2>
            <div class="container">
                @foreach ($tags as $tag)
                    <li><a href="#">{{ $tag->name }}</a></li>
                @endforeach
            </div>

            {{ $tags->links() }}
        </div>
    </div>

@endsection