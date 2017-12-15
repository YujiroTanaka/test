<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- スマホやタブレットで表示した時のメニューボタン -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                ...
            </button>

            <!-- ブランド表示 -->
            <a class="navbar-brand" href="/">My Blog</a>
        </div>

        <!-- メニュー -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <!-- 左寄せメニュー -->
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('articles.index', 'Blog') !!}</li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>

            <!-- 右寄せメニュー -->
            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    {{-- ログインしていない時 --}}

                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                @else
                    {{-- ログインしている時 --}}

                    <!-- ドロップダウンメニュー -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
