<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin.home') }}"
        class="nav-link {{ Route::currentRouteName() == 'admin.home' ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<!-- need to remove -->
<li
    class="nav-item {{ Route::currentRouteName() == 'category.index' ||
    Route::currentRouteName() == 'category.create' ||
    Route::currentRouteName() == 'report.index' ||
    Route::currentRouteName() == 'report.create'
        ? 'menu-open'
        : '' }}">
    <a href="{{ route('report.index') }}"
        class="nav-link {{ Route::currentRouteName() == 'category.index' ||
        Route::currentRouteName() == 'category.create' ||
        Route::currentRouteName() == 'report.index' ||
        Route::currentRouteName() == 'report.create'
            ? 'active'
            : '' }}">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Reports
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('report.index') }}"
                class="nav-link {{ Route::currentRouteName() == 'report.index' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('report.create') }}"
                class="nav-link {{ Route::currentRouteName() == 'report.create' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Report</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.index') }}"
                class="nav-link  {{ Route::currentRouteName() == 'category.index' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.create') }}"
                class="nav-link {{ Route::currentRouteName() == 'category.create' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Category</p>
            </a>
        </li>
    </ul>
</li>
<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>Case Study
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Case Study</p>
            </a>
        </li>
    </ul>
</li>
<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon far fa-plus-square"></i>
        <p>News
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add News</p>
            </a>
        </li>
    </ul>
</li>
<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Contacts
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Contact</p>
            </a>
        </li>
    </ul>
</li>
