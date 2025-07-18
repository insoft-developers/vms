<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
            <h2 class=" light-logo">GLARE</h2>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <h6 class="sidebar-text text-uppercase ">Dashboard</h6>
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ activeRoute('dashboard') }}">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            width="15" height="15">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span class="ml-3 side-menu-title">Dashboard</span>
                    </a>
                </li>
                
                <li class="list-sidebar">
                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M5.23379 7.72989C6.65303 5.48625 9.15342 4 12.0002 4C14.847 4 17.3474 5.48625 18.7667 7.72989L20.4569 6.66071C18.6865 3.86199 15.5612 2 12.0002 2C8.43928 2 5.31393 3.86199 3.54356 6.66071L5.23379 7.72989ZM12.0002 20C9.15342 20 6.65303 18.5138 5.23379 16.2701L3.54356 17.3393C5.31393 20.138 8.43928 22 12.0002 22C15.5612 22 18.6865 20.138 20.4569 17.3393L18.7667 16.2701C17.3474 18.5138 14.847 20 12.0002 20ZM12 8C12.5523 8 13 8.44772 13 9C13 9.55228 12.5523 10 12 10C11.4477 10 11 9.55228 11 9C11 8.44772 11.4477 8 12 8ZM12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12ZM12 15C10.8954 15 10 15.8954 10 17H8C8 14.7909 9.79086 13 12 13C14.2091 13 16 14.7909 16 17H14C14 15.8954 13.1046 15 12 15ZM3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13C3.55228 13 4 12.5523 4 12C4 11.4477 3.55228 11 3 11ZM0 12C0 10.3431 1.34315 9 3 9C4.65685 9 6 10.3431 6 12C6 13.6569 4.65685 15 3 15C1.34315 15 0 13.6569 0 12ZM20 12C20 11.4477 20.4477 11 21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13C20.4477 13 20 12.5523 20 12ZM21 9C19.3431 9 18 10.3431 18 12C18 13.6569 19.3431 15 21 15C22.6569 15 24 13.6569 24 12C24 10.3431 22.6569 9 21 9Z"></path></svg>
                        <span class="ml-3 side-menu-title">Driver Management</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="list-subtitle">
                            <a href="{{ url('driver') }}">
                                <i class="las la-minus"></i><span class="subtitle">Driver Data</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('department') }}">
                                <i class="las la-minus"></i><span class="subtitle">Department</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('license') }}">
                                <i class="las la-minus"></i><span class="subtitle">License Type</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#vehicle" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M8.96456 18C8.72194 19.6961 7.26324 21 5.5 21C3.73676 21 2.27806 19.6961 2.03544 18H1V6C1 5.44772 1.44772 5 2 5H16C16.5523 5 17 5.44772 17 6V8H20L23 12.0557V18H20.9646C20.7219 19.6961 19.2632 21 17.5 21C15.7368 21 14.2781 19.6961 14.0354 18H8.96456ZM15 7H3V15.0505C3.63526 14.4022 4.52066 14 5.5 14C6.8962 14 8.10145 14.8175 8.66318 16H14.3368C14.5045 15.647 14.7296 15.3264 15 15.0505V7ZM17 13H21V12.715L18.9917 10H17V13ZM17.5 19C18.1531 19 18.7087 18.5826 18.9146 18C18.9699 17.8436 19 17.6753 19 17.5C19 16.6716 18.3284 16 17.5 16C16.6716 16 16 16.6716 16 17.5C16 17.6753 16.0301 17.8436 16.0854 18C16.2913 18.5826 16.8469 19 17.5 19ZM7 17.5C7 16.6716 6.32843 16 5.5 16C4.67157 16 4 16.6716 4 17.5C4 17.6753 4.03008 17.8436 4.08535 18C4.29127 18.5826 4.84689 19 5.5 19C6.15311 19 6.70873 18.5826 6.91465 18C6.96992 17.8436 7 17.6753 7 17.5Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Vehicle<br>Management</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="vehicle" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="list-subtitle">
                            <a href="{{ url('vehicle') }}">
                                <i class="las la-minus"></i><span class="subtitle">Vehicle Data</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('vehicle_merk') }}">
                                <i class="las la-minus"></i><span class="subtitle">Merk</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('vehicle_jenis') }}">
                                <i class="las la-minus"></i><span class="subtitle">Jenis</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('vehicle_type') }}">
                                <i class="las la-minus"></i><span class="subtitle">Type</span>
                            </a>
                        </li>
                        <li class="list-subtitle">
                            <a href="{{ url('insurance') }}">
                                <i class="las la-minus"></i><span class="subtitle">Insurance Company</span>
                            </a>
                        </li>

                        <li class="list-subtitle">
                            <a href="{{ url('location') }}">
                                <i class="las la-minus"></i><span class="subtitle">Location</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#behaviour" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M14 21L12 23L10 21H4.99509C3.89323 21 3 20.1074 3 19.0049V4.99509C3 3.89323 3.89262 3 4.99509 3H19.0049C20.1068 3 21 3.89262 21 4.99509V19.0049C21 20.1068 20.1074 21 19.0049 21H14ZM19 19V5H5V19H10.8284L12 20.1716L13.1716 19H19ZM7.97216 18.1808C7.35347 17.9129 6.76719 17.5843 6.22083 17.2024C7.46773 15.2753 9.63602 14 12.1022 14C14.5015 14 16.6189 15.2071 17.8801 17.0472C17.3438 17.4436 16.7664 17.7877 16.1555 18.0718C15.2472 16.8166 13.77 16 12.1022 16C10.3865 16 8.87271 16.8641 7.97216 18.1808ZM12 13C10.067 13 8.5 11.433 8.5 9.5C8.5 7.567 10.067 6 12 6C13.933 6 15.5 7.567 15.5 9.5C15.5 11.433 13.933 13 12 13ZM12 11C12.8284 11 13.5 10.3284 13.5 9.5C13.5 8.67157 12.8284 8 12 8C11.1716 8 10.5 8.67157 10.5 9.5C10.5 10.3284 11.1716 11 12 11Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Monitor Driver<br>Behaviour</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#fuel" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M14 19H15V21H2V19H3V4C3 3.44772 3.44772 3 4 3H13C13.5523 3 14 3.44772 14 4V12H16C17.1046 12 18 12.8954 18 14V18C18 18.5523 18.4477 19 19 19C19.5523 19 20 18.5523 20 18V11H18C17.4477 11 17 10.5523 17 10V6.41421L15.3431 4.75736L16.7574 3.34315L21.7071 8.29289C21.9024 8.48816 22 8.74408 22 9V18C22 19.6569 20.6569 21 19 21C17.3431 21 16 19.6569 16 18V14H14V19ZM5 19H12V13H5V19ZM5 5V11H12V5H5Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Fuel Consumption</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#asset" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M15 3C15.5523 3 16 3.44772 16 4V6H21C21.5523 6 22 6.44772 22 7V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V7C2 6.44772 2.44772 6 3 6H8V4C8 3.44772 8.44772 3 9 3H15ZM16 8H8V19H16V8ZM4 8V19H6V8H4ZM14 5H10V6H14V5ZM18 8V19H20V8H18Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Asset Management</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="list-sidebar">
                    <a href="#eld" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">ELD Compliance</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="list-sidebar">
                    <a href="#route" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M4 15V8.5C4 6.01472 6.01472 4 8.5 4C10.9853 4 13 6.01472 13 8.5V15.5C13 16.8807 14.1193 18 15.5 18C16.8807 18 18 16.8807 18 15.5V8.82929C16.8348 8.41746 16 7.30622 16 6C16 4.34315 17.3431 3 19 3C20.6569 3 22 4.34315 22 6C22 7.30622 21.1652 8.41746 20 8.82929V15.5C20 17.9853 17.9853 20 15.5 20C13.0147 20 11 17.9853 11 15.5V8.5C11 7.11929 9.88071 6 8.5 6C7.11929 6 6 7.11929 6 8.5V15H9L5 20L1 15H4ZM19 7C19.5523 7 20 6.55228 20 6C20 5.44772 19.5523 5 19 5C18.4477 5 18 5.44772 18 6C18 6.55228 18.4477 7 19 7Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Route Management</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>




                <li class="list-sidebar">
                    <a href="#vehicle" class="collapsed" data-toggle="collapse" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M12 3V7H6.23607L4.235 11H22V21C22 21.5523 21.5523 22 21 22H20C19.4477 22 19 21.5523 19 21V20H5V21C5 21.5523 4.55228 22 4 22H3C2.44772 22 2 21.5523 2 21V11L4.44721 6.10557C4.786 5.428 5.47852 5 6.23607 5H9V3H12ZM20 13H4V18H20V13ZM6.5 14C7.32843 14 8 14.6716 8 15.5C8 16.3284 7.32843 17 6.5 17C5.67157 17 5 16.3284 5 15.5C5 14.6716 5.67157 14 6.5 14ZM17.5 14C18.3284 14 19 14.6716 19 15.5C19 16.3284 18.3284 17 17.5 17C16.6716 17 16 16.3284 16 15.5C16 14.6716 16.6716 14 17.5 14ZM18.5 1C20.9853 1 23 3.01472 23 5.5C23 7.98528 20.9853 10 18.5 10C16.0147 10 14 7.98528 14 5.5C14 3.01472 16.0147 1 18.5 1ZM18.4998 6.16667C18.0089 6.16667 17.5593 6.34354 17.2113 6.63704L17.0856 6.75245L18.4998 8.16667L19.9131 6.7515C19.5512 6.39013 19.0516 6.16667 18.4998 6.16667ZM18.4998 3.5C17.2966 3.5 16.1998 3.95536 15.3722 4.70316L15.199 4.86781L16.1428 5.80964C16.746 5.20643 17.5794 4.83333 18.4998 4.83333C19.3436 4.83333 20.1141 5.14684 20.7013 5.66372L20.8569 5.80964L21.7997 4.86684C20.9552 4.02233 19.7885 3.5 18.4998 3.5Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Vehicle Maintenance<br> Update</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#delivery" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M7 3V1H9V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V9H20V5H17V7H15V5H9V7H7V5H4V19H10V21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7ZM17 12C14.7909 12 13 13.7909 13 16C13 18.2091 14.7909 20 17 20C19.2091 20 21 18.2091 21 16C21 13.7909 19.2091 12 17 12ZM11 16C11 12.6863 13.6863 10 17 10C20.3137 10 23 12.6863 23 16C23 19.3137 20.3137 22 17 22C13.6863 22 11 19.3137 11 16ZM16 13V16.4142L18.2929 18.7071L19.7071 17.2929L18 15.5858V13H16Z"></path></svg>
                        <span class="ml-3 side-menu-title">Delivery Schedule</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="list-sidebar">
                    <a href="#accident" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M5.7646 7.99998L5.46944 7.26944C5.26255 6.75737 5.50995 6.17454 6.02202 5.96765L15.2939 2.22158C15.8059 2.01469 16.3888 2.26209 16.5956 2.77416L22.2147 16.6819C22.4216 17.194 22.1742 17.7768 21.6622 17.9837L12.3903 21.7298C11.8783 21.9367 11.2954 21.6893 11.0885 21.1772L11.0002 20.9586V21H7.00021C6.44792 21 6.00021 20.5523 6.00021 20V19.7303L2.65056 18.377C2.13849 18.1701 1.89109 17.5873 2.09798 17.0752L5.7646 7.99998ZM8.00021 19H10.2089L8.00021 13.5333V19ZM6.00021 12.7558L4.32696 16.8972L6.00021 17.6084V12.7558ZM7.69842 7.44741L12.5683 19.5008L19.9858 16.5039L15.1159 4.45055L7.69842 7.44741ZM10.6766 9.47974C10.1645 9.68663 9.5817 9.43924 9.37481 8.92717C9.16792 8.4151 9.41532 7.83227 9.92739 7.62538C10.4395 7.41849 11.0223 7.66588 11.2292 8.17795C11.4361 8.69002 11.1887 9.27286 10.6766 9.47974Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Accident Prevention</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="list-sidebar">
                    <a href="#location" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Real-time Vehicle<br> Location</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#settings" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M12 1L21.5 6.5V17.5L12 23L2.5 17.5V6.5L12 1ZM12 3.311L4.5 7.65311V16.3469L12 20.689L19.5 16.3469V7.65311L12 3.311ZM12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12C16 14.2091 14.2091 16 12 16ZM12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">App Settings</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="settings" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="list-subtitle">
                            <a href="{{ url('driver') }}">
                                <i class="las la-minus"></i><span class="subtitle">Profile Setting</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list-sidebar">
                    <a href="#reports" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                            fill="currentColor">
                            <path
                                d="M11 7H13V17H11V7ZM15 11H17V17H15V11ZM7 13H9V17H7V13ZM15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918Z">
                            </path>
                        </svg>
                        <span class="ml-3 side-menu-title">Reports</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{ activeRoute('app/user/profile') }}">
                            <a href="#">
                                <i class="las la-minus"></i><span>User Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

        <div class="pt-5 pb-2" style="margin-top:150px;"></div>
    </div>
</div>
