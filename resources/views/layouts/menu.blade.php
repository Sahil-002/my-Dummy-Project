<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('manage-user') }}" class="nav-link {{ Request::is('manage-user') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Manage Users</p>
    </a>
</li>
