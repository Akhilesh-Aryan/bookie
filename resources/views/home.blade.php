@extends('base')

@section('content')
@isset($data)
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-4 border-danger rounded-0">
                <div class="list-group">
                <i class=" list-group-item list-group-item-action bg-dark active text-white">Choose Categories</i>
                <a href="" class="list-group-item list-group-item-action">Biographic & memory
                    <span class="badge bg-info rounded-pill float-end">14</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">History
                    <span class="badge bg-info rounded-pill float-end">20</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">Education & References
                    <span class="badge bg-info rounded-pill float-end">16</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">Sci-Fi & Fantasy
                    <span class="badge bg-info rounded-pill float-end">43</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">Best Sellers
                    <span class="badge bg-info rounded-pill float-end">12</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">Literature & Fiction
                    <span class="badge bg-info rounded-pill float-end">24</span>
                </a>
           </div>
       </div>
        </div>
        <div class="col-lg-9">
        <div class="card mt-4 border-danger card-shadow-sm rounded-0">
          <div class="row">
            <div class="col-lg-3">
                <img src="{{asset('covers/'.$data->cover)}}" class="card-img-top" width="200" height="200" alt=" This is book's image">
            </div>
            <div class="col">
                <div class="card-body">
                    <b>Author:-{{$data->author}}</b><br>
                    <i>ISBN no.:-{{$data->isbn}}</i>
                    <p class="lead">{{$data->description}}</p>
                </div>
                    <div class="gap-2 d-flex justify-content-end">
                        <a href="" class="btn btn-info btn-sm  rounded-0">about book..</a>
                        <a href="" class="btn btn-primary btn-sm rounded-0">Add as Favourite</a>
                        <form action="{{route("book.destroy",["book"=>$data->id])}}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" value="delete" class="btn-sm rounded-0  me-2 btn btn-danger">
                        </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endisset
@endsection
