<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="/" class="navbar-brand ml-5">
    Pizza Shop
  </a>
  <ul class="navbar-nav ml-auto mr-5">
    @auth

      <li class="nav-item d-flex align-items-center">
        <p class="text-white mr-3 mb-0">Welcome, <strong>{{ Auth::user()->name }}</strong></p>
        <button class="nav-link btn btn-primary" wire:click="logoutUser">Logout</button>
      </li>

    @else
      <li class="nav-item">
        <a href="/login" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
      </li>
      <li class="nav-item">
        <a href="/register" class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
      </li>
    @endauth

  </ul>
</nav>
</div>
