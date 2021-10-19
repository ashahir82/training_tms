<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ (request()->segment(1) == 'student') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->segment(1) == 'student') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.index') }}" class="nav-link {{ (request()->route()->named('student.index')) ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.create') }}" class="nav-link {{ (request()->route()->named('student.create')) ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'course') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->segment(1) == 'course') ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Course
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('course.index') }}" class="nav-link {{ (request()->route()->named('course.index')) ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('course.create') }}" class="nav-link {{ (request()->route()->named('course.create')) ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
