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
                class="nav-item {{ $activePage == 'financial-statement' || $activePage == 'delivery-companies' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="https://cdn-icons-png.flaticon.com/512/4727/4727273.png"></i>
                    <p>{{ __('Dashboard') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        @can('create category')
                            <li class="nav-item{{ $activePage == 'financial-statement' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('financials.index') }}">
                                    <span class="sidebar-normal">{{ __('Financial Statement') }} </span>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item{{ $activePage == 'delivery-companies' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('deliveries.create') }}">
                                <span class="sidebar-normal"> {{ __('Delivery Companies') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- USER PANEL -->
            <li class="nav-item {{ $activePage == 'account' || $activePage == 'order' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="true">
                    <i><img style="width:25px" src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png"></i>
                    <p>{{ __('User') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="user">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'account' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="sidebar-normal"> {{ __('User Information') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'order' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('orders.index') }}">
                                <span class="sidebar-normal"> {{ __('Orders') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <!--Category -->
            <li
                class="nav-item {{ $activePage == 'category' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="true">
                    <i><img style="width:25px"
                            src="https://cdn-icons.flaticon.com/png/512/3032/premium/3032276.png?token=exp=1637188173~hmac=ab284ecf0e8431a3cc954b0b601747dc"></i>
                    <p>{{ __('Category') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="category">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <span class="sidebar-normal">{{ __('Catogeries') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--PLACE -->
            <li class="nav-item {{ $activePage == 'places' }}">
                <a class="nav-link" data-toggle="collapse" href="#place" aria-expanded="true">
                    <i><img style="width:25px"
                            src="https://cdn-icons.flaticon.com/png/512/819/premium/819814.png?token=exp=1637187862~hmac=5d3b3f5957074d1361dcbbe743e2c13e"></i>
                    <p>{{ __('Place') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="place">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'place' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('places') }}">
                                <span class="sidebar-normal"> {{ __('Places') }} </span>
                            </a>
                    </ul>

                </div>
            </li>
            <!--MESSAGE -->
            <li class="nav-item {{ $activePage == 'massage' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#massage" aria-expanded="true">
                    <i><img style="width:25px" src="https://cdn-icons-png.flaticon.com/512/4457/4457168.png"></i>
                    <p>{{ __('Message') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="massage">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('message') }}">
                                <span class="sidebar-normal">{{ __('Contact with Supervisor') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Policies -->
            <li class="nav-item {{ $activePage == 'terms' || $activePage == 'privacy' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#Policies" aria-expanded="true">
                    <i><img style="width:25px"
                            src="https://cdn-icons.flaticon.com/png/512/957/premium/957193.png?token=exp=1637188323~hmac=7e793c6c2fbc8b39a9b79246b16a62d9"></i>
                    <p>{{ __('Policies') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="Policies">
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
        </ul>
    </div>
</div>
