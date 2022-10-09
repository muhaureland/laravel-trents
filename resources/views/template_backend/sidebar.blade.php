<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="i{{ route('dashboard') }}">trents</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">tbr</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Request::is('dashboards*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('dashboard') }}">Profil</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Ganti Password</a>
                    </li>
                </ul>
            </li>=
            <li class="menu-header">Administrator</li>
            <li class="">
                <a class="nav-link" href=""><i class="fa-solid fa-address-book"></i>
                    <span>User</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fa-solid fa-code-branch"></i>
                    <span>A</span>
                </a>
            </li>
            {{-- <li class="{{ requestRouteIs(['product.index', 'product.index']) ? 'active' : '' }}"> --}}
            {{-- <li class="{{ (Request::is('administrator/product') || Request::is('administrator/product/*') ? 'active' : '') }}"> --}}
            <li class="">
                <a class="nav-link" href=""><i class="fa-solid fa-hammer"></i>
                    <span>B</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href=""><i class="fas fa-shipping-fast"></i>
                    <span>C</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href=""><i class="fas fa-shipping-fast"></i>
                    <span>D</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href=""><i class="fa-solid fa-house-chimney-crack"></i>
                    <span>E</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-th"></i>
                    <span>Kategori</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">A</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">B</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">C</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </aside>
</div>