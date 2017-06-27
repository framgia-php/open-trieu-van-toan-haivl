<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-fw"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-list fa-fw"></i> Category
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('category.index') }}">List Category</a>
                    </li>
                    <li>
                        <a href="{{ route('category.create') }}">Add Category</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-picture-o fa-fw"></i> Images
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('image.index') }}">List Images</a>
                    </li>
                    <li>
                        <a href="{{ route('image.create') }}">Add Images</a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-file-video-o fa-fw"></i> Video
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('video.index') }}">List Video</a>
                    </li>
                    <li>
                        <a href="{{ route('video.create') }}">Add Video</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user fa-fw"></i> User
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    
                    <li>
                        <a href="{{ route('user.index') }}">List User</a>
                    </li>
                    <li>
                        <a href="{{ route('user.create') }}">Create User</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
