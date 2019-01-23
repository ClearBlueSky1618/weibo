<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel新手入门教程</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
  </head>
  <body>

    <!--导航栏模板-->
    @include('layouts._header')


    <!--内容模板-->
    <div class="container">
      <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

  </body>
</html>
