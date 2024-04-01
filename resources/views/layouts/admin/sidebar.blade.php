<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('template/images/giga_merah.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            {{-- <h4 class="logo-text">GIGA</h4> --}}
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ route('dashboard.index')}}"><i class="bx bx-right-arrow-alt"></i>Informasi</a>
                </li>
            </ul>
        </li>
        
        <li class="menu-label">Data Master</li>
        
        <li>
            <a href="{{ route('package.index')}}">
                <div class="parent-icon"><i class='bx bx-package'></i>
                </div>
                <div class="menu-title">Paket</div>
            </a>
        </li>
        <li>
            <a href="{{ route('subdistrict.index')}}">
                <div class="parent-icon"><i class='bx bx-map'></i>
                </div>
                <div class="menu-title">Kecamatan</div>
            </a>
        </li>

        <li class="menu-label">Proses</li>
        <li>
            <a href="{{ route('client.index')}}">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Permintaan</div>
            </a>
        </li>
        
        <li class="menu-label">Lainnya</li>
        
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Dokumentasi</div>
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Bantuan</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>