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
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Courses</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>