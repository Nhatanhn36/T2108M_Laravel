@extends('layout')

@section('title', "Category List")

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Student List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Student List</li>
            </ol>
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
                                        <option value="{{$item->ClassID}}">{{$item->ClassName}}</option>
                                    @endforeach
                                </select>
                                <input type="date" name="dateFrom" class="form-control float-right">
                                <input type="date" name="dateTo" class="form-control float-right">
                                <input type="text" name="name" class="form-control float-right" placeholder="Search">
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
                            <td>{{$item->StudentName}}</td>
                            <td>{{$item->DateOfBirth}}</td>
                            <td>{{$item->classes->ClassName}}</td>
                            <td><a><button type="button" class="btn btn-info">Edit</button></a></td>
                            <td><a><button type="button" class="btn btn-danger">Delete</button></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $student->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection

