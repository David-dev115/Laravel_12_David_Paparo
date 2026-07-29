

<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('homepage')}}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('articles.index')}}">Archivio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('articles.create')}}">Crea</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
