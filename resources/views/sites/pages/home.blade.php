@extends('sites.master')
@section('content')
    <h3> Cac Bài đăng mới</h3>
    <div class="tips"> 
        <b>Mẹo:</b>đăng nhập
        <b>website</b> để 
        <b>
            <a href="#" class="loginlink">Upload</a>
        </b> nhiều ảnh lên! 
    </div>
    <div class="photoList">
        <div class="PhotoListItem">
            <ul id="list_demo">
                <div id="post-data">
                    <li style=" height:400px;">
                        <div class="photo-img">
                            <a href="detail.html" target="_blank"> 
                            <img src="#" width="280"> 
                            </a>
                        </div>
                        <div class="photo-content"> 
                            <a class="photo-title" href="" target="_blank"> ai thấy đúng giơ tay 
                            </a>
                            <div class="photo-date"> 1 tháng trước </div>
                            <div class="photo-owner">
                                <!-- avatar -->
                                <a class="owner-img" style="background-image: url()" href="#"></a> 
                                <a class="owner-name" href="#">triệu toàn</a>
                                <a class="likesWrapper">
                                    <!-- facebook -->
                                    <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="viewComments">
                            <span class="views" title="Views">3</span> 
                            <span class="fb-comments-count comments" data-href="#"></span> 
                            <span class="more"> 
                                <a href="#" title="category">Hot...</a> 
                            </span> 
                        </div>
                    </li>
                </div>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
@endsection
