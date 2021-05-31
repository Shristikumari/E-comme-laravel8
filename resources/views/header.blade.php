<?php 
use App\Http\ControllerS\ProductController;
$total=0;
if(Session::has('user')){
$total=ProductController::cartitem();
}
?>
<!---=============================-------------------------->
<!-- Main Navigation -->
<div class="overlay"></div>

<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
  <div class="container">

    <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
    <i class="fas fa-bars"></i>
                </button>

    <a class="navbar-brand" href="/">
      <h4 class="font-weight-bold">E-comme</h4>
    </a>

    <ul class="navbar-nav ml-auto d-block d-md-none">
    <li class="nav-item">
        <a class="btn btn-link" href="/cartlist" style="color:#8e9775;">
        <i class="fas fa-shopping-cart"></i><span class="">{{$total}}</span></a>
      </li>
    </ul>

    <div class="collapse navbar-collapse">

      <form class="form-inline my-2 my-lg-0 mx-auto" action="/search">
        <input type="text" name="query" class="form-control" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit" style="background-color:#8e9775;"><i class="fas fa-search"></i></button>
      </form>
            <ul class="navbar-nav">
            <li class="nav-item">
        <a class="btn btn-link" href="/cartlist" style="color:#8e9775;">
        <i class="fas fa-shopping-cart"></i><span class="">{{$total}}</span></a>
      </li>

      @if(Session::has('user'))
      <li class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
  data-toggle="dropdown" 
  aria-haspopup="true" aria-expanded="false" style="background-color:#8e9775;color:white;">
  
  {{Session::get('user')['name']}} </button>
  <li class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/logout">Logout</a>
  </li>
  @else
    <a class="dropdown-item" href="/login">Login</a>
    <a class="dropdown-item" href="/register">Register</a>

            @endif

</li>
      </ul>

    </div>

  </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="search-bar d-block d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <form class="form-inline my-2 my-lg-0 mx-auto" action="/search">
        <input type="text" name="query" class="form-control" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit" style="background-color:#8e9775;"><i class="fas fa-search"></i></button>
      </form>
      </div>
    </div>
  </div>
</div>
<!---===sidebar----==========------->
<nav id="sidebar">
  <div class="sidebar-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-10 pl-0">
          <a class="btn btn-primary" href="#"><i class="fas fa-user"></i>Log In</a>
        </div>

        <div class="col-2 text-left">
          <button type="button" id="sidebarCollapseX" class="btn btn-link">
          <i class="fas fa-times-circle"></i>
                                  </button>
        </div>
      </div>
    </div>
  </div>

  <ul class="list-unstyled components links">
    <li class="active">
      <a href="#"><i class="bx bx-home mr-3"></i> Home</a>
    </li>
    <li>
      <a href="#"><i class="bx bx-carousel mr-3"></i> Products</a>
    </li>
    <li>
          <a class="nav-link" href="myorders">Orders</a>
    </li>
  </ul>

  <ul class="social-icons">
    <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook-square"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-linkedin"></i></a></li>
    <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
  </ul>

</nav>


<!-- Main Navigation -->
