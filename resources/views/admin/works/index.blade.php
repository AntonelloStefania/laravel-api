@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        @foreach($sites as $site)
            <div class="col-12 col-md-6 col-lg-4 my-4 d-flex flex-wrap justify-content-center">
                
                <div class="card d-flex flex-column justify-content-between">
                    <div class="card-img-top">
                        <img class="img-fluid" src="{{asset('storage/'.$site->image)}}" alt="">
                    </div>
                    <div class="card-title text-center my-3">
                        <h4><a href="#">{{$site->title}}</a></h4>
                    </div>
                    <div class="text-center my-3">
                        <span class="fw-bold">{{$site->type->category}}</span>
                    </div>
                    <div class="card-text text-center">
                        <p>{{$site->description}}</p>
                    </div>
                    <div class="text-center">
                        <a class="btn show-btn btn-md" href="{{route('admin.works.show', $site->id)}}">Show More</a>
                    </div>
                  
                    <div class="my-4 px-3 text-center">
                        <a class="link" href="#">{{$site->link}}</a>
                    </div>
                    <div class="d-flex justify-content-around my-4">
                        <a class="btn edit-btn btn-sm" href="{{route('admin.works.edit', $site->id)}}">Edit</a>
                        <form action="{{route('admin.works.destroy', $site->id)}}" onsubmit="return confirm('Press ok to confirm')" class="d-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm delete-btn mx-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="text-center my-5">
                <a href="{{route('admin.works.create')}}" class="btn new-btn btn-sm">Add New Work</a>
            </div>
    </div>
</div>

@endsection