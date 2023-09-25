<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-white shadow sidebar collapse">
    <div class="position-sticky pt-3" style="height: calc(100vh - 56px); overflow-y: auto;">
        <ul class="nav flex-column " style="height: 100%;">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">
                    <span data-feather="home"></span>
                    <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">
                    <span data-feather="home"></span>
                    <i class="fa fa-users" aria-hidden="true"></i> Users
                </a>
            </li>

            @can('view')
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Users
                    </a>
                </li>
            @endcan



        </ul>
    </div>
</nav>
