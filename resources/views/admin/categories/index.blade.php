@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>STT</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 0;
                ?>
                @foreach ($categories as $category)
                <?php $stt++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{{ $stt }}</td>
                        <td>{{ $category['name'] }}</td>
                        <td class="center">
                            <i class="fa fa-trash-o  fa-fw"></i>
                            <a onclick="return confirm_delete('Do You Want To Delete?')" 
                            href="{{ route('category.destroy', $category['id']) }}">
                            Delete
                            </a>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> 
                            <a href="{{ route('category.edit', $category['id']) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection