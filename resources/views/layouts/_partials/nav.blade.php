<!-- Navbar -->
<nav class="navbar navbar-expand navbar-light bg-light ">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand d-flex">
            <img src="{{ asset('img/chef.svg'), true }}" width="45" height="45" />
            <span class="h3 px-2 pt-2">Sabores</span>
        </a>


        <div class="d-flex">

            <ul class=" navbar-nav me-auto">

                @if (auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('caderno.index') }}">Caderno</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('autenticar.logout') }}">Sair</a>

                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('autenticar.index') }}">Entrar</a>

                    </li>
                @endif

            </ul>

        </div>
    </div>
</nav>
