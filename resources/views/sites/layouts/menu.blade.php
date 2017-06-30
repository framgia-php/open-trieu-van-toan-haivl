
<div id="header">
    <div id="headerContent">
        <a href="#" id="logo" title="Cộng đồng chế ảnh troll , ảnh vui hài hước , anh che hai vui nhon"></a>
        <div class="menu_icon" id="show_icon"> <img src="images/icon_menu.png"> </div>
        <div class="clearn"></div>
        <div class="mid_header">
            <ul id="menuBar">
                <li class="hotTag">
                    <a href="{{url('/')}}">
                        <img src="/images/home.png" width="20" height="20"> 
                    </a>
                </li>
                @php
                    $categories = App\Models\Category::get();
                @endphp

                @foreach($categories as $category)
                <li><a href="#">{{ $category->name }}</a></li>
                @endforeach
                <li>
                    <a href="#" title="video">Video
                        <img src="images/quiznhe.png" style="margin-left: -6px;">
                    </a> 
                </li>
                <li id="up">
                    <span class="upload">Đăng bài</span>
                    <ul>
                        <li><a class="loginlink"> Đăng nhập </a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="headerRight">
            @if (Auth::guest())
                <div class="login"> 
                    <a href="login.html" title="Đăng nhập" class="loginlink">Đăng nhập</a> 
                </div>
            @else 
                @if (Auth::user()->role == 0)
                    <div id="userBox" class="user-section pull-right fn-userbox">
                        <div class="user-jump">
                            @if (Auth::user()->avatar != null)
                                <img height="20px" class="fn-thumb" src="{{ Auth::user()->avatar}} ">
                            @else
                                <img height="20px" class="fn-thumb" src="/images/avatar.jpg">
                            @endif 
                             <a href="{{ Auth::user()->profile }}"  target="_blank" class="name-log">
                                {{ Auth::user()->name }} <i class="icon-s-arrow"></i> 
                            </a>
                            <div class="tip-dropdown"> 
                                <span class="arr-top"></span>
                                <div class="avt-header">
                                    <a class="fn-profile" target="_blank" rel="nofollow"
                                     href="{{ Auth::user()->profile }}" title="Trang cá nhân">
                                    @if (Auth::user()->avatar != null)
                                        <img height="80px" class="fn-thumb" src="{{ Auth::user()->avatar }}"> 
                                    </a>
                                    @else
                                        <img height="80px" class="fn-thumb" src="/images/avatar.jpg">
                                    @endif 
                                </div>
                                <ul>
                                    <li>
                                        <a class="fn-profile" target="_blank" rel="nofollow" href="#" title="Trang cá nhân"> 
                                            <i class="zicon icon-human-round">
                                                <img src="/images/profile.png" alt="">
                                            </i> bài đăng của bạn
                                        </a>
                                    </li>
                                    <li>
                                        <a class="fn-logout" href="{{ url('/logout') }}" 
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                             title="Thoát"> 
                                            <i class="zicon icon-door">
                                                <img src="/images/close.png" alt="">
                                            </i> Thoát 
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>  
                            </div>
                        </div> 
                    </div>
                @else
                    <div class="login"> 
                        <a href="login.html" title="Đăng nhập" class="loginlink">Đăng nhập
                        </a>
                    </div>
                @endif
            @endif
        </div>
        <!-- search -->
        <div class="search">
            <form method="post" action="#" name="searchform">
                <input type="hidden" name="_token" value="">
                <div>
                    <input type="hidden" name="cx" value="">
                    <input type="hidden" name="ie" value="UTF-8">
                    <input type="text" placeholder="Nhập nội dung tìm kiếm" class="txt_search" name="txtsearch" id="q">
                    <input type="submit" name="sa" id="searchsubmit" value="" class="submit_search"> </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
