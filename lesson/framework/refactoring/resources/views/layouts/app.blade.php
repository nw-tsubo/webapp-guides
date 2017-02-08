<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  
  @section('style')
    <!-- ここにページ固有のスタイルを記述可能 -->
  @show
</head>
<body>
  <div class="container">
      @yield('content')
  </div>
</body>
</html>