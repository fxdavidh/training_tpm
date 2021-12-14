@extends('layouts.layout')
@section('content')
    <h1>Create form</h1>

    <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Price">
        </div>
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
@endsection