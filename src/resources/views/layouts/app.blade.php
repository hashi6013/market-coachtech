<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/layout/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner w__inner">
            <div class="logo">
                <a class="logo__link" href="/">
                    <img class="logo__link-item" src="{{ asset('img/logo.svg') }}" alt="COACHTECH" decoding="async" width="300" height="25">
                </a>
            </div>
            <form class="header-form" action="/search">
                @csrf
                <input class="header-form__input" type="text" placeholder="なにをお探しですか?" name="keyword" value="{{request('keyword')}}">
                <button class="header-form__submit" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <nav class="nav">
                <ul class="nav__list">
                    @if(Auth::check())
                    <li class="nav__list-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button>ログアウト</button>
                        </form>
                    <li class="nav__list-item"><a class="nav__list-item-link" href="#">マイページ</a></li>
                    @else
                    <li class="nav__list-item"><a class="nav__list-item-link" href="/login">ログイン</a></li>
                    <li class="nav__list-item"><a class="nav__list-item-link" href="/register">会員登録</a></li>
                    @endif
                    <li class="nav__list-item"><a class="nav__list-item-link nav__list-item-link--white" href="#">出品</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
        <script src="https://kit.fontawesome.com/281a1830c2.js" crossorigin="anonymous"></script>
    </main>
</body>
</html>