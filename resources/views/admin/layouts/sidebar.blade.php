<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Objects</li>

            <li class="dropdown {{ request()->routeIs('dashboard.categories.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Category</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('dashboard.categories.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.categories.index') }}">All</a>
                    </li>
                    <li class="{{ request()->routeIs('dashboard.categories.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.categories.create') }}">Create</a>
                    </li>
                    <li class="{{ request()->routeIs('dashboard.categories.trash') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.categories.trash') }}">Trash</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ request()->routeIs('dashboard.products.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-th"></i>
                    <span>Product</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('dashboard.products.index') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('dashboard.products.index') }}">All</a></li>
                    <li class="{{ request()->routeIs('dashboard.products.create') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('dashboard.products.create') }}">Create</a></li>
                    <li class="{{ request()->routeIs('dashboard.products.trash') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('dashboard.products.trash') }}">Trash</a></li>
                </ul>
            </li>
            <li class="menu-header">Stisla</li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
