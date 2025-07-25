<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="{{ route('dashboard') }}" class="header-logo">
                    <h4 class="logo-title text-uppercase">GLARE</h4>
                </a>
            </div>
            <div class="navbar-breadcrumb">
                <h3 class="ml-2">{{ Auth::user()->company_name }}</h3>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </a>
                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="text search-input font-size-12"
                                            placeholder="type here to search...">
                                        <a href="#" class="search-link"><i class="las la-search"></i></a>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item nav-icon nav-item-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    height="20px" width="20px">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                                <span class="bg-secondary dots "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="cust-title p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Notifications</h5>
                                                <a class="badge badge-primary badge-card" href="#">3</a>
                                            </div>
                                        </div>
                                        <div class="px-3 pt-0 pb-0 sub-card">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="{{ asset('images/user/6.png') }}" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Emma Watson</h6>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="{{ asset('images/user/7.png') }}" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Ashlynn Franci</h6>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="{{ asset('images/user/08.png') }}" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Kianna Carder</h6>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                            role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center"
                                id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('images/user/1.jpg') }}" class="img-fluid rounded" alt="user">
                                <div class="caption ml-3">
                                    <h6 class="mb-0 line-height">{{ Auth::user()->name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                            fill="currentColor" height="20px" width="20px">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </h6>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu mt-2" aria-labelledby="dropdownMenuButton4">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="profile-header">
                                            <div class="cover-container text-center">
                                                <div class="rounded-circle profile-icon bg-primary mx-auto d-block">M
                                                </div>
                                                <div class="profile-detail mt-3">
                                                    <h5><a href="{{ route('userdetail.userprofileedit') }}">{{ Auth::user()->name }}</a></h5>
                                                    <p>{{ Auth::user()->email }}</p>
                                                </div>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="javascript:void(0)" class="btn btn-primary"
                                                       onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                        {{ __('Sign Out') }}
                                                    </a>
                                                </form>
                                            </div>
                                            {{-- <div class="profile-details mt-4 pt-4 border-top">
                                                <div class="media align-items-center mb-3">
                                                    <div class="rounded-circle iq-card-icon-small bg-primary">
                                                        A
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="media justify-content-between">
                                                            <h6 class="mb-0 mt-1">Anna Mull</h6>
                                                            <p class="mb-0 font-size-12 mt-2"><i>Signed Out</i></p>
                                                        </div>
                                                        <p class="mb-0 font-size-12 ">annamull@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center mb-3">
                                                    <div class="rounded-circle iq-card-icon-small bg-success">
                                                        K
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="media justify-content-between">
                                                            <h6 class="mb-0 mt-1">King Poilin</h6>
                                                            <p class="mb-0 font-size-12 mt-2"><i>Signed Out</i></p>
                                                        </div>
                                                        <p class="mb-0 font-size-12">kingpoilin@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center">
                                                    <div class="rounded-circle iq-card-icon-small bg-danger">
                                                        D
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="media justify-content-between">
                                                            <h6 class="mb-0 mt-1">Devid Worner</h6>
                                                            <p class="mb-0 font-size-12 mt-2"><i>Signed Out</i></p>
                                                        </div>
                                                        <p class="mb-0 font-size-12">devidworner@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
