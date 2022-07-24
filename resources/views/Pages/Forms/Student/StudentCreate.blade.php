@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/student/create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">StudentID</label>
                            <input value="{{old("StudentID")}}" type="text" name="StudentID" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
                            @error("StudentID")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">StudentName</label>
                            <input value="{{old("StudentName")}}" type="text" name="StudentName" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                            @error("StudentName")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error("image")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">DateOfBirth</label>
                            <input value="{{old("DateOfBirth")}}" type="date" name="DateOfBirth" class="form-control" id="exampleInputPassword2">
                            @error("DateOfBirth")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Class</label>
                            <select name="ClassID" class="form-control">
                                @foreach($classList as $item)
                                    <option @if(old("ClassID") == $item->ClassID) selected @endif value="{{$item->ClassID}}">{{$item->ClassName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
