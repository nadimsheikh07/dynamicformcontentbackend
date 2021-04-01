<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">{{ __('text.appTitle') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">{{ __('text.rentForm') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/education_gap_form">{{ __('text.educationGapForm') }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('text.changeLang') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/locale/en">{{ __('text.en') }}</a>
                    <a class="dropdown-item" href="/locale/hi">{{ __('text.hi') }}</a>
                </div>
            </li>
        </ul>
    </div>
</nav>