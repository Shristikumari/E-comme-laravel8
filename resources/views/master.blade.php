
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- <link rel="stylesheet" href="css/app.css">

  <script src="{{ asset('resource/js/app.js') }}" defer></script> -->
   <title>E-commerce</title>

{{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</head>
<body>
  <style>
    .footer_section{
  background-color:#8e9775;
margin-top:8%;
color:white;
}
.panel-default{
    margin-top:25%;
}
.slider_img{
    height:400px !important;
    max-height:100%;
}
.trending_img{
    height:100px !important;
    max-height:100%;
text-align:center;  

}
.trending_item{
    float:left;
    width:20% !important;
    margin:2%; 
    
}
.trending_product{
  width:100% !important;
  border-radius:10%;
}
.search_item{
    width:20% !important;
    margin:2%; 
    
}
.carousel-caption{
    background-color:#8e9775;
    align:center;
}
.jumbotron{
  background-color:#8e9775 !important;
  margin:10px 10px 10px 20px;

}
.lead{
  color:white;
  font-size:26px;
  text-align:center;
}
.lead1{
  color:white;
  font-size:16px;
  text-align:center;
}

.home_card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 23px;
    margin-top: 50px
}

.detail-img{
    height:100px !important;
}
.search_img{
    height:100px !important;
}
/* .btn .bx {
  vertical-align: inherit;
  margin-top: -3px;
  font-size: 1.15rem;
} */

.form-control {
  height: calc(2.5rem + 2px);
  padding: 0.5rem 1.5rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

/* .btn {
  font-size: 1rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
} */

.bx.icon-single {
  font-size: 1.5rem;
}

.form-inline .form-control {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

/* .form-inline .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
} */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .form-inline .form-control {
    width: 210px;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .form-inline .form-control {
    width: 440px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .form-inline .form-control {
    width: 600px;
  }
}

.sub-menu.navbar-light .navbar-nav .active > .nav-link,
.sub-menu.navbar-light .navbar-nav .nav-link.active,
.sub-menu.navbar-light .navbar-nav .nav-link.show,
.sub-menu.navbar-light .navbar-nav .show > .nav-link {
  border-bottom: 3px solid #8e9775;
  color: #8e9775;
}

.navbar .navbar-toggler {
  border: none;
}

.navbar-light .navbar-toggler:focus {
  outline: none;
}

.navbar {
  padding: 1rem;
}

.main-menu {
  position: relative;
  z-index: 3;
}

.sub-menu {
  position: relative;
  z-index: 2;
  padding: 0 1rem;
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .sub-menu {
    padding: 0 1rem;
  }

  .sub-menu.navbar-expand-md .navbar-nav .nav-link {
    padding: 1rem 1.5rem;
  }
}

.navbar.bg-light {
  background: #fff !important;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.user-dropdown .nav-link {
  padding: 0.15rem 0;
}

#sidebar {
  background: #fff;
  height: 100%;
  left: -100%;
  top: 0;
  bottom: 0;
  overflow: auto;
  position: fixed;
  transition: 0.4s ease-in-out;
  width: 84%;
  z-index: 5001;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  padding: 1.25rem 1rem 1rem;
}

#sidebar.active {
  left: 0;
}

#sidebar .sidebar-header {
  background: #fff;
  border-bottom: 1px solid #e4e4e4;
  padding-bottom: 1.5rem;
}

#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #e4e4e4;
  margin-bottom: 40px;
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px 16px;
  font-size: 1.1em;
  display: block;
  color: #000;
}

#sidebar ul li a:hover {
  color: #7386d5;
  background: #fff;
}

#sidebar ul li.active > a,
#sidebar a[aria-expanded="true"] {
  color: #007bff;
  background: #e6f2ff;
  border-radius: 6px;
}

a[data-toggle="collapse"] {
  position: relative;
}

#sidebar .links .dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
}

section {
  padding: 6rem;
  background: #e4e4e4;
  margin-bottom: 30px;
  position: relative;
  z-index: 1;
}

.overlay {
  background: rgba(0, 0, 0, 0.7);
  height: 100vh;
  left: 0;
  position: fixed;
  top: 0;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  z-index: -1;
  width: 100%;
  opacity: 0;
}

.overlay.visible {
  opacity: 1;
  z-index: 5000;
}

/* .mobiHeader .menuActive~.overlay {
    opacity: 1;
    width: 100%;
} */

ul.social-icons {
  list-style-type: none;
  padding-left: 0;
  margin-bottom: 0;
}

ul.social-icons li {
  display: inline-block;
  margin-right: 0px;
  margin-bottom: 0;
}

#sidebar ul.social-icons li a {
  font-size: 24px;
}

.utility-nav {
  background: #e4e4e4;
  padding: 0.5rem 1rem;
}

.utility-nav p {
  margin-bottom: 0;
}

.search-bar {
  position: relative;
  z-index: 2;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.search-bar .form-control {
  width: calc(100% - 45px);
}

.avatar {
  border-radius: 50%;
  width: 4.5rem;
  height: 4.5rem;
  margin-right: 8px;
}

.avatar.avatar-xs {
  width: 2.25rem;
  height: 2.25rem;
}

.user-dropdown .dropdown-menu {
  left: auto;
  right: 0;
}

    body {
    background: #E0E0E0
}

.details {
    border: 1.5px solid grey;
    color: #212121;
    width: 100%;
    height: auto;
    box-shadow: 0px 0px 10px #212121
}

.cart {
    background-color: #212121;
    color: white;
    margin-top: 10px;
    font-size: 12px;
    font-weight: 900;
    width: 100%;
    height: 39px;
    padding-top: 9px;
    box-shadow: 0px 5px 10px #212121
}

.card_details {
    width: fit-content
}

.card-body {
    width: fit-content
}

/* .btn {
    border-radius: 0
} */

.img-thumbnail {
    border: none
}

.card_details {
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    border-radius: 5px;
    padding-bottom: 10px
}
/*8cart*/
body {
    background: #eee
}

.ratings i {
    font-size: 16px;
    color: red
}

.strike-text {
    color: red;
    text-decoration: line-through
}

.product-image {
    width: 100%
}

.dot {
    height: 7px;
    width: 7px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 3px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block
}

.spec-1 {
    color: #938787;
    font-size: 15px
}

h5 {
    font-weight: 400
}

.para {
    font-size: 16px
}
/*order*/
body {
    background-color: #EEEEEE
}

a {
    text-decoration: none !important
}

.card-product-list,
.card-product-grid {
    margin-bottom: 0
}

.card_details {
    width: 500px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 23px;
    margin-top: 50px
}

.card-product-grid:hover {
    -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
    box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
    -webkit-transition: .3s;
    transition: .3s
}

.card-product-grid .img-wrap {
    border-radius: 0.2rem 0.2rem 0 0;
    height: 220px
}

.card_details .img-wrap {
    overflow: hidden
}

.card-lg .img-wrap {
    height: 280px
}

.card-product-grid .img-wrap {
    border-radius: 0.2rem 0.2rem 0 0;
    height: 275px;
    padding: 16px
}

[class*='card-product'] .img-wrap img {
    height: 100%;
    max-width: 100%;
    width: auto;
    display: inline-block;
    -o-object-fit: cover;
    object-fit: cover
}

.img-wrap {
    text-align: center;
    display: block
}

.card-product-grid .info-wrap {
    overflow: hidden;
    padding: 18px 20px
}

[class*='card-product'] a.title {
    color: #212529;
    display: block
}

.rating-stars {
    display: inline-block;
    vertical-align: middle;
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    white-space: nowrap;
    clear: both
}

.rating-stars li.stars-active {
    z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

.rating-stars li {
    display: block;
    text-overflow: clip;
    white-space: nowrap;
    z-index: 1
}

.card-product-grid .bottom-wrap {
    padding: 18px;
    border-top: 1px solid #e4e4e4
}

.bottom-wrap-payment {
    padding: 0px;
    border-top: 1px solid #e4e4e4
}

.rated {
    font-size: 10px;
    color: #b3b4b6
}

/* .btn {
    display: inline-block;
    font-weight: 600;
    color: #343a40;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.45rem 0.85rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.2rem
}

.btn-primary {
    color: #fff;
    background-color: #3167eb;
    border-color: #3167eb
}

.fa {
    color: #FF5722
} */
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #eff6fa;
    color: #000000
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bbb_viewed {
    padding-top: 51px;
    padding-bottom: 60px;
    background: #eff6fa
}

.bbb_main_container {
    background-color: #fff;
    padding: 11px
}

.bbb_viewed_title_container {
    border-bottom: solid 1px #dadada
}

.bbb_viewed_title {
    margin-bottom: 16px;
    margin-top: 8px
}

.bbb_viewed_nav_container {
    position: absolute;
    right: -5px;
    bottom: 14px
}

.bbb_viewed_nav {
    display: inline-block;
    cursor: pointer
}

.bbb_viewed_nav i {
    color: #dadada;
    font-size: 18px;
    padding: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.bbb_viewed_nav:hover i {
    color: #606264
}

.bbb_viewed_prev {
    margin-right: 15px
}

.bbb_viewed_slider_container {
    padding-top: 13px
}

.bbb_viewed_item {
    width: 100%;
    background: #FFFFFF;
    border-radius: 2px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-left: 30px;
    padding-right: 30px
}

.bbb_viewed_image {
    width: 150px;
    height: 150px
}

.bbb_viewed_image img {
    display: block;
    max-width: 100%
}

.bbb_viewed_content {
    width: 100%;
    margin-top: 25px
}

.bbb_viewed_price {
    font-size: 16px;
    color: #000000;
    font-weight: 500
}

.bbb_viewed_item.discount .bbb_viewed_price {
    color: #df3b3b
}

.bbb_viewed_price span {
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.6);
    margin-left: 8px
}

.bbb_viewed_price span::after {
    display: block;
    position: absolute;
    top: 6px;
    left: -2px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    content: ''
}

.bbb_viewed_name {
    margin-top: 3px
}

.bbb_viewed_name a {
    font-size: 14px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.bbb_viewed_name a:hover {
    color: #0e8ce4
}

.item_marks {
    position: absolute;
    top: 18px;
    left: 18px
}

.item_mark {
    display: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 36px;
    text-align: center
}

.item_discount {
    background: #df3b3b;
    margin-right: 5px
}

.item_new {
    background: #0e8ce4
}

.bbb_viewed_item.discount .item_discount {
    display: inline-block
}

.bbb_viewed_item.is_new .item_new {
    display: inline-block
}
/**********************myorder********************************** */

.small {
    letter-spacing: 0.5px !important
}

.card-1 {
    box-shadow: 2px 2px 10px 0px #8e9775;
}

hr {
    background-color: rgba(248, 248, 248, 0.667)
}

.bold {
    font-weight: 500
}

.change-color {
    color:  !important
}

.card-2 {
    box-shadow: 1px 1px 3px 0px rgb(112, 115, 139)
}

.fa-circle.active {
    font-size: 8px;
    color: #8e9775
}

.fa-circle {
    font-size: 8px;
    color: #aaa
}

.rounded {
    border-radius: 2.25rem !important
}

.progress-bar {
    background-color: #8e9775 !important
}

.progress {
    height: 5px !important;
    margin-bottom: 0
}

.invoice {
    position: relative;
    top: -70px
}

.Glasses {
    position: relative;
    top: -12px !important
}

.card-footer {
    background-color: #AB47BC;
    color: #fff
}

h2 {
    color: rgb(78, 0, 92);
    letter-spacing: 2px !important
}

.display-3 {
    font-weight: 500 !important
}

@media (max-width: 479px) {
    .invoice {
        position: relative;
        top: 7px
    }

    .border-line {
        border-right: 0px solid rgb(226, 206, 226) !important
    }
}

@media (max-width: 700px) {
    h2 {
        color: rgb(78, 0, 92);
        font-size: 17px
    }

    .display-3 {
        font-size: 28px;
        font-weight: 500 !important
    }
}

.card-footer small {
    letter-spacing: 7px !important;
    font-size: 12px
}

.border-line {
    border-right: 1px solid rgb(226, 206, 226)
}
  </style>
  <script>
$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}


});
  </script>
</body>
</html>