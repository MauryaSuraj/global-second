<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="/admin/" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Mobile App</span>
                    </a>
                    <ul class="pcoded-submenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <li class="">
                            <a href="/admin/banners" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Add Banners </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/about" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Add About </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="{{ route('assign.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                        <span class="pcoded-mtext">Assign Privilege </span>
                    </a>
                </li>

                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="/admin/listing_review" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext"> Business Enquiry </span>
                    </a>
                </li>
                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="{{ route('support.create') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext"> Add Supporter </span>
                    </a>
                </li>

                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="{{ route('specialCategory.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext"> Special Category </span>
                    </a>
                </li>

                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="{{ route('matrimony.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext"> Matrimony  </span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext {{ request()->is('sites/*/edit') ? 'active' : '' }}">Users </span>
                        <span class="pcoded-badge label label-danger">{{ \App\User::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/user" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext "> All User </span>
                            </a>
                        </li>
                                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                    <a href="/admin/user/registered"  class="waves-effect waves-dark">
                                        <span class="pcoded-mtext"> Registered User </span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                    <a href="/admin/user/paid"  class="waves-effect waves-dark">
                                        <span class="pcoded-mtext"> Paid User  </span>
                                    </a>
                                </li>
                    </ul>
                </li>
                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/contactlist/" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                            </span>
                        <span class="pcoded-mtext">contact form</span>
                                <span class="pcoded-badge label label-danger">{{ \App\Contact::count() }}</span>
                    </a>
                </li>
                <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="{{ route('featuredlisting.index') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                            </span>
                        <span class="pcoded-mtext">Featured Listing</span>
                        <span class="pcoded-badge label label-danger">{{ \App\FeaturedList::count() }}</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Business Listing</span>
                        <span class="pcoded-badge label label-danger">{{ \App\BussinessListing::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <li class="">
                            <a href="/admin/businesslisting/" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Listings </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/businesslisting/create" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Add Listing </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Reviews List</span>
                        <span class="pcoded-badge label label-danger">{{ \App\Reviews::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <li class="">
                            <a href="/admin/reviews/" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Reviews </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Tags</span>
                        <span class="pcoded-badge label label-danger">{{ \App\Tags::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/tag/" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Tags </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/tag/create" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Add tags </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Category</span>
                        <span class="pcoded-badge label label-danger">{{ \App\Category::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/category/" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Category </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}">
                            <a href="/admin/category/create" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Add category </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                        <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Featured Membership</span>
                        <span class="pcoded-badge label label-danger">{{ \App\FeaturedMember::count() }}</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Request Pending </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}">
                                <span class="pcoded-mtext"> Request Completed </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a class="waves-effect waves-dark {{ request()->is('sites/*/edit') ? 'active' : '' }}" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                        <span class="pcoded-mtext">{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            </ul>

        </div>
    </div>
</nav>
