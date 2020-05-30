{{-- 画面上部に表示するナビゲーションバーです。 --}}
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

      <!--php 12テキスト-->
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">

      {{-- 以下を追記 --}}
      <!-- Authentication Links -->
      {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
      @guest
          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
      {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <a class="dropdown-item" href="{{ url('admin/news/create') }}?id={{Auth::id()}}">{{ __('新規投稿') }}</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          @endguest
          {{-- 以上までを追記 --}}
      </ul>
      <!--php12ここまで-->
            </ul>
          </div>
        </div>
      </nav>
      {{-- ここまでナビゲーションバー --}}