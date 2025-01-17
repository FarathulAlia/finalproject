<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <h2 class="text-center">Hi, {{Auth::user()->name}}!</h2>
      <li class="nav-heading mt-5">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('supervisor.index')}}">
          <i class="bi bi-person-badge-fill"></i>
          <span>Supervisor</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('volunteer.index')}}">
          <i class="bi bi-person-badge"></i>
          <span>Volunteer</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('member.index')}}">
          <i class="bi bi-person"></i>
          <span>Member</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('book.index')}}">
          <i class="bi bi-book"></i>
          <span>Books</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('loan.index')}}">
          <i class="bi bi-journal"></i>
          <span>Loan</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>