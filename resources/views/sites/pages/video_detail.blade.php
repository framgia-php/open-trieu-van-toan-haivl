@extends('sites.master')
@section('content')
    <div class="mainBox photoDetails">
        <div class="photoInfo">
            <h1>nhờ boss tắt điện</h1>
            <div class="stats"> 
                <span class="views">Lượt xem:
                    <span class="number">6</span>
                </span> 
                <span class="comments">Lượt bình luận: 
                    <span class="number">0</span>
                </span>
            </div>
            <div class="source"> 
                <span class="source"> Nguồn:
                    <span class="text">Facebook</span> 
                </span>
            </div>
        </div>
        <div class="uploader"> Đăng 3 tháng trước trước bởi
            <div> 
                <img src="/images/avatar.jpg" alt="">
                <div class="info"> <a href="" target="_blank">super_admin</a> </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="delete"> </div>
        <div class="clear"> </div>
        <div class="news"> </div>
        <div data-fixedtop="40" class="fixedScrollDetector"> </div>
        <div class="likeButton fixedScroll " style="position: relative;">
            <div class="text"> Thích ảnh này? </div>
            <div class="fbLikeButton">
                <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"> 
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- you tube -->
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/r3iKrM6hImQ" frameborder="0" allowfullscreen=""> </iframe>
        <!-- facebook -->
        <!-- <div class="fb-video" data-href="#" data-allowfullscreen="true" data-width="1000" height="500">
        </div> -->
        <div class="commentContainer">
            <!-- bình luận -->
            <h3>Bình luận</h3>
            <div class="comment">
                <fieldset>
                    <legend>Nội dung bình luận</legend>
                    <form>
                        <label>Nội dung</label>
                        <label>
                            <textarea rows="4" cols="50" class="com_mess">nhập nội dung bình luận</textarea>
                        </label>
                        <label>Tên</label>
                        <label>
                            <input type="text" name="txtname">
                        </label>
                        <label></label>
                        <label>
                            <input type="submit" name="comment" value="Đăng" class="send"> </label>
                    </form>
                </fieldset>
                <div class="old_comment">
                    <ul>
                        <li> <img src="/images/avatar.jpg">
                            <div class="info"> <b>pham tung</b><small> 10/10/2017<a href="#" class="reply">Reply</a></small>
                                <p>bình luận có comment id =1555</p>
                            </div>
                            <!-- reply comment -->
                            <ul>
                                <li> <img src="/images/avatar.jpg">
                                    <div> <b>pham tung</b><small> 10/10/2017</small>
                                        <p>bình luận có comment id =1555</p>
                                    </div>
                                </li>
                                <li> <img src="images/avatar.jpg" width="30px">
                                    <div> <b>pham tung</b><small> 10/10/2017</small>
                                        <p>bình luận có comment id =1555</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="Reply">
                                <fieldset>
                                    <legend>trả lời bình luận</legend>
                                    <form>
                                        <label>Nội dung</label>
                                        <label>
                                            <textarea rows="4" cols="50" class="com_mess">nhập nội dung bình luận</textarea>
                                        </label>
                                        <label>tên</label>
                                        <label>
                                            <input type="text" name="txtname">
                                        </label>
                                        <label></label>
                                        <label>
                                            <input type="submit" name="comment" value="Đăng" class="send"> </label>
                                    </form>
                                </fieldset>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="fullWidth newVideo">
            <div class="box darkBox hotVideos">
                <h3> Clip khác</h3>
                <!-- Related video-->
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <div class="thumb"> 
                                <img src="#" style="max-width:158px;max-height:111px;margin-bottom:5px" alt="hotest photo"> 
                            </div>
                            <div class="info">
                                <h3>hay lắm</h3>
                                <div class="stats"> 
                                    <span class="views" title="">5</span>
                                    <span class="comments" title="">2</span> 
                                </div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection