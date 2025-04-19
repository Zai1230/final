<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'Dashboard' ? 'active' : ''}}" href="/dashboard">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'Users' ? 'active' : ''}}" href="{{route('Users')}}">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'Product' ? 'active' : ''}}" href="{{route('Product')}}">
                <i class="bx bx-box me-2"></i>
                <span>Products</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
    </ul>

  </aside>
