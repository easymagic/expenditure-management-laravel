<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        {{--<img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="max-width: 65%;opacity: .8;border-radius: 6px;border: 0;background-color: #fff;">--}}
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{--<div class="image">--}}
                {{--<img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">--}}
            {{--</div>--}}
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                {{--<li class="nav-header">Dashboard</li>--}}

                <li class="nav-item">
                    <a href="{{ route('continent.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                           Continents
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('country.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Countries
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('state.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            States
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('city.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Cities
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('search.states') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Search States
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>