<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Gestion des apprenants  &mdash; @yield('titre')</title>

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/components.css')}}">
<body>
   
<div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div> 
      <!-- begin navbar -->
      @include('layouts._navbar')

      <!-- end navbar -->

      @include('layouts._sidebar')

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Default Layout</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">This is Example Page</h2>
@yield('content')          
             
              
            
          </div>
        </section>
      </div>
    </div>
</div>  

</body>
</html>