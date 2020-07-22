        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <!-- <img src="{{asset('assets/backend/images/user.png')}}" width="48" height="48" alt="User" /> -->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}}</div>
                    <div class="email">{{ Auth::user()->email}}</div>
                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">input</i>Sign Out
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- For Admin -->
                    <!-- Dashbord -->
                   <li class="#" >
                        <a href="{{ route('home') }}">
                            <i class="material-icons col-teal">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="header">System</li>
                   <!-- Shop -->
                  <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons col-orange">store</i>
                            <span>Center</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('admin.shop.index') }}">Manage Store</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Shop Location -->
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons col-red">my_location</i>
                            <span>Location</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('admin.location.index') }}">Manage Location</a>
                            </li>
                        </ul>
                    </li>

                     <!-- For Log out -->
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">input</i><span>Sign Out</span> 
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    <a href="javascript:void(0);">covid19virus.cloudns.asia</a>&copy;2020 
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>