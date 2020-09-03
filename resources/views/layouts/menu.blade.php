<li class="nav-item {{ Request::is('currencies*') ? ' active' : '' }}">
    <a href="{{ route('currencies.index') }}" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
            Currencies
        </p>
    </a>
</li>

<li class="nav-item {{ Request::is('teachers*') ? ' active' : '' }}">
    <a href="{{ route('teachers.index') }}" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
            Teachers
        </p>
    </a>
</li>



