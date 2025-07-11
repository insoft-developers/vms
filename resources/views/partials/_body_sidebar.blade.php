<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset('images/logo.png')}}" alt="logo">
            <h2 class=" light-logo">GLARE</h2>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <h6 class="sidebar-text text-uppercase ">main</h6>
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ activeRoute('dashboard') }}">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span class="ml-3">Sales Dashboard</span>
                    </a>
                </li>
                <li class="{{ activeRoute('analytics') }}">
                    <a href="{{ route('analytics') }}" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Analytics Dashboard</span>
                    </a>
                </li>
                <li>
                    <h6 class=" text-uppercase sidebar-text">Pre-build Pages</h6>
                </li>
                <li class="{{ activeRoute('app/*') }}">
                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">User Details</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="{{ route('userdetail.userprofile') }}">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('app/user/add') }}">
                            <a href="{{ route('userdetail.useradd') }}">
                                <i class="las la-minus"></i><span>User Add</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('app/user/userlist') }}">
                            <a href="{{ route('userdetail.userlist') }}">
                                <i class="las la-minus"></i><span>User List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ activeRoute('ui/*') }}">
                    <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">UI Elements</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="ui" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('ui/avatars') }}">
                            <a href="{{ route('ui.avatars') }}">
                                <i class="las la-minus"></i><span>Avatars</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/alerts') }}">
                            <a href="{{ route('ui.alerts') }}">
                                <i class="las la-minus"></i><span>Alerts</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/badges') }}">
                            <a href="{{ route('ui.badges') }}">
                                <i class="las la-minus"></i><span>Badges</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/breadcrumb') }}">
                            <a href="{{ route('ui.breadcrumb') }}">
                                <i class="las la-minus"></i><span>Breadcrumb</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/buttons') }}">
                            <a href="{{ route('ui.buttons') }}">
                                <i class="las la-minus"></i><span>Buttons</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/buttongroup') }}">
                            <a href="{{ route('ui.buttongroup') }}">
                                <i class="las la-minus"></i><span>Buttons Group</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/boxshadows') }}">
                            <a href="{{ route('ui.boxshadows') }}">
                                <i class="las la-minus"></i><span>Box Shadow</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/colors') }}">
                            <a href="{{ route('ui.colors') }}">
                                <i class="las la-minus"></i><span>Colors</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/cards') }}">
                            <a href="{{ route('ui.cards') }}">
                                <i class="las la-minus"></i><span>Cards</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/carousel') }}">
                            <a href="{{ route('ui.carousel') }}">
                                <i class="las la-minus"></i><span>Carousel</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/grid') }}">
                            <a href="{{ route('ui.grid') }}">
                                <i class="las la-minus"></i><span>Grid</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/helperclass') }}">
                            <a href="{{ route('ui.helperclass') }}">
                                <i class="las la-minus"></i><span>Helper classes</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/images') }}">
                            <a href="{{ route('ui.images') }}">
                                <i class="las la-minus"></i><span>Images</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/listgroup') }}">
                            <a href="{{ route('ui.listgroup') }}">
                                <i class="las la-minus"></i><span>list Group</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/media') }}">
                            <a href="{{ route('ui.media') }}">
                                <i class="las la-minus"></i><span>Media</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/modal') }}">
                            <a href="{{ route('ui.modal') }}">
                                <i class="las la-minus"></i><span>Modal</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/notification') }}">
                            <a href="{{ route('ui.notification') }}">
                                <i class="las la-minus"></i><span>Notifications</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/pagination') }}">
                            <a href="{{ route('ui.pagination') }}">
                                <i class="las la-minus"></i><span>Pagination</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/popovers') }}">
                            <a href="{{ route('ui.popovers') }}">
                                <i class="las la-minus"></i><span>Popovers</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/progressbars') }}">
                            <a href="{{ route('ui.progressbars') }}">
                                <i class="las la-minus"></i><span>Progressbars</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/typography') }}">
                            <a href="{{ route('ui.typography') }}">
                                <i class="las la-minus"></i><span>Typography</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/tabs') }}">
                            <a href="{{ route('ui.tabs') }}">
                                <i class="las la-minus"></i><span>Tabs</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/tooltips') }}">
                            <a href="{{ route('ui.tooltips') }}">
                                <i class="las la-minus"></i><span>Tooltips</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('ui/video') }}">
                            <a href="{{ route('ui.video') }}">
                                <i class="las la-minus"></i><span>Video</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ activeRoute('auth/*') }}">
                    <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Authentication</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="auth" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('auth.login') }}">
                                <i class="las la-minus"></i><span>Login</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('auth.register') }}">
                                <i class="las la-minus"></i><span>Register</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('auth.recover-password') }}">
                                <i class="las la-minus"></i><span>Recover Password</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('auth.confirm-email') }}">
                                <i class="las la-minus"></i><span>Confirm Mail</span>
                            </a>
                        </li>
                        {{-- <li class="">
                            <a href="{{ route('auth.lock-screen') }}">
                                <i class="las la-minus"></i><span>Lock Screen</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="{{ activeRoute('forms/*') }}">
                    <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path
                                d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                        </svg>
                        <span class="ml-3">Forms</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('forms/layout') }}">
                            <a href="{{ route('forms.layout') }}">
                                <i class="las la-minus"></i><span class="">Form Elements</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/inputgroup') }}">
                            <a href="{{ route('forms.inputgroup') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Input</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/validation') }}">
                            <a href="{{ route('forms.validation') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Validation</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/switch') }}">
                            <a href="{{ route('forms.switch') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Switch</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/checkbox') }}">
                            <a href="{{ route('forms.checkbox') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Checkbox</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/radio') }}">
                            <a href="{{ route('forms.radio') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Radio</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('forms/textarea') }}">
                            <a href="{{ route('forms.textarea') }}" class="svg-icon">
                                <i class="las la-minus"></i><span class="">Form Textarea</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ activeRoute('table/*') }}">
                    <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span class="ml-3">Table</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="table" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('table/basics') }}">
                            <a href="{{ route('table.tablebasics') }}">
                                <i class="las la-minus"></i><span>Basic Tables</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('table/data') }}">
                            <a href="{{ route('table.tabledata') }}">
                                <i class="las la-minus"></i><span>Data Table</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('table/tree') }}">
                            <a href="{{ route('table.tabletree') }}">
                                <i class="las la-minus"></i><span>Table Tree</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ activeRoute('pricing/*') }}">
                    <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Pricing</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="pricing" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('pricing/pricing1') }}">
                            <a href="{{ route('pricing.pricing1') }}">
                                <i class="las la-minus"></i><span>Pricing 1</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('pricing/pricing2') }}">
                            <a href="{{ route('pricing.pricing2') }}">
                                <i class="las la-minus"></i><span>Pricing 2</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ activeRoute('error/*') }}">
                    <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Error</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="pages-error" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('pageError.error404') }}">
                                <i class="las la-minus"></i><span>Error 404</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('pageError.error500') }}">
                                <i class="las la-minus"></i><span>Error 500</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ activeRoute('timeline') }}">
                    <a href="{{ route('timeline') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Timeline</span>
                    </a>
                </li>
                <li class="{{ activeRoute('blankpage') }}">
                    <a href="{{ route('blankpage') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Blank Page</span>
                    </a>
                </li>
                <li class="{{ activeRoute('maintenance') }}">
                    <a href="{{ route('maintenance') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg>
                        <span class="ml-3">Maintenance</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none  shadow-none">
                <div class="card-body rounded-pill bg-secondary">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="{{ asset('images/sidebar.png')}}" class="img-fluid" alt="sidebar">
                        </div>
                        <p class="mb-0 mt-3 text-capitalize">Check out more feature<br> by getting upgrade</p>
                        <button type="button" class="btn sidebar-bottom-btn mt-3">Go Premium</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2"></div>
    </div>
</div>