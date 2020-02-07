<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
        </div>
    </div>
    <ul class="app-menu">
        @if(auth()->user()->role == 'student')
        <li><a class="app-menu__item active" href="{{ route('profileUpdate') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Update Profile</span></a></li>
        @elseif(auth()->user()->role == 'admin')
        <li><a class="app-menu__item active" href="{{ route('addSubject') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add  Subject</span></a></li>
        <li><a class="app-menu__item active" href="{{ route('time') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add  Class Time</span></a></li>
        <li><a class="app-menu__item active" href=" {{ route('schedule') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Create Routine</span></a></li>

      @endif


    </ul>
</aside>
