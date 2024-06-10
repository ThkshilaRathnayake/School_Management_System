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
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.accountList') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">User Accounts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
                    <i class="link-icon" data-feather="layout"></i>
                    <span class="link-title">Assign Roles</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.addTeachersForCourse') }}" class="nav-link">Add Teachers For Course</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.addStudentsForCourse') }}" class="nav-link">Add Students For Course</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.addCoursesForTeacher') }}" class="nav-link">Add Courses For Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.addCoursesForStudent') }}" class="nav-link">Add Courses For Student</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.courseList') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Courses</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.adminList') }}" class="nav-link {{ request()->routeIs('admin.adminList') || request()->routeIs('admin.adminProfile') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Administrators</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.teacherList') }}" class="nav-link {{ request()->routeIs('admin.teacherList') || request()->routeIs('admin.teacherProfile') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Teachers</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.studentList') }}" class="nav-link {{ request()->routeIs('admin.studentList') || request()->routeIs('admin.studentProfile') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
                    <i class="link-icon" data-feather="cloud-off"></i>
                    <span class="link-title">History</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="errorPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.deletedAdmin') }}" class="nav-link">Administrators</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.deletedTeacher') }}" class="nav-link">Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.deletedStudent') }}" class="nav-link">Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.deletedCourse') }}" class="nav-link">Courses</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
