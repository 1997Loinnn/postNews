@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center text-primary">All Categories</h2>
            <div class="container">
                @foreach ($categories as $category)
                    <li><a href="#">{{ $category->name }}</a>
                        <a href="{{ route('categories.edit',['category'=>$category]) }}" class="btn btn-primary">Update</a>
                        <form action="{{ route('categories.delete') }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </li>
                @endforeach
            </div>

            {{ $categories->links() }}
        </div>
    </div>

@endsection