@extends('layout')

@section('content')
<div class="container">
    <div class="row mt-3">
        <h2 class="text-center mb-3">My Gallery</h2>
        @foreach($images as $image)
            <div class="col-3">
                <img src="{{$image->image}}" alt="" class="img-thumbnail">
                <a href="/show/{{$image->id}}"><button type="button" class="btn btn-info w-100 mb-2">Show Full</button></a>
                <a href="/edit/{{$image->id}}"><button type="button" class="btn btn-warning w-100 mb-2">Edit</button></a>
                <a href="/delete/{{$image->id}}"><button type="button" onclick="return confirm('are you sure?')" class="btn btn-danger w-100 mb-2">Delete</button></a>
            </div>
        @endforeach

    </div>
</div>
@endsection
