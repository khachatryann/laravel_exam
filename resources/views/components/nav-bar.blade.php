<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is("products") ? 'active' : '') }}" href="{{ route('products.index') }}">Products</a>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(empty(Auth::user()->avatar))
                        <img src="{{ asset("assets/uploads/avatars/default.jpg" . Auth::user()->avatar )}}" style="width:50px; height:50px;border-radius:50%" alt="">
                    @else
                        <img src="{{ asset("assets/uploads/avatars/" . Auth::user()->avatar) }}" style="width:50px; height:50px;border-radius:50%" alt="">
                        {{ Auth::user()->name}}
                    @endif
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route("logout") }}">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
