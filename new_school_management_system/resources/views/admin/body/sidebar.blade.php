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
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">User Accounts</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('admin.account.accountCreate')}}" class="nav-link">Create</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.account.accountUpdate')}}" class="nav-link">Update</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.account.accountDelete')}}" class="nav-link">Delete</a>
              </li>
            </ul>
          </div>
        </li>
      
        <li class="nav-item">
          <a href="{{route('admin.role')}}" class="nav-link">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Roles</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
            <i class="link-icon" data-feather="inbox"></i>
            <span class="link-title">Courses</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="forms">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('admin.course.courseCreate')}}" class="nav-link">Create</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.course.courseUpdate')}}" class="nav-link">Update</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.course.courseDelete')}}" class="nav-link">Delete</a>
              </li>
            </ul>
          </div>
        </li>
      
        <li class="nav-item">
          <a href="{{route('admin.teachers')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Teachers</span>
          </a>
        </li>
    
        <li class="nav-item">
          <a href="{{route('admin.students')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Students</span>
          </a>
        </li>
  
    <!--    <li class="nav-item">
          <a href="{{route('calendar')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>  -->
      </ul>
    </div>
  </nav>