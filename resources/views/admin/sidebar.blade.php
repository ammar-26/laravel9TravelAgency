<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
            <p class="centered"><a href="profile.html"><img src="{{asset('assets')}}/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"> {{ Auth::user()->name }} </h5>
            
            <li class="mt">
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Reservation</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{route('admin.category.index')}}" >
                    <i class="fa fa-th"></i>
                    <span>Categories</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="{{route('admin.package.index')}}" >
                    <i class="fa fa-cube"></i>
                    <span>Packages</span>
                </a>
            </li>
            

            <li class="sub-menu">
                <a href="{{route('admin.comment.index')}}" >
                    <i class="fa fa-comment"></i>
                    <span>Comments</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{route('admin.faq.index')}}" >
                    <i class="fa fa-question"></i>
                    <span>FAQ</span>
                </a>
            </li>
            

            <li class="sub-menu">
                <a href="{{route('admin.message.index')}}">
                    <i class="fa fa-envelope"></i>
                    <span>Messages</span>
                </a>
            </li>

            
            <li class="sub-menu">
                <a href="{{route('admin.category.index')}}" >
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-header" style="color:white">Labels</li>
            <li class="nav-item">
                <a href="{{route('admin.setting')}}">
                    <i class="fa fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
