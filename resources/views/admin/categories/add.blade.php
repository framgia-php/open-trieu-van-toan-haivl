@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>Create</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.block.error')
        <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
            </div>
            <button type="submit" class="btn btn-default">Create</button>
        </form>
    </div>
</div>
@endsection