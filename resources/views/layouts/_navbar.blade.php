<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="../" class="navbar-brand">Crud Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">@lang('Users')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.index') }}">@lang('Pages')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nomes.index') }}">@lang('Nomes')</a>
                </li>
            </ul>
        </div>
    </div>
</div>
