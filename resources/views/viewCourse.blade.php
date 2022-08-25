@extends('base')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset("course_images/".$item->image)}}" class="w-100" style="object-fit: cover;height:220px" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-4 mt-4">
                            <h2 class="text-dark fw-bold">{{$item->title}}</h2>
                            <span class="btn btn-danger text-light fw-bold px-3 ">22 Months</span>
                            <span class="btn btn-warning text-light fw-bold px-3 ">Golu Kumar Jha</span>
                            <div class="col-12">
                                <p class="text-dark mt-4">{{$item->description}}</p>
                            </div>
                            <span class="text-danger  fw-bold " style="font-size: 35px;">₹ {{$item->discount_price}}</span>
                            <span class="text-danger fw-bold mt-3" style="font-size: 35px;">₹ {{$item->price}}</span>
                            <div class="col-12 py-3">
                                <a href="" class="btn btn-danger ">Join Course</a>
                                <a href="" class="btn btn-success ">Add in Wishlist</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection