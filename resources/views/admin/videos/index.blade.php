@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Video
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Title</th>
                <th>video</th>
                <th>view</th>
                <th>Source</th>
                <th>Time</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr class="odd gradeX" align="center">
                    <td>1</td>
                    <td>{{ $video->title }}</td>
                    <td>
                       @if ($video->source == 1)
                            <div class="fb-video" data-href="{{ $video->link }}" data-allowfullscreen="true" data-width="400" height="225" >
                            </div>
                        @else 
                            @php
                                $str = $video->link;
                                $str = str_replace( 'watch?v=', 'embed/', $str );
                            @endphp
                            <iframe width="400" height="225" src="{{ $str }}" frameborder="0" allowfullscreen>  
                            </iframe>
                        @endif
                    </td>
                    <td>{{ $video->view }}</td>
                    <td>
                        @if ($video->source == 1)
                            Facebook
                        @else 
                            Youtube
                        @endif
                    </td>
                    <td>
                    {{ \Carbon\Carbon::createfromTimeStamp(strtotime($video->created_at))->diffForHumans() }} 
                    </td>

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        <a onclick="return confirm_delete('do you want to delete?')" href="{{ route('video.destroy', $video->id) }}"> Delete</a>
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                        <a href="{{ route('video.edit',$video->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
