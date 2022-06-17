 <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('home')}}" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
            {{-- <img src="{{asset('uploads/control_panel_80px.png')}}" alt=""> --}}
                <span class="brand-text font-weight-light">{{Helper::GeneralSiteSettings('name')}}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3  mb-3 d-flex">
                    <div class="image">
                            <img src="{{ Auth::user()->photo ? asset('uploads/users/'.Auth::user()->photo) : asset('uploads/users/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{route('profile')}}" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link @yield('home')">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            {{-- <img src="{{asset('uploads/home_100px.png')}}" alt=""> --}}

                            <p>
                                الرئيسية
                            </p>
                            </a>
                        </li>

                        {{-- المراكز الطبية --}}
                        <li class="nav-item has-treeview  @yield('medical_center_open')">
                            <a href="#" class="nav-link @yield('medical_center')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                               <i class="right fas fa-angle-left"></i>
                             المراكز الطبية
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('medical_center.index')}}" class="nav-link @yield('medical_center_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل المراكز الطبية</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('medical_center.create')}}" class="nav-link @yield('medical_center_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة مركز طبي جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- المراكز الطبية --}}

                        {{-- المعامل --}}
                        <li class="nav-item has-treeview  @yield('labs_open')">
                            <a href="#" class="nav-link @yield('labs') ">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/microscope_64px.png')}}" alt=""> --}}

                            <p>
                                المعامل
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('labs.index')}}" class="nav-link @yield('labs_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل المعامل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('labs.create')}}" class="nav-link @yield('labs_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة معمل جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- المعامل --}}

                         {{-- الاطباء --}}
                        <li class="nav-item has-treeview  @yield('doctors_open')">
                            <a href="#" class="nav-link @yield('doctors') ">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/doctor_male_52px.png')}}" alt=""> --}}

                            <p>
                                الاطباء
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('doctors.index')}}" class="nav-link @yield('doctors_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل الاطباء</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('doctors.create')}}" class="nav-link @yield('doctors_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة طبيب جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- الاطباء --}}

                        {{-- التخصصات --}}
                        <li class="nav-item has-treeview  @yield('specialtie_open')">
                            <a href="#" class="nav-link @yield('specialties') ">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/list_128px.png')}}" alt=""> --}}

                            <p>
                                التخصصات
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('specialtie.index')}}" class="nav-link @yield('specialtie_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> كل التخصصات </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('specialtie.create')}}" class="nav-link @yield('specialtie_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة تخصص جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- التخصصات --}}

                        {{-- الحجوزات --}}
                        <li class="nav-item has-treeview @yield('reservation_open')">
                            <a href="#" class="nav-link @yield('reservations')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/reservation_64px.png')}}" alt=""> --}}
                            <p>
                                الحجوزات
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                <a href="{{route('reservations.index')}}" class="nav-link @yield('reservation_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> كل الحجوزات </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('reservations.create')}}" class="nav-link @yield('reservation_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة حجز جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- الحجوزات --}}

                        {{-- الفحوصات --}}
                        <li class="nav-item has-treeview  @yield('checkupes_open')">
                            <a href="#" class="nav-link @yield('checkupes')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/health_checkup_64px.png')}}" alt=""> --}}
                            <p>
                                الفحوصات
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                <a href="{{route('checkupes.index')}}" class="nav-link  @yield('checkupes_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> كل الفحوصات </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                <a href="{{route('checkupes.create')}}" class="nav-link  @yield('checkupes_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة فحص جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- الفحوصات --}}

                        <li class="nav-item">
                            <a href="{{route('setting')}}" class="nav-link @yield('setting')">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            {{-- <img src="{{asset('uploads/settings_64px.png')}}" alt=""> --}}
                            <p>
                                الاعدادات العامة
                            </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
