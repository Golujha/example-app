@extends('admin.adminBase')
@section('content')
     <div class="container-fluid">
        <div class="row">
        <div class="col-3">
        @include('admin.side')
        </div>
        
        <div class="col-9">
            <div class="card">
                <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                        <div class="mb-3 col">
                            <label for="">Title</label>
                            <input type="text" name="title"  class="form-control py-2 ">
                            @error('title')
                                <p class="text-danger small">{{ $message }}</p>
                            @enderror
                         </div>
                         <div class="mb-3 col">
                            <label for="">Duration</label>
                            <input type="number" name="duration" class="form-control">
                            @error('duration')
                                <p class="text-danger small">{{ $message }}</p>
                            @enderror
                         </div>
                         <div class="row">
                            <div class="mb-3 col">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control">
                                @error('price')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="">Discount_price</label>
                                <input type="number" name="discount_price" class="form-control">
                                @error('discount_price')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                                @error('description')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger text-center w-100">
                            </div>
                         </div>
                     </div>
                </form>
            </div>
        </div>
    </div>



@endsection