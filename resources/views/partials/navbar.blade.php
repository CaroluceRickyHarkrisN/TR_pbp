<style>
  :root {
    --pr-color: #000000;
  }

  .navbar {
    z-index: 3;
  }

  /* Navbar Color */

  .nav-color {
    background-color: rgb(23, 23, 23);
    transition: all ease-in-out 0.3s;
  }

  .bg-transparent {
    transition: all ease-in 0.3s;
  }

  .navbar-brand {
    font-weight: 500;
  }

  * {
    z-index: 2;
  }

  .nav-link:hover {
    color: #fff;
  }

  .nav-link.active {
    font-weight: 700;
  }

  .button-primary {
    background-color: #1B72FF;
    color: #fff;
    border: none;
    font-size: 16px;
    font-weight: 700;
    width: 100px;
    height: 30px;
    border-radius: 50px;
  }

  .button-primary:hover {
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
  <div class="container">
    </b><a class="navbar-brand" href="/">
      <img src="img/usmanhome/logo.png" alt="" width="30" class="d-inline-block align-text-top">
      Onotodewe</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts') ? 'active' : ''}}" href="/posts">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories') ? 'active' : ''}}" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login">
            <button class="button-primary" href="/login" class="nav-link"><i class=""></i>Login</button></a>
        </li>

        @endauth
      </ul>
    </div>
  </div>
</nav>

<script>
  const navbar = document.getElementsByTagName('nav')[0]
  window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    if (window.scrollY > 1) {
      navbar.classList.replace('bg-transparent', 'nav-color');
    } else if (this.window.scrollY <= 0) {
      navbar.classList.replace('nav-color', 'bg-transparent')
    }
  });
</script>