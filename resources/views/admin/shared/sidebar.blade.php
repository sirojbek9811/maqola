<ul class="navbar-nav navbar-sidenav">
    <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-placement="right" title="@lang('dashboard.dashboard')">
        <a class="nav-link {{ request()->route()->named('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <x-icon name="tachometer" />
            <span class="nav-link-text">@lang('Admin')</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-placement="right" title="@lang('dashboard.posts')">
        <a @class(['nav-link', 'active' => request()->route()->named('admin.posts.*')]) href="{{ route('admin.posts.index') }}">
            <x-icon name="file-text" prefix="fa-regular" />
            <span class="nav-link-text">@lang('Admin postlar')</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-placement="right" title="@lang('dashboard.comments')">
        <a @class(['nav-link', 'active' => request()->route()->named('Admin xabarlar.*')]) href="{{ route('admin.comments.index') }}">
            <x-icon name="comments" prefix="fa-regular" />

            <span class="nav-link-text">@lang('Admin xabarlar')</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-placement="right" title="@lang('dashboard.users')">
        <a @class(['nav-link', 'active' => request()->route()->named('admin.users.*')]) href="{{ route('admin.users.index') }}">
            <x-icon name="users" />

            <span class="nav-link-text">@lang('Foydalanuvchilar')</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-placement="right" title="@lang('dashboard.media')">
        <a @class(['nav-link', 'active' => request()->route()->named('Media*')]) href="{{ route('admin.media.index') }}">
            <x-icon name="file" prefix="fa-regular" />

            <span class="nav-link-text">Media</span>
        </a>
    </li>

</ul>

<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <x-icon name="angle-left" />
        </a>
    </li>
</ul>
