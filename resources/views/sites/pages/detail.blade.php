@extends('sites.master')
@section('content')
    <div class="mainBox photoDetails">
        <div class="photoInfo">
            <h1>Ai Thấy Đúng Giơ Tay</h1>
            <div class="stats"> 
                <span class="views">Lượt xem:
                    <span class="number">4</span> 
                </span>
            </div>
            <div class="source"> 
                <span class="source"> Nguồn: 
                    <span class="text">sưu tầm</span> 
                </span>
            </div>
        </div>
        <div class="uploader"> Đăng 2 tháng trước bởi
            <div> 
                <img src="images/avatar.jpg" alt="">
                <div class="info"> 
                    <a href="#" target="_blank" title="#">admin hihe</a> 
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="clear"> </div>
        <!-- rating -->
            <div class="txt-center">
                <form>
                    <div class="rating">
                        <span class="total_rating">5/5</span>
                        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                        <label for="star5" >☆</label>
                        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                        <label for="star4" >☆</label>
                        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                        <label for="star3" >☆</label>
                        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                        <label for="star2" >☆</label>
                        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                        <label for="star1" >☆</label>
                        <span class="rating_title">
                            <span style="font-size: 27px;">☆</span>Danh Gia:
                        </span>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
        <!-- delete post -->
        <div class="delete">
            <button type="button"> <a href="#">Xóa bài này</a> </button>
        </div>
        <!--  <div class="delete"> </div>  -->
        <div class="clear"> </div>
        <div class="news"> </div>
        <div data-fixedtop="40" class="fixedScrollDetector"> </div>
        <div class="likeButton fixedScroll " style="position: relative;">
            <div class="text"> Thích ảnh này? </div>
            <div class="fbLikeButton">
                <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"> </div>
            </div>
            <div class="navButtons">
                <!-- next  -->
                <a class="prev" href="#" title="Prev">Prev</a> <a class="next" href="#" title="next">next</a> 
            </div>
        </div>
        <div class="clear"> </div>
        <div class="photoImg">
            <img alt="ai thấy đúng giơ tay" src="#"> 
        </div>
        <!-- img detail  -->
        <div class="img_detail">
            <img alt="" src="#"> 
        </div>

        <div class="commentContainer">
            <!-- form comment -->
            <h3>Bình luận</h3>
            <div class="comment">
                <fieldset>
                    <legend>Nội dung bình luận</legend>
                    <form class="comment-content">
                        <div>
                            <!-- <div class="user_avatar">
                                <img src="images/avatar.jpg">
                            </div> -->
                            <div class="user_comment">
                                <label>
                                    <textarea rows="4" cols="50" class="com_mess">nhập nội dung bình luận</textarea>
                                </label>
                                <label></label>
                                <label>
                                    <input type="submit" name="comment" value="Đăng" class="send">
                                </label>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <!-- reply comment -->
                <div class="old_comment">
                    <ul>
                        <li> 
                            <img src="/images/avatar.jpg">
                            <div class="info"> 
                                <b>pham tung</b>
                                <small> 10/10/2017<a href="#" class="reply">Reply</a></small>
                                <p>bình luận có comment id =1555</p>
                            </div>
                            <!-- reply comment -->
                            <ul>
                                <li> <img src="/images/avatar.jpg">
                                    <div> <b>pham tung</b><small> 10/10/2017</small>
                                        <p>bình luận có comment id =1555</p>
                                    </div>
                                </li>
                                <li> <img src="/images/avatar.jpg" width="30px">
                                    <div> <b>pham tung</b><small> 10/10/2017</small>
                                        <p>bình luận có comment id =1555</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- form reply -->
                            <div class="Reply">
                                <fieldset>
                                    <legend>Reply bình luận</legend>
                                    <form>
                                        <div>
                                            <!-- <div class="user_avatar">
                                                <img src="images/avatar.jpg">
                                            </div> -->
                                            <div class="user_comment">
                                                <label>
                                                    <textarea rows="4" cols="50" class="com_mess">nhập nội dung bình luận</textarea>
                                                </label>
                                                <label></label>
                                                <label>
                                                    <input type="submit" name="comment" value="Đăng" class="send">
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- rate product -->
    <div class="fullWidth newVideo">
        <div class="box darkBox hotVideos">
            <h3> Ảnh hot có liên quan</h3>
            <!-- slide -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" target="_parent">
                        <div class="thumb"> <img src="#" style="max-width:158px;max-height:111px;margin-bottom:5px" alt="hotest photo"> 
                        </div>
                        <div class="info">
                            <h2>ảnh đẹp nhất ninh binh</h2>
                            <div class="stats"> 
                                <span class="views" title="">2</span> 
                                <span class="comments" title="">10</span> 
                            </div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection