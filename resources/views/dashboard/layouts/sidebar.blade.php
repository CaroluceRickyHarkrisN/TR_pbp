<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="command"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="book-open"></span>
            My Books
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
                <span data-feather="grid"></span>
                Book Categories
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/adminposts*') ? 'active' : ''}}" href="/dashboard/adminposts">
                <span data-feather="grid"></span>
                Admin Posts
            </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>
