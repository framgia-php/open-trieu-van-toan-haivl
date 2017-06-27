@extends('admin.master')
@section('content')
<style type="text/css">
    .note{ color: red; font-weight: bold; font-size: 24px; padding: 20px 5px 10px 0px; }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Video
            <small>Create</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.block.error')
        <form action="{{ route('video.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name Title</label>
                <input class="form-control" name="txtTitle" placeholder="Please Enter Name Title " value="{{ old('txtTitle') }}" />
            </div>

            <div class="form-group">
                <label>Link</label>
                 <input class="form-control" name="link" placeholder="Please Enter link video" value="{{ old('link') }}" />
            </div>
            <div class="form-group">
                <span class="note">*</span><label>source</label>
                <label class="radio-inline">
                    <input name="source" value="1" type="radio">Facebook
                </label>
                <label class="radio-inline">
                    <input name="source" value="2" type="radio">Youtube
                </label>
            </div>

            <button type="submit" class="btn btn-default">Create video</button>
        </form>
    </div>
</div>
@endsection
