<div class="inner-sidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
            <i class="fa fa-home" aria-hidden="true"></i>
            Home
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" aria-current="page">
            <i class="fa fa-home" aria-hidden="true"></i>
            My Posts
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('user.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Profile</a></li>
        </ul>
    </div>
</div>