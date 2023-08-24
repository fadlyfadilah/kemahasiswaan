<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.home') ? 'active' : '' }}"
                        href="{{ route('frontend.home') }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('mahasiswa_access')
                    <li class="nav-item">
                        <a href="{{ route('frontend.mahasiswas.index') }}"
                            class="nav-link {{ request()->is('frontend/mahasiswas') || request()->is('frontend/mahasiswas/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-user-graduate">

                            </i>
                            <p>
                                Profil Mahasiswa
                            </p>
                        </a>
                    </li>
                @endcan
                @can('laporan_semester_access')
                    <li class="nav-item has-treeview {{ request()->is('frontend/semesters*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is('frontend/semesters*') ? 'active' : '' }}"
                            href="#">
                            <i class="fa-fw nav-icon fas fa-file-invoice">

                            </i>
                            <p>
                                {{ trans('cruds.laporanSemester.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '1') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 1
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '2') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 2
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '3') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 3
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '4') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 4
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '5') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 5
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '6') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 6
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '7') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 7
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                        <ul class="nav nav-treeview">
                            @can('semester_access')
                                <li class="nav-item">
                                    <a href="{{ route('frontend.semesters.indexx', '8') }}"
                                        class="nav-link {{ request()->is('frontend/semesters') || request()->is('frontend/semesters/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.semester.title') }} 8
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                                href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    Profil Akun
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
