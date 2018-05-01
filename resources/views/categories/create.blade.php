@extends('layout')
@section('content')
    <h2 class="text-center">New Category Create</h2>
    <div class="row">

        <div class="col-md-8 mx-auto">
            @if(isset($errors)&& count($errors)>0)
                <div class="alert alert-dismissable alert-success fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @foreach($errors->all() as $error)
                        <li><strong>{!! $error !!}</strong></li>
                    @endforeach
                </div>

            @endif
            @if(session('success'))
                    <div class="alert alert-dismissable alert-danger fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            <li><strong>{{ session('success') }}</strong></li>
                    </div>

                @endif
            <form action="{{ route('categories.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form">
                    <label for="title">Category name : </label>
                    <input type="text" id="title" name="name" placeholder="Category name" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary mt-5"    value="Create category">

            </form>
        </div>
    </div>


@endsection