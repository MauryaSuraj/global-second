<nav id="sidebar">
    <ul class="list-unstyled components">
        <p><i class="fas fa-user-circle mx-2"></i> {{ auth()->user()->name }}</p>
        <li class="active">
            <a href="/" ><i class="fas fa-home mx-2"></i> Home</a>
        </li>
        <li>
            <a href="/membershipdetail"><i class="fas fa-user-alt mx-2"></i> Profile</a>
        </li>
        <li>
            <a href="/businesslistingprofile"><i class="fas fa-business-time mx-2"></i> Business Listed By You</a>
        </li>
        <li>
            <a href="/businessenquiry"><i class="fas fa-bell mx-2 text-danger"></i>  Enquiry On Your Listing</a>
        </li>
        <li>
            <a href="{{ route('listing.create') }}"><i class="fas fa-plus-circle mx-2"></i> Add Business</a>
        </li>

        <li>
            <a href="{{ route('family.create') }}"><i class="fas fa-users mx-2"></i> Add Family Details</a>
        </li>
        <li>
            <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mx-2"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

</nav>
