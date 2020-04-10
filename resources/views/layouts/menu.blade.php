<li class="nav-item {{ Request::is('profiles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('profiles.index') }}">
        <i class="fa fa-user"></i>
        <span>Profiles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('workExperiences*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('workExperiences.create') }}">
        <i class="fa fa-bank"></i>
        <span>Work Experiences</span>
    </a>
</li>
<li class="nav-item {{ Request::is('education*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('education.create') }}">
        <i class="fa fa-building"></i>
        <span>Education</span>
    </a>
</li>
