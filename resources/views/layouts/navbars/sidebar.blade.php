<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('Admin') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <!-- DASHBOARD -->
            <li
                class="nav-item {{ $activePage == 'financial-statement' || $activePage == 'user-management' || $activePage == 'delivery-companies' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px"
                            src="https://www.seekpng.com/png/detail/85-856344_dashboard-icon-monitoring-and-control-icon.png"></i>
                    <p>{{ __('Dashboard') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'financial-statement' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.financial') }}">
                                <span class="sidebar-normal">{{ __('Financial Statement') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'delivery-companies' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.delivery') }}">
                                <span class="sidebar-normal"> {{ __('Delivery Companies') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- USER PANEL -->
            <li class="nav-item {{ $activePage == 'user-management' || $activePage == ' ' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="true">
                    <i><img style="width:25px"
                            src="https://www.seekpng.com/png/detail/85-856344_dashboard-icon-monitoring-and-control-icon.png"></i>
                    <p>{{ __('User Panel') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="user">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--EDIT -->
            <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#test" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Edit') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="test">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'terms' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.terms.edit') }}">
                                <span class="sidebar-normal">{{ __('Terms') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'privacy' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.privacy.edit') }}">
                                <span class="sidebar-normal"> {{ __('Privacy Policy') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--ADD -->
            <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Add') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-normal">{{ __('New Catogery') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--MESSAGE -->
            <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Message') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-normal">{{ __('Contact with Supervisor') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
