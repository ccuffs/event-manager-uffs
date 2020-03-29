<div class="sidebar" data-color="green" data-image="{{ asset('cms/img/sidebar.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('cms.home')}}" class="simple-text">
                Eventos UFFS
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('cms.home')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
        </ul>
    </div>
</div>
