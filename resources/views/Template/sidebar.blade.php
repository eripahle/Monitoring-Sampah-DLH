<!-- ======== sidebar-nav start =========== -->
<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo" style="text-align: left">
        <a href="index.html">
            <img src="{{asset('images/logo/absensi.png')}}" class="w-100" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            @if(Session('pegawai')->id_role == 2 || Session('pegawai')->id_role == 1 )
            <li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            @if(Session('pegawai')->id_role == 2)
            <li class="nav-item {{ Request::routeIs('tiket.index') ? 'active' : '' }}">
                <a href="{{route('tiket.index')}}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z"></path>
                        </svg>
                    </span>
                    <span class="text">Tiket</span>
                </a>
            </li>
            @endif
            <li class="nav-item {{ Request::routeIs('tiket.rekap') ? 'active' : '' }}">
                <a href="{{route('tiket.rekap')}}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z"></path>
                        </svg>
                    </span>
                    <span class="text">Rekap Tiket</span>
                </a>
            </li>
            @if(Session('pegawai')->id_role == 1)
            <li class="nav-item {{ Request::routeIs('pegawai') ? 'active' : '' }}">
                <a href="{{route('pegawai')}}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0001 3.66675C11.9725 3.66675 12.9052 4.05306 13.5928 4.74069C14.2804 5.42832 14.6667 6.36095 14.6667 7.33341C14.6667 8.30587 14.2804 9.23851 13.5928 9.92614C12.9052 10.6138 11.9725 11.0001 11.0001 11.0001C10.0276 11.0001 9.09499 10.6138 8.40736 9.92614C7.71972 9.23851 7.33341 8.30587 7.33341 7.33341C7.33341 6.36095 7.71972 5.42832 8.40736 4.74069C9.09499 4.05306 10.0276 3.66675 11.0001 3.66675ZM11.0001 5.50008C10.5139 5.50008 10.0475 5.69324 9.70372 6.03705C9.3599 6.38087 9.16675 6.84718 9.16675 7.33341C9.16675 7.81964 9.3599 8.28596 9.70372 8.62978C10.0475 8.97359 10.5139 9.16675 11.0001 9.16675C11.4863 9.16675 11.9526 8.97359 12.2964 8.62978C12.6403 8.28596 12.8334 7.81964 12.8334 7.33341C12.8334 6.84718 12.6403 6.38087 12.2964 6.03705C11.9526 5.69324 11.4863 5.50008 11.0001 5.50008ZM11.0001 11.9167C13.4476 11.9167 18.3334 13.1359 18.3334 15.5834V18.3334H3.66675V15.5834C3.66675 13.1359 8.55258 11.9167 11.0001 11.9167ZM11.0001 13.6584C8.27758 13.6584 5.40841 14.9967 5.40841 15.5834V16.5917H16.5917V15.5834C16.5917 14.9967 13.7226 13.6584 11.0001 13.6584Z"></path>
                        </svg>
                    </span>
                    <span class="text">Pegawai</span>
                </a>
            </li>
            <li class="nav-item {{ Request::routeIs('kantor') ? 'active' : '' }}">
                <a href="{{route('kantor')}}">
                    <span class="icon">
                        <i class="lni lni-apartment"></i>
                    </span>
                    <span class="text">TPA</span>
                </a>
            </li>
            <li class="nav-item {{ Request::routeIs('kabkota.index') ? 'active' : '' }}">
                <a href="{{route('kabkota.index')}}">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-central-south-asia" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z" />
                        </svg>
                    </span>
                    <span class="text">Kabupaten Kota</span>
                </a>
            </li>
            @endif
            @endif
            <li class="nav-item nav-item-has-children {{ (Request::routeIs('alat.*') or Request::routeIs('jenisalat.*') or Request::routeIs('kondisialat.*')) ? 'active' : '' }}">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg fill="#1C2033" width="16" height="16" version="1.1" id="lni_lni-construction" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <path d="M57.5,24.1c2.6,0,4.8-2.2,4.8-4.8v-3.2c0-2.1-1.4-4-3.4-4.6L27.9,2c-0.5-0.1-0.9-0.2-1.4-0.2H14.2c-2.6,0-4.8,2.2-4.8,4.8
                            v12.7c0,2.6,2.2,4.8,4.8,4.8H17v18.4H8c-3.4,0-6.2,2.8-6.2,6.2V56c0,3.4,2.8,6.2,6.2,6.2h22.5c3.4,0,6.3-2.8,6.3-6.2v-7.3
                            c0-3.4-2.8-6.2-6.3-6.2h-9V24.1h28.6V35c0,2.1,1.5,4,3.6,4.5c2.7,0.7,4.4,3.4,3.9,6.2c-0.4,2.1-2.2,3.9-4.3,4.3
                            c-1.6,0.3-3.2-0.1-4.5-1.2c-1.2-1-1.9-2.5-1.9-4.1c0-0.6,0.1-1.2,0.3-1.8c0.4-1.2-0.2-2.5-1.4-2.9c-1.2-0.4-2.5,0.2-2.9,1.4
                            c-0.4,1.1-0.6,2.2-0.6,3.3c0,2.9,1.3,5.7,3.5,7.6c1.8,1.5,4,2.3,6.4,2.3c0.6,0,1.2-0.1,1.8-0.2c4-0.7,7.3-4,8-8
                            c0.9-5.2-2.2-10-7.2-11.3c-0.2,0-0.2-0.1-0.2-0.2V24.1H57.5z M32.3,48.7V56c0,1-0.8,1.8-1.8,1.8H8c-1,0-1.8-0.8-1.8-1.8v-7.3
                            C6.2,47.8,7,47,8,47h22.5C31.5,47,32.3,47.8,32.3,48.7z M57.8,16.1v3.2c0,0.2-0.1,0.3-0.3,0.3H29.2V7l28.4,8.7
                            C57.7,15.8,57.8,15.9,57.8,16.1z M13.9,19.3V6.5c0-0.2,0.1-0.3,0.3-0.3l10.5,0v13.3H14.2C14,19.6,13.9,19.4,13.9,19.3z" />
                        </svg>
                    </span>
                    <span class="text">Alat</span>
                </a>
                <ul id="ddmenu_1" class="collapse dropdown-nav {{ (Request::routeIs('alat.*') or Request::routeIs('jenisalat.*') or Request::routeIs('kondisialat.*')) ? 'show' : '' }}">
                    <li>
                        <a href="{{route('alat.index')}}" class="{{ Request::routeIs('alat.*') ? 'active' : '' }}"> Data Alat </a>
                        <a href="{{route('jenisalat.index')}}" class="{{ Request::routeIs('jenisalat.*') ? 'active' : '' }}"> Jenis Alat Berat </a>
                        <a href="{{route('kondisialat.index')}}" class="{{ Request::routeIs('kondisialat.*') ? 'active' : '' }}"> Kondisi Alat Berat </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->