<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ÂMEÉTÉ Paris</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

        <!-- Styles -->

          <link href="{{ asset('storage/front/css/uikit.css') }}" rel="stylesheet">
          <link href="{{ asset('storage/front/css/ameete.css') }}" rel="stylesheet">
          <!-- Scripts -->
         <script src="{{ asset('storage/front/js/uikit.js') }}"></script>
         <script src="{{ asset('storage/front/js/uikit-icons.js') }}"></script>
    </head>
    <body>

      <nav class="uk-navbar-container" uk-navbar>
          <div class="uk-navbar-left">
              <a class="uk-navbar-item uk-logo" href="{{route('home')}}"><img class="header-logo" src="{{asset('storage/front/ameete_logo_black.svg')}}"  alt="ameete"></a>
          </div>
          <div class="uk-navbar-right">
            <div class="uk-navbar-item">
                <button  type="button" uk-toggle="target: #menu"><img class="header-logo" src="{{asset('storage/front/burger.svg')}}"  alt="menu"></a></button>
            </div>
          </div>
      </nav>
      <div id="menu" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
       <button class="uk-offcanvas-close" type="button" uk-close></button>
        <ul class="uk-nav uk-nav-default menuList">
            <li><a href="{{route('collection')}}">COLLECTION</a></li>
            <li><a href="{{route('shops')}}">WHERE TO BUY</a></li>
            <li><a href="{{route('contacts')}}">CONTACTS</a></li>
            <li><a href="{{route('about')}}">ABOUT</a></li>
            <li><a href="{{route('celebrities')}}">CELEBRITIES</a></li>
            <li><a href="https://www.instagram.com/ameeteparis/" target="_blank">FOLLOW US</a></li>

        </ul>

    </div>
</div>
<div id="content">

  @yield('content')


</div>

        <!-- Scripts -->
<div class="main-footer">
  <div uk-grid>
    <div class="uk-width-1-2 border-top-bottom">
        <div class="uk-padding-small uk-text-left">FOLLOW US</div>
    </div>
    <div class="uk-width-1-2 border-top-bottom">
        <div class="uk-padding-small uk-text-right"><a href="https://www.instagram.com/ameeteparis/" target="_blank"><img width="" height="20" alt="ameete instagram" uk-img="data-src:{{asset('storage/front/instagram.svg')}}" uk-svg></a></div>
    </div>



</div>
<div uk-grid>
  <div class="uk-width-1-1 ">
    <div class="uk-padding-small">
        <ul class="uk-list ">
          <li>FAQ</li>
          <li>CONTACT</li>
          <li>CAREERS</li>
          <li>LEGAL STATEMENT</li>
          <li>SITEMAP</li>
          <li>PRIVACY POLICY</li>
          <li>STORE LOCATOR</li>
      </ul>
    </div>
  </div>
</div>
<div uk-grid>
  <div class="uk-width-1-1 ">
    <div class="uk-padding-small">
        copyright © {{date("Y")}}
    </div>
  </div>
</div>
</div>
    </body>
</html>
