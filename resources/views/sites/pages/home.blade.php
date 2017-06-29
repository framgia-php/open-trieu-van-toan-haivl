@extends('sites.master')
@section('content')
    <h3> Cac Bài đăng mới</h3>
    <!-- tips -->
    @include('sites.layouts.tip')
    <div class="photoList">
        <div class="PhotoListItem">
            <ul id="list_demo">
                <div id="post-data">
                    @foreach ($products as $product)
                    <li style=" height:400px;">
                        <div class="photo-img">
                            <a href="{{ url('detail', $product->alias) }}" target="_blank"> 
                                <img src="{{ asset('upload/images/'. $product->image) }}"> 
                            </a>
                        </div>
                        <div class="photo-content"> 
                            <a class="photo-title" href="{{ url('detail', $product->alias) }}" 
                            target="_blank">
                                {{ $product->title }}
                            </a>
                            <div class="photo-date">
                                <?php \Carbon\Carbon::setLocale('vi'); ?>
                                {{ \Carbon\Carbon::createfromTimeStamp(strtotime($product->created_at))->diffForHumans() }}
                            </div>
                            <div class="photo-owner">
                                <!-- avatar -->
                                @php
                                    $user = App\Models\User::getUser($product->user_id);
                                @endphp

                                @if ($user->avatar != null)
                                    <a class="owner-img" style="background-image: url({{ $user->avatar }})" href="{{ url('user-post', $user->name) }}"></a>
                                @else
                                    <a class="owner-img" style="background-image: url(images/logoo.jpg)" href="{{ url('user-post', $user->name) }}"></a>
                                @endif

                                <a class="owner-name" href="#">
                                    {{ App\Models\User::getUserById($product->user_id) }}
                                </a>

                                <a class="likesWrapper">
                                    <!-- facebook -->
                                    <div class="fb-like" data-href="{{ url('detail', $product->alias) }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="viewComments">
                            <span class="views" title="Views">{{ $product->view }}</span> 
                            <span class="comments">
                                {{ App\Models\Comment::countProduct($product->id) }}
                            </span> 
                            <span class="more"> 
                                 @php
                                    $cate = App\Models\Category::getCate($product->cate_id);
                                @endphp
                                <a href="{{ url('category', $cate->alias) }}" title="category">
                                    {{ $cate->name }}...
                                </a> 
                            </span> 
                        </div>
                    </li>
                    @endforeach
                </div>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
@endsection
