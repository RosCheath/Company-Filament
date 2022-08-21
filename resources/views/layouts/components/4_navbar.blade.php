<!-- Navbar Start -->
<nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
>
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <i class="fa fa-building text-primary me-3"></i>APEX
        </h1>
    </a>
    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link
            {{ (request()->is('/')) ? 'active' : '' }}">
                {{ __('Home') }}</a>
            <a href="{{url('about/us')}}" class="nav-item nav-link
            {{ (request()->is('about/us')) ? 'active' : '' }}">
                {{__('About Us')}}</a>
            <a href="{{url('our/services')}}" class="nav-item nav-link
            {{ (request()->is('our/services')) ? 'active' : '' }}">
                {{__('Our Services')}}</a>
            <a href="{{url('new/feed')}}" class="nav-item nav-link
            {{ (request()->is('new/feed')) ? 'active' : '' }}">
                {{__('New Feed')}}</a>
            <a href="{{url('contact/us')}}" class="nav-item nav-link
            {{ (request()->is('contact/us')) ? 'active' : '' }}">
                {{__('Contact Us')}}</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
