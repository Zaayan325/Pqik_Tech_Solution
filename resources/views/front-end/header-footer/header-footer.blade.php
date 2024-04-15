<!DOCTYPE html>
<html lang="en">
<head>
  <title>PQIK.TECH</title>
  @stack('meta')
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/work.css')}}">
  <link rel="icon" href="{{ asset('assets/img/light2.png')}}" width="250px" Height="250px" type="image/x-icon">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MEFJK04H69"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MEFJK04H69');
</script>
<body>
<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="/">
    <img src="assets/img/logo2.png" alt="PQIK.TECH">
    <p>PQIK.TECH</p>
  </a>
  <p class="device-notification--message">PQIK.TECH has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed. Website is under construction </p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="/">
            <img src="assets/img/logo2.png" alt="PQIK.TECH">
            <p>PQIK TECH SOLUTION </p>
          </a>
          <button class="header--cta cta">Hire Us</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span>Developers</span></li>
            <li><span>About</span></li>
            <li><span>Contact</span></li>
            <li><span>Our Prices</span></li>
            <li><span>Hire us</span></li>            
          </ul>
        </nav>
@yield('body')
<ul class="outer-nav">
    <li class="is-active">Home</li>
    <li>Developers</li>
    <li>About</li>
    <li>Contact</li>
    <li>Our Prices</li>
    <li>Hire us</li>    
  </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>
