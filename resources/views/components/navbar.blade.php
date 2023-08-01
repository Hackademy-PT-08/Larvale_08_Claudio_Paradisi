
<nav class="navbar navbar-expand-lg bg-primary fixed-top mb-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><span class="text-dark"><i class="fa-solid fa-hippo"></i></span>Blogaravel.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}"><span class="text-dark"><i class="fa-solid fa-house"></i></span>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('create-article')}}"><span class="text-dark"><i class="fa-solid fa-pen"></i></span>Crea un Articolo</a>
        </li>
        
        
        
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li class="nav-item"><a class="nav-link active" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="nav-item"><a class="nav-link active" href="#"><i class="fa-brands fa-github"></i></a></li>
          @if(!auth()->check())
          <li class="nav-item">
          <a class="nav-link active" href="/login"><span class="text-dark"><i class="fa-regular fa-circle-user"></i></span>Accedi</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="/register"><span class="text-dark"><i class="fa-solid fa-circle-user"></i></span>Registrati</a>
          </li>
          @else
          
          <li class="nav-item"><a class="nav-link active" href="{{route('profilo')}}"><span class="text-dark"><i class="fa-solid fa-user"></i></span>il tuo profilo</a></li>
          <li class="nav-item">
            <form class="nav-item" action="/logout" method="post">
              @csrf
              <button class="btn btn-primary" type="submit"><span class="text-dark"><i class="fa-solid fa-door-open"></i></span>logout</button>
            </form>
          </li>
        @endif
        </ul>
      </div>
    </div>
  </div>
</nav>