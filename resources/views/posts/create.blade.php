@extends('layout')
@section('content')
    <h2 class="text-center">New Post Create</h2>
    <div class="row">

        <div class="col-md-8 mx-auto">
            @if(isset($errors)&& count($errors)>0)
                <div class="alert alert-dismissable alert-danger fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @foreach($errors->all() as $error)
                        <li><strong>{!! $error !!}</strong></li>
                    @endforeach
                </div>

            @endif
            <form action="{{ route('post.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form">
                    <label for="title">Title : </label>
                    <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                </div>
                <div class="form">
                    <label for="body">Body</label>
                    <textarea class="form-control" rows="3" name="body" id="body">

                </textarea>
                </div>
                <input type="submit" class="btn btn-primary mt-5"    value="Create">

            </form>
        </div>
    </div>


@endsection