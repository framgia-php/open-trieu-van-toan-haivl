@extends('admin.master')
@section('content')
<style type="text/css" media="screen">
    .img_current { width:60%; height: 35%;} 
    #output{width: 40%; height: 35%; margin-top: 20px;}
    .img_detail { width: 265px; height: 260px; margin-bottom: 10px; margin-top: 40px;}
    .icon_del {
        position: relative;
        top:-113px;
        left: -21px;
    }
    #insert {
        margin-top: 10px;
    }

</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Image
            <small>edit</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <form action="{{ route('image.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.block.error')
                {{ csrf_field() }}
                <div class="form-group">
                    <label style="color:red; font-size: 17px">Category</label>
                    <select class="form-control" name="category">
                        <option></option>
                        @foreach($category as $item)
                            @if ($item->id == $product->cate_id)
                                <option value="{{ $item->id }}" selected='selected'>
                                {{ $item->name }}
                                </option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Name Title</label>
                    <input class="form-control" name="txtTitle" value="{{ old('txtTitle', isset($product) ? $product->title : null) }}" />
                </div>
                <div class="form-group">
                    <label>Image- current</label>
                    <div class="img_current" >
                        <img src="{{ asset('/upload/images/'. $product->image) }}" class="img_current" >
                    </div>
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
                     <input class="form-control" name="source" 
                     value="{{ old('source', isset($product) ? $product->source : null) }}" />
                </div>
                <button type="submit" class="btn btn-default">Image Update</button>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            @foreach ($imagedetails as $image_detail)
                <div class="form-group">
                    <img src="{{ asset('upload/images/image_details/'. $image_detail->image) }}" idHinh= "{{ $image_detail->id }}" class="img_detail"/>
                    <a href="javascript:void(0)" type="button"  id="del_img" class="btn btn-danger btn-circle icon_del">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            @endforeach
            <button type="button" class="btn btn-primary" id="addimage">Add Image</button>
            <div id="insert"></div>
        </div>
    </form>
</div>
@endsection

