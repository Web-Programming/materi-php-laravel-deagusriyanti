 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="../../dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">IF2B</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">

            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("/  dashboard") }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dasboard </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#data" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>
                    Data
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                {{-- fakultas --}}
                  <li class="nav-item">
                    <a href="{{ url("/fakultas") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fakultas</p>
                    </a>
                  </li>
                {{-- prodi --}}
                  <li class="nav-item">
                    <a href="{{ url("/prodi") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Program Studi</p>
                    </a>
                  </li>
                {{-- Dosen --}}
                <li class="nav-item">
                    <a href="{{ url("/dosen") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dosen</p>
                    </a>
                  </li>
                {{-- Mahasiswa --}}
                <li class="nav-item">
                    <a href="{{ url("/mahasiswa") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Mahasiswa</p>
                    </a>
                  </li>
                {{-- Materi --}}
                <li class="nav-item">
                    <a href="{{ url("/materi") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Materi</p>
                    </a>
                  </li>

                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>