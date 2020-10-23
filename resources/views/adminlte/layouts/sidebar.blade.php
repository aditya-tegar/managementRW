<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('home') }}" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><i class="nav-icon fas fa-home"></i>
            {{ config('', 'Kumkang') }}</span>
    </a> --}}
    <a href="{{ route('home') }}" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><i class="nav-icon fas fa-home"></i>
            {{ config('', ' MANAGEMENT RW03') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Visi Misi </p>
                    </a>
                </li>

                
                @if (auth()->check() && auth()->user()->hasRole('manajemen_rt'))
                <li class="nav-header">MANAGEMENT RT</li>

                @if(auth()->user()->hasRole('manajemen_rt_01'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 01
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('warga01.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Warga </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('iuran01.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Iuran Warga </p>
                            </a>
                        </li>
                        @endif
                        @if(auth()->user()->hasRole('rt_01'))
                        <li class="nav-item">
                            <a href="{{ route('surat01.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Surat Menyurat </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ url('/laporan_keuangan01') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Keuangan </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporan_surat01') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Surat </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->user()->hasRole('manajemen_rt_02'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 02
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('warga02.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Warga </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('iuran02.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Iuran Warga </p>
                            </a>
                        </li>
                        @endif
                        @if(auth()->user()->hasRole('rt_02'))
                        <li class="nav-item">
                            <a href="{{ route('surat02.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Surat Menyurat </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ url('/laporan_keuangan02') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Keuangan </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporan_surat02') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Surat </p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(auth()->user()->hasRole('manajemen_rt_03'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 03
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('warga03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Warga </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('iuran03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Iuran Warga </p>
                            </a>
                        </li>
                        @endif
                        @if(auth()->user()->hasRole('rt_03'))
                        <li class="nav-item">
                            <a href="{{ route('surat03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Surat Menyurat </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ url('/laporan_keuangan03') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Keuangan </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporan_surat03') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Surat </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif


                @if (auth()->check() && auth()->user()->hasRole('manajemen_rw'))
                <li class="nav-header">MANAGEMENT RW</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RW 03
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        @if(auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('datarw03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data RT </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('iuranrw03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Data Iuran RT </p>
                            </a>
                        </li>
                        @endif
                        @if(!auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('suratrw03.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Surat Menyurat </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ url('/laporan_keuanganrw03') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Keuangan RW </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporan_suratrw03') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Surat RW </p>
                            </a>
                        </li>
                    </ul>
       
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 01
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/laporan_data01') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Data </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 02
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/laporan_data02') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Data </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RT 03
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/laporan_data03') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p> Laporan Data </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>