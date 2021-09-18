<nav class="nav nav-pills">
    <a class="nav-item cursor-pointer nav-link d-flex flex-row align-items-center mr-4 py-1 px-2 {{ Request::routeIs('users.show') ? 'active' : '' }}" href="{{route('users.show',$user['username'])}}">
        <label class="mb-0 cursor-pointer font-size-14">
            Academy
        </label>
        <label class="badge mb-0 cursor-pointer">
            6
        </label>
    </a>
    <a class="nav-item cursor-pointer nav-link d-flex flex-row align-items-center mr-4 py-1 px-2 {{ Request::routeIs('users.event') ? 'active' : '' }}" href="{{route('users.event',$user['username'])}}">
        <label class="mb-0 cursor-pointer font-size-14">
            Event
        </label>
        <label class="badge mb-0 cursor-pointer">
            2
        </label></a>
    <a class="nav-item cursor-pointer nav-link d-flex flex-row align-items-center mr-4 py-1 px-2 {{ Request::routeIs('users.challenge') ? 'active' : '' }}" href="{{route('users.challenge',$user['username'])}}">
        <label class="mb-0 cursor-pointer font-size-14">
            Challenge
        </label>
        <label class="badge mb-0 cursor-pointer">
            1
        </label>
    </a>
    <a class="nav-item cursor-pointer nav-link d-flex flex-row align-items-center mr-4 py-1 px-2" href="#">
        <label class="mb-0 cursor-pointer font-size-14">
            Academy
        </label>
    </a>
</nav>