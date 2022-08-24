@extends('admin.adminBase')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-9 mt-3">
                    <h4 class="text-primary fw-bold">Manage Course</h4>
                </div>
                <div class="col-3 mt-3">
                    <a href="{{route("course.create")}}" class="btn btn-success text-white">Add new Course</a>
                </div>
                <div class="col-12 mt-4">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>duration</th>
                            <th>fees</th>
                            <th>action</th>
                            <th>action</th>
                            <th>action</th>
                        </tr>
                        @foreach ($courses as $course)
                        <tr>
                            
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->price }} </td>
                            <td>{{ $course->discount_price }} </td>
                            <td>{{ $course->description }}</td>
                            <td>{{$course->status}}</td>
                            <td>
                                <img width="90px" src="{{ asset("product_image/".$course->image) }}" alt="">
                            </td>
                            <td>
                                <form action="{{route('course.destroy',['course'=>$course])}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="delete">
                                    <a href="{{route('course.edit',['course'=>$course->id])}}" class="btn btn-info">Edit</a>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
         
        </div>
    </div>
</div>



@endsection