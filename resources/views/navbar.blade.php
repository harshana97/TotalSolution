<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Solutions</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

     <!--header area start-->
  <header>
    <div class="left_area">
      <h3>Total <span>Solutions</span></h3>
    </div>
   
  </header>
    <!--sidebar start-->
    <div class="sidebar">
      
      <a href="#"><i class="fas fa-th"></i><span>Dashboard</span></a>
      <a href="{{url('tab1')}}"><span>Inquiry</span></a>
      <a href="{{url('tender')}}"><span>Tender</span></a>
     
      <a href="#"><span>Final Quotations</span></a>
      <a href="#"><span>Estimation</span></a>
      <a href="#"><span>Purchase Order</span></a>
      <a href="#"><span>Invoice</span></a>
      <a href="#"><span>Credit Demo</span></a>
      <a href="#"><span>Stock Management</span></a>
      <a href="#"><span>Credit Management</span></a>
      <a href="#"><span>Reports</span></a>
    </div>
    <!--sidebar end-->


    {{-- <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script> --}}

  </body>
</html>
                           
                           



{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Solutions</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>

<body>
   <!--header area start-->
   <header>
    <div class="left_area">
      <h3>Total <span>Solutions</span></h3>
    </div>
   
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    
    <a href="#"><i class="fas fa-th"></i><span>Dashboard</span></a>
    <a href="{{url('tab1')}}"><span>Inquiry</span></a>
    <a href="{{url('tender')}}"><span>Tender</span></a>
   
    <a href="#"><span>Final Quotations</span></a>
    <a href="#"><span>Estimation</span></a>
    <a href="#"><span>Purchase Order</span></a>
    <a href="#"><span>grn/gdn</span></a>
    <a href="#"><span>Invoice</span></a>
    <a href="#"><span>Credit Demo</span></a>
    <a href="#"><span>Stock Management</span></a>
    <a href="#"><span>Credit Management</span></a>
    <a href="#"><span>Reports</span></a>
  </div>

  

  
</body>
</html> --}}

{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Total Solution</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('tab1')}}">Inquiry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('tender')}}">Tender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Final Quotations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estimation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Purchase Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Invoice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Credit Demo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Stock Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Credit Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reports</a>
        </li>
      </ul>
    </div>
  </nav> --}}

  {{-- <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div> --}}

{{-- <div class="sidebar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('tab1')}}">Inquiry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('tender')}}">Tender</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Final Quotations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estimation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Purchase Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Invoice</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Credit Demo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Stock Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Credit Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reports</a>
      </li>
    </ul>
  </div> --}}



{{-- <div class="sidebar">
      
      <a href="{{url('/')}}"><i class="fas fa-th"></i><span>Dashboard</span></a>
      <a href="{{url('tab1')}}"><span>Inquiry</span></a>
      <a href="{{url('tender')}}"><span>Tender</span></a>
      
      <a href="#"><span>Final Quotations</span></a>
      <a href="#"><span>Estimation</span></a>
      <a href="#"><span>Purchase Order</span></a>
      <a href="#"><span>grn/gdn</span></a>
      <a href="#"><span>Invoice</span></a>
      <a href="#"><span>Credit Demo</span></a>
      <a href="#"><span>Stock Management</span></a>
      <a href="#"><span>Credit Management</span></a>
      <a href="#"><span>Reports</span></a>
    </div> --}}