<ul class="sidebar navbar-nav">
    <li class="nav-item @if($page_active == 'home') active @endif">
       <a class="nav-link" href="{{url('/')}}/apps/home">
       <i class="fas fa-fw fa-home"></i>
       <span>Home</span>
       </a>
    </li>

    <li class="nav-item @if($page_active == 'courses') active @endif">
      <a class="nav-link" href="{{url('/')}}/apps/allCourses">
      <i class="fas fa-fw fa-graduation-cap"></i>
      <span>All Courses</span>
      </a>
   </li>
    <li class="nav-item @if($page_active == 'courses') active @endif">
       <a class="nav-link" href="{{url('/')}}/apps/my-course">
       <i class="fas fa-fw fa-users"></i>
       <span>My Courses</span>
       </a>
    </li>
    
   <?php   $Courses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->limit(1)->get(); ?>
   @if($Courses->isEmpty())
   <li class="nav-item @if($page_active == 'courses') active @endif">
      <a class="nav-link" href="{{url('/')}}/apps/my-course">
      <i class="fas fa-fw fa-video"></i>
      <span> Course Videos </span>
      </a>
   </li>
   @else
    <li class="nav-item @if($page_active == 'courses') active @endif">
       <a class="nav-link" href="{{url('/')}}/apps/course-videos">
       <i class="fas fa-fw fa-video"></i>
       <span> Course Videos </span>
       </a>
    </li>
   @endif
    {{-- <li class="nav-item @if($page_active == 'player') active @endif">
      <a class="nav-link" href="{{url('/')}}/apps/video-player">
      <i class="fas fa-fw fa-video"></i>
      <span> Video Player </span>
      </a>
   </li> --}}
    <li class="nav-item @if($page_active == 'bonus') active @endif">
       <a class="nav-link" href="{{url('/')}}/apps/bonus-videos">
       <i class="fas fa-fw fa-video"></i>
       <span>Bonus Videos</span>
       </a>
    </li>

    <li class="nav-item @if($page_active == 'admin') active @endif">
        <a class="nav-link" href="{{url('/')}}/apps/contact-admin">
        <i class="fas fa-fw fa-comment"></i>
        <span>Contact Admin</span>
        </a>
     </li>

    <li class="nav-item @if($page_active == 'profile') active @endif">
        <a class="nav-link" href="{{url('/')}}/apps/settings">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>My Profile </span>
        </a>
     </li>

     <li class="nav-item @if($page_active == 'security') active @endif">
        <a class="nav-link" href="{{url('/')}}/apps/security-settings">
        <i class="fas fa-fw fa-lock"></i>
        <span>Security Settings </span>
        </a>
     </li>

    {{-- <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fas fa-fw fa-list-alt"></i>
       <span>Q&As</span>
       </a>
       
    </li> --}}
    <li class="nav-item channel-sidebar-list">
       <h6>Extras</h6>
       <ul>
          <li>
             <a href="{{url('/')}}">
             <img class="img-fluid" alt="" src="{{asset('userdashboard/img/s2.png')}}"> Main Website 
             </a>
          </li>
          <li>
             <a title="Change Profile Picture" href="{{url('/')}}/apps/uploads">
             <img class="img-fluid" alt="" src="{{url('/')}}/uploads/users/{{Auth::user()->image}}"> Profile Picture <span class="badge badge-success"><i class="fas fa-fw fa-cloud-upload-alt"></i></span>
             </a>
          </li>
          <li>
             <a target="blank" href="{{url('/')}}/forex-signals">
             <img class="img-fluid" alt="" src="{{url('/')}}/uploads/banners/forex-signal-foreign-exchange-market-png-512x512px-forex-signal-forex-signal-png-800_800.jpg"> Signals
             </a>
          </li>
       </ul>
    </li>
 </ul>