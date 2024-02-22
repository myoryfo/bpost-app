<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} d-flex align-items-center gap-2 "
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }} d-flex align-items-center gap-2 "
                        href="/dashboard/posts">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Orders
                    </a>
                </li>
            </ul>

            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    Administrator
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }} d-flex align-items-center gap-2 "
                            aria-current="page" href="/dashboard/categories">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Categories
                        </a>
                    </li>
                </ul>
            @endcan
        </div>
    </div>
</div>
