@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>Update</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{{ route('category.update', $category['id']) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" value="{{ old('txtCateName', isset($category) ? $category['name'] :null) }}"/>
            </div>
            <button type="submit" class="btn btn-default">Update</button>
        </form>
    </div>
</div>
@endsection