
<aside class="navbar-default sidebar ps-container ps-theme-default affix-top" data-ps-id="e55246e4-d50d-cbc7-c347-7277b532fe40">
    <div class="sidebar-overlay-head">
        <img src="{{skarla_images_url("logo-warning-white@2X.png")}}" alt="Logo" width="80">
        <a href="javascript: void(0)" class="sidebar-switch action-sidebar-close">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="sidebar-content">
        <!-- START Sidebar Header -->
        <div class="add-on-container">
            <div class="sidebar-container-default sidebar-section">
                <div class="media">
                    <div class="media-left media-top">
                        <div class="avatar avatar-image avatar-inline loaded">
                            <img src="{{url("static-img/Caduceus.png")}}" alt="Avatar">
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading text-white m-t-0 m-b-0"><span>{{Auth::user()->getDisplayName()}}</span></h5>
                        <small>{{Auth::user()->getDisplayRole()}}</small>
                    </div>
                    <div class="media-right media-middle">
                        <i class="fa fa-fw fa-gear"></i>
                    </div>
                </div>                

            </div>
        </div>
        <!-- END Sidebar Header -->

        <div class="sidebar-content">
            <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
                <strong>Modules</strong>
            </div>

            <!-- START Tree Sidebar Common -->
            <ul class="side-menu">

                <li>
                    <a href="{{url("/")}}" title="Home">
                        <i class="fa fa-home fa-lg fa-fw"></i>
                        <span class="nav-label">Home</span>   
                    </a>
                </li>
                <li>
                    <a href="{{url("/child-health-records")}}" title="Children Health Records">
                        <i class="fa fa-stethoscope fa-lg fa-fw"></i>
                        <span class="nav-label">Health Records</span>
                    </a>
                </li>

            </ul>

            <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
                <strong>Maintenance</strong>
            </div>

            <!-- START Tree Sidebar Common -->
            <ul class="side-menu">

                @if (Auth::user()->isAdmin())
                <li>
                    <a href="{{url("/users")}}" title="Users">
                        <i class="fa fa-users fa-lg fa-fw"></i>
                        <span class="nav-label">Users</span>   
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{url("/vaccines")}}" title="List of Vaccines">
                        <i class="fa fa-flask fa-lg fa-fw"></i>
                        <span class="nav-label">Vaccines (Generic)</span>
                    </a>
                </li>
                <li>
                    <a href="{{url("/vaccines")}}" title="List of Vaccine Prices">
                        <i class="fa fa-dollar fa-lg fa-fw"></i>
                        <span class="nav-label">Vaccine Prices</span>
                    </a>
                </li>

            </ul>

        </div>

    </div>   
</aside>

