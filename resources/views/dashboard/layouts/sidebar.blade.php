<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                        <i class="bi bi-house-door-fill"></i>
                        Home
                    </a>
                </li>
                @can('admin')
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-mahasiswa">
                            <i class="bi bi-people-fill"></i>
                            Mahasiswa
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-dosen">
                        <i class="bi bi-file-person-fill"></i>
                        Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-prodi">
                        <i class="bi bi-building"></i>
                        Prodi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-berita">
                        <i class="bi bi-newspaper"></i>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-kategori">
                        <i class="bi bi-list-task"></i>
                        Kategori
                    </a>
                </li>
                @can('admin')
                    <li class="nav-item {{ Request::is('user' ? 'active' : '') }}">
                        <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-user">
                            <i class="bi bi-person-circle"></i>
                            User
                        </a>
                    </li>
                @endcan
            </ul>

            {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg class="bi"><use xlink:href="#plus-circle"/></svg>
          </a>
        </h6>
        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Year-end sale
            </a>
          </li>
        </ul> --}}

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-gear-fill"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi">
                            <use xlink:href="#door-closed" />
                        </svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
