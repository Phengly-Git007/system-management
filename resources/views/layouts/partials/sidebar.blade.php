<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link">
      <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{ Auth::user()->getName() }}
          </a>
        </div>
      </div>

      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link @yield('home')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="@lang('app.kh')">
               @lang('app.dashboard')
              </p>
            </a>
          </li>

          <li class="nav-item @yield('branch')">
            <a href="#" class="nav-link @yield('branch.active') ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="@lang('app.kh')">
               @lang('app.branch')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('credit-officer')
                <li class="nav-item">
                    <a href="{{ route('branch.co.index') }}" class="nav-link @lang('app.kh') @yield('branch.co')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>@lang('app.co')</p>
                    </a>
                  </li>
                @endcan
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('user')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ route('logout') }}" class="nav-link "
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-sign-out-alt"></i>
              <p class="@lang('app.kh')">@lang('app.logout')</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
       </ul>
      </nav>
    </div>
  </aside>
