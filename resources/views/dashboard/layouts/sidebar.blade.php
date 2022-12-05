<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
                <span>Log As Administrator</span>
            </h6>
        @endcan
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="command"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="book-open"></span>
            My Books
          </a>
        </li>
      </ul>

      @can('admin')

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
                <span data-feather="grid"></span>
                Book Categories
            </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ Request::is('dashboard/admins*') ? 'active' : ''}}" href="/dashboard/admins">
                <span data-feather="grid"></span>
                User
            </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>
  <form action="/logout" method="post">
    @csrf
    <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out"></span></button>
</form>
