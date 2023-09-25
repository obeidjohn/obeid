<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-white shadow sidebar collapse">
    <div class="position-sticky pt-3 " style="height: calc(100vh - 56px); overflow-y: auto;">
        <ul class="nav flex-column " style="height: 100%;">

            <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="{{ route('home')}}">
                    <span data-feather="home"></span>
                    <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('users.list') }}">
                    <span data-feather="home"></span>
                    <i class="fa fa-users" aria-hidden="true"></i> Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('users.list') }}">
                    <span data-feather="home"></span>
                    <i class="fa fa-cog" aria-hidden="true"></i> Roles Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('provider.list') }}">
                    <span data-feather="home"></span>
                    <i class="fa fa-users" aria-hidden="true"></i> Provider Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</nav>
