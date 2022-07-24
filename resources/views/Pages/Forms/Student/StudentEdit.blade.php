@extends('layout')

@section('title', "Student Edit - Forms")


@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Student Forms - Edit</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Student Edit</li>
            </ol>
        </div>
    </div>
@endsection

@section('main')
    <div class="row">
        <!-- column -->
        <div class="col-sm-10 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/student/edit",['student'=>$student->StudentID])}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label>StudentID</label>
                            <input value="{{$student->StudentID}}" type="text" name="studentId" class="form-control" placeholder="Auto increment primary key..." disabled>
                        </div>
                        <div class="form-group">
                            <label>StudentName</label>
                            <input value="{{$student->StudentName}}" type="text" name="studentName" class="form-control" placeholder="Input Name..." required>
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" value="{{$student->DateOfBirth}}" name="DoB" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label>ClassID</label>
                            <select name="classID" class="form-control">
                                @foreach($classList as $item)
                                    <option @if($student->ClassID == $item->ClassID) selected @endif value="{{$item->ClassID}}">{{$item->ClassName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col -->
    </div>
@endsection
