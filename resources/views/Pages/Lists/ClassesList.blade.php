@extends('layout')

@section('title', "Classes List")

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Classes List</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{url("/class/create")}}"><button type="submit" class="btn btn-primary float-right">Add classes</button></a>
        </div>
    </div>
@endsection

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="get" action="{{url("/classes/list")}}">

                </form>
                <div class="card-header">
                    <h3 class="card-title">Classes List</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" value="{{app("request")->input("classname")}}" name="classname" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ClassID</th>
                            <th>ClassName</th>
                            <th>Room</th>
                            <th>Student Count</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classes as $item)
                        <tr>
                            <td>{{$item->ClassID}}</td>
                            <td>{{$item->ClassName}}</td>
                            <td>{{$item->Room}}</td>
                            <td>{{$item->students_count}}</td>
                            <td><a><button type="button" class="btn btn-info">Edit</button></a></td>
                            <td><a><button type="button" class="btn btn-danger">Delete</button></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $classes->appends(app("request")->input())->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection


