@extends('layout')

@section('title', "Classes Create - Forms")


@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Classes Forms - Create</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Classes Create</li>
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
                    <h3 class="card-title">Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>ClassesID</label>
                            <input type="text" class="form-control" placeholder="Auto increment primary key..." disabled>
                        </div>
                        <div class="form-group">
                            <label>ClassesName</label>
                            <input type="text" class="form-control" placeholder="Input Name..." required>
                        </div>
                        <div class="form-group">
                            <label>Room</label>
                            <input type="text" class="form-control" placeholder="Input Name..." required>
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

