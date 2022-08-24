@extends('admin.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3 class="display-6">edit Course</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('course.update',['course'=>$course])}}" method="POST">
                                    @method("put")
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">title</label>
                                        <input type="text" name="title" value="{{$course->title}}" class="form-control">
                                        @error('title')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">duration</label>
                                        <input type="number" name="duration" value="{{$course->duration}}" class="form-control">
                                        @error('duration')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">price</label>
                                        <input type="number" name="price" value="{{$course->price}}" class="form-control">
                                        @error('price')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">discount_price</label>
                                        <input type="number" name="discount_price" value="{{$course->discount_price}}" class="form-control">
                                        @error('discount_price')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">description</label>
                                        <input type="text" name="description" value="{{$course->description}}" class="form-control">
                                        @error('description')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">image</label>
                                        <input type="file" value="{{$course->image}}" name="image" class="form-control">
                                        @error('image')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                   
                                    <div class="mb-3">
                                        <input type="submit" value="update Course" class="btn btn-success w-100">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection