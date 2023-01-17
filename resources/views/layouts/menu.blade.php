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
    Route::currentRouteName() == 'report.create' ||
    Route::currentRouteName() == 'category.edit'
        ? 'menu-open'
        : '' }}">
    <a href="{{ route('report.index') }}"
        class="nav-link {{ Route::currentRouteName() == 'category.index' ||
        Route::currentRouteName() == 'category.create' ||
        Route::currentRouteName() == 'report.index' ||
        Route::currentRouteName() == 'report.create' ||
        Route::currentRouteName() == 'category.edit'
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
                class="nav-link  {{ Route::currentRouteName() == 'category.index' || Route::currentRouteName() == 'category.edit' ? 'active' : '' }}">
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
<li class="nav-item {{ Route::currentRouteName() == 'casestudy.index' ||
Route::currentRouteName() == 'casestudy.create'
    ? 'menu-open'
    : '' }}">
    <a href="{{ route('casestudy.index') }}" class="nav-link {{ Route::currentRouteName() == 'casestudy.index' ||
    Route::currentRouteName() == 'casestudy.create'
        ? 'active'
        : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Case Study
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('casestudy.index') }}" class="nav-link {{ Route::currentRouteName() == 'casestudy.index' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('casestudy.create') }}" class="nav-link {{ Route::currentRouteName() == 'casestudy.create' ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Case Study</p>
            </a>
        </li>
    </ul>
</li>
<!-- need to remove -->
<li class="nav-item {{ Route::currentRouteName() == 'news.index' ||
Route::currentRouteName() == 'news.create'
    ? 'menu-open'
    : '' }}">
    <a href="{{ route('news.index') }}" class="nav-link {{ Route::currentRouteName() == 'news.index' ||
    Route::currentRouteName() == 'news.create'
        ? 'active'
        : '' }}">
        <i class="nav-icon far fa-plus-square"></i>
        <p>News
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('news.index') }}" class="nav-link {{ Route::currentRouteName() == 'news.index'
            ? 'active'
            : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('news.create') }}" class="nav-link {{ Route::currentRouteName() == 'news.create'
            ? 'active'
            : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add News</p>
            </a>
        </li>
    </ul>
</li>
<!-- need to remove -->
<li class="nav-item {{ Route::currentRouteName() == 'contact.index' ||
Route::currentRouteName() == 'contact.create'
    ? 'menu-open'
    : '' }}">
    <a href="{{ route('contact.index') }}" class="nav-link {{ Route::currentRouteName() == 'contact.index' ||
    Route::currentRouteName() == 'contact.create'
        ? 'active'
        : '' }}">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Contacts
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="nav-link {{ Route::currentRouteName() == 'contact.index'
                ? 'active'
                : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contact.create') }}" class="nav-link {{ Route::currentRouteName() == 'contact.create'
            ? 'active'
            : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Contact</p>
            </a>
        </li>
    </ul>
</li>
