@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>image</th>
                <th>view</th>
                <th>Source</th>
                <th>Time</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="odd gradeX" align="center" data-row-id="{{ $product->id }}">
                @if ($loop->iteration)
                    <td>{{ $loop->iteration }}</td>
                @endif
                <td>
                    {{ App\Models\User::getUserById($product->user_id) }}
                </td>
                <td>
                    {{ App\Models\Category::getCategoryById($product->cate_id) }}
                </td>
                <td>{{ $product->title }}</td>
                <td>
                    <img width="210" height="150" src="{{ asset('/upload/images/'.$product->image) }}" alt="">
                </td>
                <td>{{ $product->view }}</td>
                <td>{{ $product->source }}</td>
                <td>
                    {{ \Carbon\Carbon::createfromTimeStamp(strtotime($product->created_at))->diffForHumans() }}
                </td>

                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                    <a onclick="return confirm_delete('do you want to delete?')" href="{{ route('image.destroy', $product->id) }}"> Delete</a>
                </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                    <a href="{{ route('image.edit',$product->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
