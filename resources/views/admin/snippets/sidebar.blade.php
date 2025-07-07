<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" class="" alt="Logo" width="50">
            <!-- <img src="admin_assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
            <img src="admin_assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
            <img src="admin_assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
            <img src="admin_assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo"> -->
        </a><!-- LOGO -->
    </div>
    <ul class="side-menu" style="margin-top: 30px;">
        <li class="mt-3">
            <h3 class="">Main</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li>
            <h3>Uploads</h3>
        </li>
        <!-- <li>
            <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
        </li> -->
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Tributes</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('admin.tributes.upload') }}" class="slide-item">Upload</a></li>
                <li><a href="" class="slide-item">Tribute List</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Eulogy</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('admin.eulogy.upload') }}" class="slide-item">Upload</a></li>
                <li><a href="{{ route('admin.eulogy.index') }}" class="slide-item">Eulogy List</a></li>
            </ul>
        </li>
    </ul>
</aside>

<style>
    .side-header {
        border-bottom: 1px solid #eaedf1;
        border-right: 1px solid #eaedf1;
        display: flex;
        height: 75px;
        padding: 8px 17px;
        transition: left .2s ease, width .2s ease;
    }

    .side-menu__item.active {
        background: #8B0000;
    }

    .btn-primary {
        background: #8B0000 !important;
        border-color: #8B0000 !important;
        color: #fff !important;
    }

    #back-to-top {
        background: #8B0000 !important;
    }


    #back-to-top:hover {
        border: 2px solid #8B0000 !important;
        color: #8B0000 !important;
    }
</style>
