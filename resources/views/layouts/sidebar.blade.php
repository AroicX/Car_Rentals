<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ url('home') }}"><img src="{{ asset('assets/images/icon/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    {{-- <style></style> --}}

                    <li><a href="{{ url('home') }}"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                        {{-- <span class="text-white px-4">Manage Cars</span> --}}
                    <li><a href="{{ url('my-reservations') }}"><i class="ti-money"></i> <span>My Reservations</span></a></li>
                    <li><a href="{{ url('profile') }}"><i class="ti-user"></i> <span>My Profile</span></a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>


