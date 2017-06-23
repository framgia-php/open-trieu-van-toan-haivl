<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="#">
                    <i class="fa fa-user fa-fw"></i>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                </a>

                <form id="logout-form" action="#" 
                method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
</ul>
