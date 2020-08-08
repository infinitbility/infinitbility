<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- weball.min.css -->
  <title><?php echo $metaTags['title']; ?></title>
  <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/weball.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- ADS -->
  <script data-ad-client="ca-pub-6106226996374193" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- HTML Meta Tags -->
  <title><?php echo $metaTags['title']; ?></title>
  <meta name="description" content="<?php echo $metaTags['description']; ?>">
  <meta name="keywords" content="<?php echo $metaTags['keywords']; ?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173614282-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173614282-1');
</script>


  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="<?php echo $metaTags['title']; ?>">
  <meta itemprop="description" content="<?php echo $metaTags['description']; ?>">
  <meta itemprop="image" content="<?php echo $metaTags['image']; ?>">
  <meta itemprop="keywords" content="<?php echo $metaTags['keywords']; ?>">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $metaTags['title']; ?>">
  <meta property="og:description" content="<?php echo $metaTags['description']; ?>">
  <meta property="og:image" content="<?php echo $metaTags['image']; ?>">
  <meta property="og:keywords" content="<?php echo $metaTags['keywords']; ?>">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $metaTags['title']; ?>">
  <meta name="twitter:description" content="<?php echo $metaTags['description']; ?>">
  <meta name="twitter:image" content="<?php echo $metaTags['image']; ?>">
  <meta name="twitter:keywords" content="<?php echo $metaTags['keywords']; ?>">


  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/clean-blog.min.css') }}">

</head>
<body>
    <!-- Header -->
    @include('website.layout.header')

    <!-- background -->
    @include('website.layout.background')

    @yield('content', View::make($viewName, $veriables))
    
    <!-- footer -->
    @include('website.layout.footer')
</body>
<!--===============================================================================================-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
 <!-- Custom scripts for this template -->
 <script src="{{ asset('js/clean-blog.min.js') }}"></script>
 </html>