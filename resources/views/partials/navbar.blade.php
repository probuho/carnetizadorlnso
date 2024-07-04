<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
        <img src="{{ asset('img/logo.ico') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
        <span class="text-primary">Liceo SUR - OESTE</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">Acerca de</a>
            <a href="{{ url('/gallery') }}" class="nav-item nav-link">Galería</a>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contáctanos</a>
            <a href="{{ route('students.create') }}" class="nav-item nav-link">Genera tu carné</a>
        </div>
    </div>
</nav>
