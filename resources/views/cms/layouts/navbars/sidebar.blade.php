<div class="sidebar" data-color="green" data-image="{{ asset('cms/img/sidebar.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('cms.home')}}" class="simple-text">
                Eventos UFFS
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'events') active @endif">
                <a class="nav-link collapsed" href="#eventsOptions" data-toggle="collapse" aria-expanded="false">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Eventos</p>
                </a>

                <div class="collapse show" id="eventsOptions">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nc-icon nc-align-left-2"></i>
                                <p>Eventos Existentes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nc-icon nc-simple-add"></i>
                                <p>Novo Evento</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
