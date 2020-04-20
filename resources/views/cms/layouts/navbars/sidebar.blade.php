<div class="sidebar" data-color="green" data-image="{{ asset('cms/img/sidebar.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('cms.home')}}" class="simple-text">
                Eventos UFFS
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'event') active @endif">
                <a class="nav-link collapsed" href="{{ route('event.index') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Eventos</p>
                </a>
            </li>
        </ul>
    </div>
</div>
