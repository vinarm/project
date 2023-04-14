<aside class="left-sidebar" data-sidebarbg="skin2" style="background-color: #03C988;">
    {{-- Sidebar scroll --}}
    <div class="scroll-sidebar">
        {{-- Sidebar navigation --}}
        <nav class="sidebar-nav" style="background-color: #03C988; position: fixed;">
            <ul id="sidebarnav">
                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/Dashboard" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-house-door-fill me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Beranda</span>
                    </a>
                </li>

                <!-- @if (auth()->user()->level =="pemilik_sanggar")
                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/cetak-kartu" aria-expanded="true" style="font-weight: bold;">
                        <i class="bi bi-printer me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Cetak Kartu</span>
                    </a>
                </li>
                @endif -->

                @if (auth()->user()->level == 'admin')
                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/Jenis-Kesenian" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-person-lines-fill me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Profile Desa</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/Data-Penduduk" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-pie-chart-fill me-4 p-1" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Data Kependudukan</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/kecamatan" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-person-lines-fill me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Data Kepegawaian</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/list-user" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-calendar-event-fill me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Agenda Kegiatan</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/list-user" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-calendar3-event-fill me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Berita Acara</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #03C988;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/list-user" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-card-list me-4 p-1" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Pelayanan Masyarakat</span>
                    </a>
                </li>
                @endif

                <li class="text-center upgrade-btn" style="background-color: #03C988;">
                    <form action="/Logout" method="get">
                        @csrf
                        <button class="btn btn-danger text-white mt-4 fw-bold">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Keluar</button>
                    </form>
                </li>
            </ul>
        </nav>
        {{-- End Sidebar navigation --}}
    </div>
    {{-- End Sidebar scroll --}}
</aside>