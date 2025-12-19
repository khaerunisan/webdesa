 <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assetsbackend/img/carousel-1.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Desa Kujangsari</h6>
                        <span>Admin</span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="index" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>DAHSBOARD</a>
                     <a href="beritaback" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BERITA</a>
                    <a href="{{ route('produkback') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>PRODUK UMKM</a>
                    <a href="ppidback" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>PPID</a>
                    <a href="admin/kotaksaran" class="nav-item nav-link"><i class="fa fa-envelope me-2"></i>KOTAK SARAN</a>
                   <a href="{{ route('logout') }}"
                        class="nav-item nav-link"
                        onclick="return confirm('Yakin ingin logout?')">
                        <i class="fa fa-table me-2"></i>LOGOUT
                     </a>
                   
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->