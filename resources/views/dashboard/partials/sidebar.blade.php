{{-- <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-danger">Core</div>
                <a class="nav-link  text-danger" href="/">
                    <div class="sb-nav-link-icon text-danger"><i class="fas fa-tachometer-alt"></i></div>
                    Home page
                </a>
                <a class="nav-link  text-danger" href="/dashboard">
                    <div class="sb-nav-link-icon text-danger"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading  text-danger">Interface</div>
                <a class="nav-link collapsed  text-danger" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon  text-danger"><i class="fas fa-columns"></i></div>
                    Content
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-danger"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/prospect*') ? 'active' : '' }} text-decoration-none text-danger"
                                href="/dashboard/prospect">Jobs Prospect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('dashboard/startup*') ? 'active' : '' }} text-decoration-none  text-danger"
                                href="/dashboard/startup">Start up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('dashboard/work*') ? 'active' : '' }} text-decoration-none  text-danger"
                                href="/dashboard/work">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('dashboard/news*') ? 'active' : '' }} text-decoration-none  text-danger"
                                href="/dashboard/news"> News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('dashboard/apply*') ? 'active' : '' }} text-decoration-none  text-danger"
                                href="/dashboard/apply">Apply</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('dashboard/categories*') ? 'active' : '' }} text-decoration-none  text-danger"
                                href="/dashboard/categories">Categories</a>
                        </li>
                    </nav>
                </div>
                <a class="nav-link collapsed text-danger" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon text-danger"><i class="fas fa-book-open text-danger"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-danger"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link text-danger" href="/dashboard/register">Register</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
        </div>
    </nav>
</div> --}}

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <img src="/img/logo/logo-title.png" alt="andromind" width="20%">
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">Andro Mind</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bi bi-speedometer2"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
            <a href="/dashboard/categories" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-tag"></i>
                <div data-i18n="Basic">Categories</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/news*') ? 'active' : '' }}">
            <a href="/dashboard/news" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-newspaper"></i>
                <div data-i18n="Basic">News</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/prospect*') ? 'active' : '' }}">
            <a href="/dashboard/prospect" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-journal-text"></i>
                <div data-i18n="Basic">Job Prospect</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/startup*') ? 'active' : '' }}">
            <a href="/dashboard/startup" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-building-up"></i>
                <div data-i18n="Basic">Startup</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/work*') ? 'active' : '' }}">
            <a href="/dashboard/work" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-person-workspace"></i>
                <div data-i18n="Basic">Carier</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/apply*') ? 'active' : '' }}">
            <a href="/dashboard/apply" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-envelope-plus"></i>
                <div data-i18n="Basic">Applicant</div>
            </a>
        </li>

    </ul>
</aside>
