<nav id="navbar-main" class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggle" id="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}"><img class="logo-image"
                src="{{ asset('common/images/logo.png') }}" alt="{{ __('common.lbl_default_alt') }}" loading="lazy"></a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarToggleSP">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('common.lbl_home_nav') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('common.lbl_about_nav') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}">{{ __('common.lbl_post_nav') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">{{ __('common.lbl_contact_nav') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('common.lbl_tools_nav') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('vdtt') }}">{{ __('common.lbl_vdtt_nav') }}</a>
                        <a class="dropdown-item" href="{{ route('convert_image') }}">{{ __('common.lbl_convert_image_to_webp_nav') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
