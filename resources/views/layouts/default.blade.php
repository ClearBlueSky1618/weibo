<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel新手入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <!--导航栏模板-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
          <li class="nav-item"><a class="nav-link" href="#">登陆</a></li>
        </ul>
      </div>
    </nav>


    <!--内容模板-->
    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
