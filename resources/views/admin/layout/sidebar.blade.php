<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ url('/') }}" class="logo-text" target="_blank">Xpedia Rentals</a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    {{-- <style></style> --}}

                    <li><a href="{{ url('admin/home') }}"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                    
                    <li><a href="{{ url('admin/cars') }}"><i class="ti-car"></i> <span>Cars</span></a></li>
                    <li><a href="{{ url('admin/reservations') }}"><i class="ti-money"></i> <span>Reservations</span></a></li>
                    <li><a href="{{ url('admin/client') }}"><i class="ti-user"></i> <span>Client</span></a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>
