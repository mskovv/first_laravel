@extends('layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Add Image</h1>
                <form action="/store" method = "post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control-file">
                        <input type="file" id="form-photo" name="image">
                    </div>
                    <button class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
