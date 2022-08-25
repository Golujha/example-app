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
                        </tr>
                        @foreach ($courses as $item)
                        <tr>
                            
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->duration }}</td>
                            <td><del>{{$item->price}}</del></td>
                            {{$item->discount_price}}
                            
                            <td>
                                <form action="{{route('course.destroy',$item)}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="delete">
                                    <a href="{{route("course.edit",$item)}}" class="btn btn-info">Edit</a>

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