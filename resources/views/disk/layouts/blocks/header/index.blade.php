<header class="header">
    <a href="#" class="nav-brand">
        <img class="logo" src="{{asset('/img/logo_foot 2.svg')}}" alt="header-logo">
        <i>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="nav-brand-arrow" mask-type="alpha" maskUnits="userSpaceOnUse" x="11" y="9" width="8"
                      height="12">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.41 19.59L13.83 15L18.41 10.41L17 9L11 15L17 21L18.41 19.59Z" fill="white" />
                </mask>
                <g mask="url(#nav-brand-arrow)">
                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                </g>
            </svg>
        </i>
    </a>
    <div class="user-info">
        {{--<span class="user-info__name">{{ Auth::user()->name }}</span>--}}
        <img src="{{asset('/img/avatar.jpg')}}" alt="user-img" class="user-info__img">
        <div class="user-info__dropdown">
                <span role="button" id="user-info__list" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="userprofile-arrow" mask-type="alpha" maskUnits="userSpaceOnUse" x="9" y="11"
                              width="12" height="8">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.41 11L15 15.58L19.59 11L21 12.41L15 18.41L9 12.41L10.41 11Z" fill="white" />
                        </mask>
                        <g mask="url(#userprofile-arrow)">
                            <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                        </g>
                    </svg>
                </span>
            <div class="dropdown-menu" aria-labelledby="user-info__list">
                <a class="dropdown-item" href="#">Профиль</a>
                <a class="dropdown-item" href="#">Настройки</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>