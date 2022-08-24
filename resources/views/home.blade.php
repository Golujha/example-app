@extends('base')

@section('content')
@section('title',$title);

<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-info" style="height: 400px;">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-6 mt-4 ">
                    <div class="card" style="height: 230px;">
                        <h1 class="fw-bold mt-3">First Course 100% Free</h1>
                        <p class="mt-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic debitis doloremque nostrum porro, amet eos vel totam aperiam impedit magni expedita illo explicabo distinctio iure placeat! Numquam,</p>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span href="" class="btn btn-danger px-3 " style="margin-left: 550px;font-size:18px">Explorer Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-2 g-9">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639915439.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
        <div class="col-2  ">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639916039.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
        <div class="col-2 ">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639911906.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639911906.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
        <div class="col-2 ">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639911906.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
        <div class="col-2 ">
            <div class="card">
                <img src="https://codewithsadiq.com/public/images/course/1639911906.jpg" alt="">
                <h6 class="fw-bold mt-3">python with data structure</h6>
                <a href="" class="btn btn-success mt-2">Duration 4 months</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($courses as $item)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ asset("product_image/".$item->image) }}" class="w-100" style="object-fit: cover;height:220px" alt="">
                        <h6 class="small fw-bold text-center mt-1">{{ $item->title}}Manisha Kumari</h6>
                        <h6 class="fw-bold text-center  ">{{ $item->description}}Software Developer</h6>
                        <p class="text-center">HCL india @pune{{ $item->price}}</p>
                    </div>
                </div>
                    
                @endforeach
                <div class="row">
                    <div class="col mx-auto">
                        {{$courses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection