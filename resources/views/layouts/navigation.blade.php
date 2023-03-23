<ul>
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a href="{{ route('admin.home') }}">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                          d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    @can('users_manage')
    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_1"
           aria-controls="ddmenu_1" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.6311 7.15517C15.9018 7.05482 16.1945 7 16.5001 7C17.8808 7 19.0001 8.11929 19.0001 9.5C19.0001 10.8807 17.8808 12 16.5001 12C16.1945 12 15.9018 11.9452 15.6311 11.8448" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M3 19C3.69137 16.6928 5.46998 16 9.5 16C13.53 16 15.3086 16.6928 16 19" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M17 15C19.403 15.095 20.5292 15.6383 21 17" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M13 9.5C13 11.433 11.433 13 9.5 13C7.567 13 6 11.433 6 9.5C6 7.567 7.567 6 9.5 6C11.433 6 13 7.567 13 9.5Z" stroke="#323232" stroke-width="2"></path> </g></svg>
            </span>
            <span class="text">{{ trans('cruds.user_management.title') }}</span>
        </a>
        <ul id="ddmenu_1" class="dropdown-nav collapse {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'show' : '' }}" style="">
            <li>
                <a href="{{ route('admin.permissions.index') }}" class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}"><i class="lni lni-lock-alt"></i>{{ trans('cruds.permission.title') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.roles.index') }}" class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"><i class="lni lni-service"></i>{{ trans('cruds.role.title') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}" class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}"><i class="lni lni-user"></i>{{ trans('cruds.user.title') }}</a>
            </li>
        </ul>
    </li>
    @endcan
</ul>