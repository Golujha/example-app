@extends('base')

@section('content')

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
        @foreach ($courses as $item)
        <div class="col-2 g-9">
            <div class="card">
                <img src="{{asset("course_images/".$item->image)}}" class="w-100" style="object-fit: cover;height:220px" alt="">
                <a href="{{route('view',$item->id)}}"><h6 class="text-truncate">{{$item->title}}</h6></a>
                <a href="" class="btn btn-success mt-2">{{ $item->Duration}}Duration 4 months</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <div class="card">
                        <img src="https://thumbs.dreamstime.com/z/portrait-cute-adorable-little-caucasian-school-girl-wearing-uniform-flowers-bouquet-going-back-to-199691293.jpg" alt="" style="height: 200px;width:195px;object-fit-cover" >
                        <h6 class="small fw-bold text-center mt-1">Manisha Kumari</h6>
                        <h6 class="fw-bold text-center  ">Software Developer</h6>
                        <p class="text-center">HCL india @pune</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection