@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-lg-9 mx-auto">
            <div class="card mt-4">
                <div class=" card-body">
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            <small class="text-danger">{{$errors->first('title')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control" value="{{old('author')}}">
                            <small class="text-danger">{{$errors->first('author')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">ISBN no.</label>
                            <input type="text" name="isbn" class="form-control" value="{{old('isbn')}}">
                            <small class="text-danger">{{$errors->first('isbn')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control" value="">
                            <small class="text-danger">{{$errors->first('cover')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea rows="10" name="description" class="form-control" value="{{old('description')}}"></textarea>
                            <small class="text-danger">{{$errors->first('description')}}</small>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="post"  class=" form-control btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection