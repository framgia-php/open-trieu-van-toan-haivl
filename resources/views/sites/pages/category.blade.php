@extends('sites.master')
@section('content')
    <div class="tips">
        <h2>mới</h2>
    </div>
    <div class="photoList">
        <div class="PhotoListItem">
            <ul id="list">
                <li style=" height:400px; display: none;">
                    <div class="photo-img">
                        <a href="#"> 
                            <img src="#" width="280">
                        </a>
                    </div>

                    <div class="photo-content"> 
                        <a class="photo-title" href="#">  bộ sưu tập xe moto </a>
                        <div class="photo-date">
                            2 tháng trước
                        </div>
                        <div class="photo-owner">
                            <!-- avatar -->
                            <a class="owner-img" style="background-image: url(#);" href="#"></a> 
                            <a class="likesWrapper">
                            <!-- facebook -->
                                <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="viewComments"> 
                        <span class="views" title="Views">6</span> 
                        <span class="fb-comments-count comments" data-href="#">1</span>
                        <span class="more"> 
                            <a href="#" title="xem thêm">xem thêm »</a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
            <a class="buttons nextListPage" id="btn" href="javascript::void(0)" title="xem thêm, còn nhiều lắm">Tải thêm, còn nhiều lắm
            </a>
        <div id="listEnd"></div>
        <div class="listItemSeparator"></div>
    </div>
    <div class="clear"></div>
    <!-- paginate -->
    <div id="pagination">
        <ul>
            <a href='#' class="prev"><</a>
            <a href='#' class="active">1</a>
            <a href='#' class="next">></a>
        </ul>
    </div>
    <div class="clear"></div>
@endsection