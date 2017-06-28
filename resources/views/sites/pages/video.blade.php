@extends('sites.master')
@section('content')
    <div class="mainBox">
        <div class="tips">
            <h2>Video</h2> 
        </div>
        {{-- video --}}
        <div id='post-data' class="videoList">
            <div class="videoListItem">
                <h2>
                    <a target="_blank" href="#" title="">Nhờ Boss Tắt Điện</a>
                </h2>
                <div class="voteVideo">
                    <div class="uploader">Đăng bởi
                        <a target="_blank" href="#" title="">super_admin</a> 3 tháng trươc
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="stats voteVideo">
                    <div class="numbers"> 
                        <span class="views">1</span> 
                        <span class="fb-comments-count comments" data-href="#">11</span> 
                    </div>
                    <!-- insert btn fb -->
                    <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"> 
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="thumb">
                    <a target="_blank" href="#" data-youtubeid="entity.youtube_id" 
                    data-id="41634" class="play" title="play">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/r3iKrM6hImQ" frameborder="0" allowfullscreen="">
                        </iframe>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection