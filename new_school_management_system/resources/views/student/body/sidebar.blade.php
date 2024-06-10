<!-- partial:partials/_sidebar.html -->

<nav class="sidebar">

  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      S<span>M</span>S
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
    
  <div class="sidebar-body">
    <ul class="nav">  
      <li class="nav-item">
        <a href="{{route('student.dashboard')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#history" role="button" aria-expanded="false" aria-controls="history">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">History</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="history">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="#" class="nav-link">Administrators</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Teachers</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Students</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Courses</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>