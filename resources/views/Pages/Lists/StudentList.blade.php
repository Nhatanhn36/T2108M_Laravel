@extends('layout')

@section('title', "Category List")

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Student List</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{url("/student/create")}}"><button type="submit" class="btn btn-primary float-right">Add student</button></a>
        </div>
    </div>
@endsection

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="get" action="{{url("/student/list")}}">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 900px;">
                                <select name="classID" class="form-control float-right">
                                    <option value="">Select Class...</option>
                                    @foreach($classList as $item)
                                        <option @if(app("request")->input("classID") == $item->ClassID) selected @endif value="{{$item->ClassID}}">{{$item->ClassName}}</option>
                                    @endforeach
                                </select>
                                <input type="date" value="{{app("request")->input("dateFrom")}}" name="dateFrom" class="form-control float-right">
                                <input type="date" value="{{app("request")->input("dateTo")}}" name="dateTo" class="form-control float-right">
                                <input type="text" value="{{app("request")->input("name")}}" name="name" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>StudentID</th>
                            <th>Image</th>
                            <th>StudentName</th>
                            <th>DateOfBirth</th>
                            <th>ClassID</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student as $item)
                        <tr>
                            <td>{{$item->StudentID}}</td>
                            <td><img src="{{$item->getImage()}}" class="img-circle" width="60px" height="auto"/></td>
                            <td>{{$item->StudentName}}</td>
                            <td>{{$item->DateOfBirth}}</td>
                            <td>{{$item->classes->ClassName}}</td>
                            <td><a href="{{url('/student/edit',['id'=>$item->StudentID])}}" class="btn btn-info">Edit</a></td>
                            <td>
                                <form action="{{url("/student/delete",['student'=>$item->StudentID])}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" onclick="return confirm('Delete Student {{$item->StudentName}}?');" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $student->appends(app("request")->input())->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection

