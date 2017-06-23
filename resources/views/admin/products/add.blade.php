@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Image
            <small>Create</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
        <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.block.error')
                {{ csrf_field() }}
                <div class="form-group">
                    <label style="color:red; font-size: 17px">Category</label>
                    <select class="form-control" name="category">
                        <option></option>
                        @foreach($cates as $cate)
                            <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Name Title</label>
                    <input class="form-control" name="txtTitle" placeholder="Please Enter Title " value="{{ old('txtTitle') }}" />
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" name="fImages" onchange="loadFile(event)">
                    <img id="output" style="width: 40%; height: 35%; margin-top: 20px;"/>
                        <script>
                            var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                          };
                        </script>
                </div>
                <div class="form-group">
                    <label>Source</label>
                     <input class="form-control" name="source" placeholder="Please Enter source" value="{{ old('source') }}" />
                </div>
                <button type="submit" class="btn btn-default">Image Create</button>
        </div>
        <div class="col-md-1"></div>
        <label>
            <button type="button" class="btn btn-primary" id="addimage">Add More Images</button>
        </label>
        <div class="col-md-4" id="insert">
        </div>
    </form>
</div>
@endsection
