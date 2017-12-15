<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  @include('navbar')
  <div class="container">
    {{-- フラッシュメッセージの表示 --}}
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
        @if (Session::has('flash_message_store'))
            <div class="alert alert-success">{{ Session::get('flash_message_store') }}</div>
        @endif
        @if (Session::has('flash_message_update'))
            <div class="alert alert-success">{{ Session::get('flash_message_update') }}</div>
        @endif
    @yield('content')
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
