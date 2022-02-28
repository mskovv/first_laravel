@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-8">
                <h1>Edit Image</h1>
                <img src="/{{$image->image}}" alt="" class="mb-3">
                <form action="/update/{{$image->id}}" method = "post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control-file">
                        <input type="file" id="form-photo" name="image">
                    </div>
                    <button class="btn btn-warning mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

