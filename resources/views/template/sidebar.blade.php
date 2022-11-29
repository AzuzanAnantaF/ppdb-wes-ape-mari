<div class="main-sidebar bg-dark sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html" class="text-white">Ppdb</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">INV</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master</li>
            <li class="{{ request()->is('siswa*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <li class="{{ request()->is('jurusan*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('jurusan.index') }}">
                    <i class="fas fa-boxes"></i>
                    <span>Jurusan</span>
                </a>
            </li>

            <li class="menu-header">Setting</li>
            <!-- <li class="{{ request()->is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
            </li> -->

            <li class="{{ request()->is('setting*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
