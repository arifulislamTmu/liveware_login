<nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="/">Livewire Login</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex">
            @auth
               <a class="nav-link me-4" >Welecome, {{ Auth::user()->name }}</a>
               <a href="#" class="nav-link me-4" wire:click="userLogout">Logout</a>
               @else
               <a href="/login" class="nav-link me-4">Login</a>
               <a href="/register" class="nav-link">Register</a>
            @endauth

        </form>
      </div>
    </div>
  </nav>
