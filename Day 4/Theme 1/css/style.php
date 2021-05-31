<style>/*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/
/*--------------------------------------------------------------------- import Fonts ---------------------------------------------------------------------*/
 @import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
 @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
/*****---------------------------------------- 1) font-family: 'Rajdhani', sans-serif;
 2) font-family: 'Poppins', sans-serif;
 ----------------------------------------*****/
/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/
 @import url(animate.min.css);
 @import url(normalize.css);
 @import url(font-awesome.min.css);
 @import url(meanmenu.css);
 @import url(owl.carousel.min.css);
 @import url(slick.css);
 @import url(jquery.fancybox.min.css);
 @import url(jquery-ui.css);
 @import url(nice-select.css);
/*--------------------------------------------------------------------- skeleton ---------------------------------------------------------------------*/
 * {
     box-sizing: border-box !important;
}
::placeholder {
   opacity: 1 !important;
}
html {
  scroll-behavior: smooth;
}
a:hover {
    color: #12c6f4;
    text-decoration: underline;
}
 body {
     color: #666666;
     font-size: 14px;
     font-family: 'poppins', sans-serif;
     line-height: 1.80857;
     font-weight: normal;
     overflow-x: hidden;
}
 a {
     color: #1f1f1f;
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}
 h1, h2, h3, h4, h5, h6 {
     letter-spacing: 0;
     font-weight: normal;
     position: relative;
     padding: 0 0 10px 0;
     font-weight: normal;
     line-height: normal;
     color: #111111;
     margin: 0 
}
 h1 {
     font-size: 24px 
}
 h2 {
     font-size: 22px 
}
h3 {
    font-size: 25px;
    margin: 25px 0 0 0;
    padding: 0;
    line-height: 25px;
}
h3 strong {
    font-weight: 300;
    font-size: 18px;
}
 h4 {
     font-size: 16px 
}
h5 {
    font-size: 15px;
    position: relative;
    z-index: 1;
    padding-bottom: 5px;
}
 h6 {
     font-size: 13px 
}
 *, *::after, *::before {
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
}
 h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
     color: #212121;
     text-decoration: none!important;
     opacity: 1 
}
 button:focus {
     outline: none;
}
 ul, li, ol {
     margin: 0px;
     padding: 0px;
     list-style: none;
}
p {
    margin: 0px;
    font-weight: 300;
    font-size: 17px;
    line-height: 28px;
    color: #333;
}
 a {
     color: #222222;
     text-decoration: none;
     outline: none !important;
}
 a, .btn {
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}
.img-responsive {
     max-width: 100%;
     height: auto;
}
 :focus {
     outline: 0;
}
 .btn-custom {
     margin-top: 20px;
     background-color: transparent !important;
     border: 2px solid #ddd;
     padding: 12px 40px;
     font-size: 16px;
}
 .lead {
     font-size: 18px;
     line-height: 30px;
     color: #767676;
     margin: 0;
     padding: 0;
}
 .form-control:focus {
     border-color: #ffffff !important;
     box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}
 .navbar-form input {
     border: none !important;
}
 .badge {
     font-weight: 500;
}
 blockquote {
     margin: 20px 0 20px;
     padding: 30px;
}
 button {
     border: 0;
     margin: 0;
     padding: 0;
     cursor: pointer;
}
 .full {
     float: left;
     width: 100%;
}
 .layout_padding {
     padding-top: 90px;
     padding-bottom: 90px;
}
 .layout_padding_2 {
     padding-top: 75px;
     padding-bottom: 75px;
}
 .light_silver {
     background: #f9f9f9;
}
 .theme_bg {
     background: #38c8a8;
}
 .margin_top_30 {
     margin-top: 30px !important;
}
.margin_top_25 {
     margin-top: 25px !important;
}
.margin_top_20 {
     margin-top: 20px !important;
}
.dark_bg {
     background: #282e40;
}
 .full {
     width: 100%;
     float: left;
     margin: 0;
     padding: 0;
}

.white_font {
     color: #fff !important;
}

/**-- heading section --**/
 .main_heading {
     text-align: center;
     display: flex;
     justify-content: center;
     position: relative;
     margin-bottom: 50px;
}
 .main_heading h2 {
     padding: 0;
     font-size: 48px;
     line-height: 60px;
     font-weight: 400;
     position: relative;
     letter-spacing: -0.5px;
     color: #282e40;
     border-left: solid #38c8a8 10px;
     padding-left: 15px;
}
 .main_heading h2 strong {
     background: #38c8a8;
     color: #fff;
     font-weight: 600;
     padding: 0 15px;
     line-height: 68px;
}
 .white_heading_main h2 {
     color: #fff;
}
 .small_main_heading {
     margin-top: 25px;
     float: left;
     width: 100%;
     border-bottom: solid rgba(0, 0, 0, 0.07) 1px;
     margin-bottom: 25px;
}
 .small_main_heading h2 {
     padding: 2px 0 20px 0;
     color: #282e40;
     font-weight: 400;
     font-size: 28px;
     background-image: url('../images/fevicon.png');
     background-repeat: no-repeat;
     padding-left: 55px;
     letter-spacing: -0.5px;
}
 .small_main_heading h2 strong {
     color: #38c8a8;
     font-weight: 600;
}
.main_bt {
    background: #282e40;
    color: #fff;
    padding: 0;
    float: left;
    font-size: 20px;
    font-weight: 300;
    border-radius: 0;
    margin-right: 0;
    width: 220px;
    height: 65px;
    text-align: center;
    line-height: 65px;
}
 a.readmore_bt {
     color: #fff;
     font-weight: 300;
     text-decoration: underline !important;
}
 .main_bt:hover, .main_bt:focus {
     background: #5293b7;
     color: #fff;
}
.button_section {
    padding-top: 185px;
    float: left;
}
/**-- list icon --**/
 .ul_list_info_icon ul {
     list-style: none;
}
 .ul_list_info_icon ul li {
     display: inline;
     float: left;
     width: 100%;
}
 .ul_list_info_icon ul li img {
     width: 75px;
}
/*---------------------------- preloader area ----------------------------*/
 .loader_bg {
     position: fixed;
     z-index: 9999999;
     background: #fff;
     width: 100%;
     height: 100%;
}
 .loader {
     height: 100%;
     width: 100%;
     position: absolute;
     left: 0;
     top: 0;
     display: flex;
     justify-content: center;
     align-items: center;
}
 .loader img {
     width: 280px;
}
/*---------------------------- scroll to top area ----------------------------*/
 .scrollup {
     float: right;
     position: absolute;
     color: #fff;
     right: 20px;
     padding: 0px 5px;
     text-transform: uppercase;
     font-weight: 600;
     background: #38c8a8;
     position: fixed;
     bottom: 20px;
     z-index: 99;
     text-align: center;
     color: #fff;
     cursor: pointer;
     border-radius: 0px;
     opacity: 0;
     backface-visibility: hidden;
     -webkit-backface-visibility: hidden;
     transform: scale(1);
     -moz-transform: scale(1);
     -o-transform: scale(1);
     -webkit-transform: scale(1);
     transition: .2s all ease;
     -moz-transition: .2s all ease;
     -o-transition: .2s all ease;
     -webkit-transition: .2s all ease;
     width: 50px;
     height: 50px;
     border-radius: 100%;
     line-height: 48px;
     font-size: 16px;
}
 .scrollup.b-show_scrollBut {
     opacity: 1;
     visibility: visible;
}
 .top_awro {
     background: #ee4a79 none repeat scroll 0 0;
     cursor: pointer;
     padding: 6px 8px;
     position: fixed;
     bottom: 59px;
     right: 20px;
     display: none;
     height: 45px;
     width: 45px;
     border-radius: 50%;
     text-align: center;
     line-height: 30px;
     transition: all 0.5s ease;
}
 .sale_pro {
     background: #f25252 !important;
}
 .margin_top_50 {
     margin-top: 50px;
}
 .margin_bottom_30_all {
     margin-bottom: 30px;
}
.text_align_center {
    text-align: center !important;
}
.theme_blue {
     color: #12c6f4 !important; 
}
/*--------------------------------------------------------------------- header area ---------------------------------------------------------------------*/
.header {
    background: #fff;
    padding: 21px 0px;
    border-top: solid #282e40 23px;
    position: relative;
}
.header::after {
    content: "";
    display: block;
    width: 250px;
    height: 30px;
    position: absolute;
    right: -15px;
    background: #fff;
    top: -30px;
    transform: skew(-30deg);
}
.logo {
     float: left;
}
 nav.main-menu {
     float: right;
     margin-left: 0;
}
 .menu-area-main li:hover a, .menu-area-main li:focus a {
     color: #639ebe;
}
.menu-area-main li.active a {
    color: #639ebe;
}
 .right_cart_section {
     float: right;
     width: auto;
}
 .right_cart_section ul {
     float: left;
     min-height: auto;
     margin: 0;
     padding: 12px 0 0;
}
 .right_cart_section .cart_icons {
     padding: 18px 0 0;
}
 .main-menu ul > li nth:child(5) a {
     padding-right: 0px;
}
 .right_cart_section ul li {
     float: left;
     font-size: 17px;
     font-weight: 400;
     color: #fff;
     margin-right: 30px;
}
 .right_cart_section ul.cart_update li {
     font-size: 13px;
     color: #ccc;
     line-height: normal;
     margin: 0;
     font-weight: 300;
}
 .right_cart_section ul.cart_update li span {
     font-size: 18px;
     font-weight: 300;
     color: #fff;
     line-height: 21px;
}
 .right_cart_section ul li i {
     margin-right: 10px;
     margin-top: 5px;
     float: left;
     color: #fff;
     font-size: 21px;
}
 .right_cart_section ul li a {
     color: #fff;
}
/*-- end header middle --*/
 .top-bar-info {
     background: #111111;
     padding: 5px 0px;
}
 .top-menu-left {
     float: left;
}
 .top-menu-left li {
     position: relative;
     display: inline-block;
     margin-right: 11px;
     padding-right: 12px;
}
 .top-menu-left li::before {
     content: '';
     position: absolute;
     right: 0;
     top: 9px;
     height: 10px;
     border-right: 1px dotted #999;
}
 .top-menu-left li:last-child::before {
     display: none;
}
 .top-menu-left li:last-child {
     padding: 0px;
     margin: 0px;
}
 .top-menu-left li a {
     color: #ffffff;
     font-size: 12px;
     text-transform: uppercase;
     text-decoration: none;
}
 .top-menu-left li a:hover {
     color: #38c8a8;
}
 .right-dropdown-language {
     float: right;
     margin-left: 12px;
}
 .dropdown-bar .dropdown-link {
     position: absolute;
     z-index: 1009;
     top: 40px;
     left: 0;
     right: auto;
     min-width: 50px;
     padding: 15px;
     background: #ffffff;
     list-style: none;
     border: 2px solid #38c8a8;
     opacity: 0;
     visibility: hidden;
     -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     -webkit-transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     -o-transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     text-align: left;
}
 .dropdown-bar:hover .dropdown-link {
     opacity: 1;
     visibility: visible;
     top: 25px;
}
 .dropdown-bar.right-dropdown-language>a::after {
     font-family: 'FontAwesome';
     content: "\f107";
     text-decoration: none;
     padding-left: 4px;
     color: #ffffff;
}
 .right-dropdown-language>a {
     line-height: 10px;
     padding: 5px 5px;
     cursor: pointer;
}
 .dropdown-bar .dropdown-link li a {
     color: #111111;
     display: block;
     font-size: 12px;
     line-height: 15px;
     padding: 5px 0;
}
 .dropdown-bar .dropdown-link li a:hover {
     color: #38c8a8;
}
 .dropdown-bar .dropdown-link li a img {
     margin-right: 7px;
}
 .dropdown-bar .dropdown-link li.active {
     font-weight: bold;
}
 .right-dropdown-language .dropdown-link {
     min-width: 100px;
     padding: 7px 10px;
     color: #111111;
}
 .dropdown-bar {
     position: relative;
     padding: 0 5px;
     font-size: 13px;
}
 .dropdown-bar .dropdown-link.right-sd {
     left: auto;
     right: 0;
}
 .right-dropdown-currency {
     float: right;
     margin-left: 12px;
}
 .dropdown-bar.right-dropdown-currency>a::after {
     font-family: 'FontAwesome';
     content: "\f107";
     text-decoration: none;
     padding-left: 4px;
     color: #ffffff;
}
 .right-dropdown-currency>a {
     line-height: 10px;
     padding: 5px 5px;
     cursor: pointer;
     color: #ffffff;
}
 .right-dropdown-currency .dropdown-link {
     min-width: 100px;
     padding: 7px 10px;
     color: #111111;
}
 .right-dropdown-currency .dropdown-link {
     min-width: 55px;
     padding: 7px 10px;
}
 .right-dropdown-currency .dropdown-link li a span.symbol {
     margin-right: 7px;
}
 #login-modal .modal-content {
     border-radius: 0px;
}
 #login-modal .modal-content .modal-header {
     background: #38c8a8;
     border-radius: 0;
}
 #login-modal .modal-content .modal-body .form-group input {
     background: #ffffff;
     border: 1px solid #c8c8c8;
     border-radius: 0px;
}
 #login-modal .modal-content .modal-body .form-group input:focus {
     border: 1px solid #c8c8c8 !important;
}
 #login-modal .modal-content form {
     margin-bottom: 10px;
}
 .modal-title {
     padding: 0px;
     color: #ffffff;
     font-size: 18px;
     text-transform: uppercase;
}
 .btn-template-outlined {
     background: #111111;
     color: #ffffff;
     border: none;
     border-radius: 0px;
}
 .btn-template-outlined i {
     padding-right: 10px;
}
 .text-muted {
     padding: 10px 0px;
}
 .slogan-line {
     float: right;
     color: #ffffff;
     font-size: 13px;
}
 .middle-area {
     padding: 30px 0px;
}
 .header-search {
     padding: 3px 0px;
}
 .header-search form {
     position: relative;
     -webkit-box-shadow: 0px 1px 10px -1px rgba(0, 0, 0, 0.2);
     box-shadow: 0px 1px 10px -1px rgba(0, 0, 0, 0.2);
}
 .header-search .btn-group.bootstrap-select {
     position: absolute;
     left: 0px;
     top: 0px;
}
 .header-search input {
     width: 100%;
     min-height: 45px;
     border-radius: 0px;
     border: none;
     padding-left: 15px;
     border: 1px solid #e0e7ed;
}
 .header-search form .search-btn {
     position: absolute;
     right: 0;
     top: 0;
     border: 0;
     color: #fff;
     font-size: 20px;
     padding: 4px 15px;
     border-radius: 0px;
     background-color: #38c8a8;
     cursor: pointer;
}
 .header-search form .search-btn:hover {
     background: #111111;
}
 .cart-box {
     float: right;
     margin-left: 10px;
     position: relative;
}
 .cart-content-box {
     position: absolute;
     z-index: 1009;
     top: 40px;
     left: auto;
     right: 0;
     min-width: 250px;
     max-width: 250px;
     padding: 15px;
     background: #ffffff;
     list-style: none;
     border: 2px solid #38c8a8;
     opacity: 0;
     visibility: hidden;
     -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     text-align: left;
     -webkit-transform: scaleY(0);
     transform: scaleY(0);
     -webkit-transform-origin: 0 0 0;
     transform-origin: 0 0 0;
     -webkit-transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
}
 .cart-box:hover .cart-content-box {
     opacity: 1;
     visibility: visible;
     top: 100%;
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
}
 .inner-cart {
     background: #38c8a8;
     border-radius: 2px;
     padding: 0px;
     color: #ffffff;
     position: relative;
     width: 40px;
     height: 40px;
     text-align: center;
}
 .cart-box .inner-cart:hover {
     color: #ffffff;
}
 .line-cart {
     float: left;
     line-height: 40px;
     margin-right: 9px;
}
 .cart-box a {
     display: inline-block;
}
 .cart-box a:hover {
     color: #38c8a8;
}
 .cart-box a span.icon {
     background: #38c8a8;
     width: 30px;
     height: 40px;
     display: inline-block;
     line-height: 40px;
     text-align: center;
     color: #ffffff;
     position: relative;
     border-radius: 2px;
}
 .cart-box a .p-up {
     position: absolute;
     right: -8px;
     top: -8px;
     line-height: initial;
     background: #38c8a8;
     padding: 3px;
     border-radius: 50%;
     width: 17px;
     height: 17px;
     font-size: 12px;
     text-align: center;
     line-height: 10px;
}
 .wish-box {
     float: right;
}
 .wish-box a {
     display: inline-block;
}
 .wish-box a:hover {
     color: #38c8a8;
}
 .wish-box a span.icon {
     background: #38c8a8;
     width: 40px;
     height: 40px;
     display: inline-block;
     line-height: 40px;
     text-align: center;
     color: #ffffff;
     position: relative;
     border-radius: 2px;
}
 .wish-box a span.icon:hover {
     background: #111111;
}
 .cart-content-right {
     padding: 5px 0px;
}
 .cart-content-box .items {
     text-align: center;
}
 .product-media {
     width: 60px;
     float: left;
     position: relative;
}
 .cart-content-box .items:hover .product-media::before {
     transform: scale(1);
     -webkit-transform: scale(1);
     -moz-transform: scale(1);
     -ms-transform: scale(1);
     -o-transform: scale(1);
}
 .product-media::before {
     position: absolute;
     content: '';
     z-index: 2;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: #38c8a8;
     opacity: 0.4;
     transform: scale(0);
     -webkit-transform: scale(0);
     -moz-transform: scale(0);
     -ms-transform: scale(0);
     -o-transform: scale(0);
     transition: all 0.5s ease;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
}
 .cart-content-box .items .item .remove {
     position: absolute;
     right: 0px;
     top: 0px;
     background: #38c8a8;
     color: #ffffff;
     width: 20px;
     height: 20px;
     line-height: 18px;
     border-radius: 2px;
}
 .cart-content-box .items .item {
     margin-bottom: 10px;
     padding-bottom: 10px;
     border-bottom: 1px solid #e0e7ed;
     position: relative;
}
 .cart-content-box .items .item .product-info {
     padding-top: 10px;
     padding-left: 71px;
     text-align: left;
}
 .cart-content-box .items .item .remove:hover {
     background: #111111;
}
 .subtotal {
     text-align: left;
     text-transform: capitalize;
     color: #38c8a8;
     font-weight: 500;
     margin-bottom: 15px;
}
 .subtotal span {
     font-weight: bold;
     color: #111111;
     padding-left: 15px;
     float: right;
}
 .actions .btn-process {
     padding: 5px 16px;
     color: #ffffff;
     font-family: 'Roboto', sans-serif;
     font-size: 14px;
     border-radius: 2px;
     overflow: hidden;
}
 .actions .btn-process:hover {
     color: #ffffff;
}
 .line-cart {
     position: relative;
}
 .wish-box a span.icon span {
     position: absolute;
     right: -8px;
     top: -8px;
     line-height: initial;
     background: #38c8a8;
     padding: 3px;
     border-radius: 50%;
     width: 17px;
     height: 17px;
     font-size: 12px;
}
 .main-menu {
     text-align: center;
}
 .main-menu ul {
     margin: 0;
     list-style-type: none;
}
 .main-menu ul>li {
     display: inline-block;
     position: relative;
}
.main-menu ul > li a {
    padding: 15px 40px;
    line-height: 20px;
    font-size: 20px;
    display: block;
    font-weight: 400;
    color: #3a3838;
}
 .main-menu ul li:last-child a {
     padding-right: 0;
}
 .sub-down li {
     background: #ffffff;
}
 .main-menu ul>li .sub-down li a {
     color: #282e40;
     font-size: 15px;
     text-transform: capitalize;
     font-weight: 300;
     padding: 12px 5px;
     position: relative;
     border-bottom: solid #eee 1px;
}
 .main-menu ul>li .sub-down li a::before {
}
 .main-menu ul>li .sub-down li a:hover {
     color: #111111;
}
 .main-menu ul>li .sub-down li a:hover::before {
}
 .main-menu ul li:first-child {
     margin-left: 0;
}
 .main-menu ul>li>ul {
     opacity: 0;
     position: absolute;
     text-align: left;
     top: 100%;
     -webkit-transform: scaleY(0);
     transform: scaleY(0);
     -webkit-transform-origin: 0 0 0;
     transform-origin: 0 0 0;
     -webkit-transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
     visibility: hidden;
     width: 240px;
     z-index: 999;
     background: #fff;
     -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
     box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
 .main-menu>ul>li:hover>ul {
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
     visibility: visible;
     opacity: 1;
}
 .main-menu ul>li>ul>li {
     margin: 0px;
     position: relative;
     display: block;
}
 .main-menu ul>li>ul>li:hover>ul {
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
     visibility: visible;
     opacity: 1;
     left: 100%;
     top: 10px;
}
 .main-menu ul>li>ul>li>a {
     background: none !important;
}
 .mean-container .mean-nav {
     margin-top: 0px;
     position: absolute;
     top: 100%;
}
 .main-menu ul>li {
     position: inherit;
     display: inline-block;
     vertical-align: middle;
}
 .main-menu ul>li:nth-child (6) {
     padding-right: 0px;
}
 .nav>li {
     position: inherit;
     display: inline-block;
     vertical-align: middle;
}
 .megamenu .sub-down {
     max-width: 1140px;
     width: 100%;
     left: 0;
     margin: 0 auto;
     right: 0;
     padding: 15px 0px;
}
 .sub-full {
}
 .simple-down {
     padding: 15px;
}
 .megamenu-categories {
     padding: 10px 0px;
}
 .sub-full.megamenu-categories li {
     display: block;
}
 .megamenu .sub-full.megamenu-categories ol li a {
     padding: 5px 0px;
     font-size: 15px !important;
     font-weight: 500;
}
 .sub-full.megamenu-categories ol li .category-title {
     padding: 15px 0px;
     font-size: 16px;
     font-weight: 600;
     text-transform: uppercase;
}
 .sub-full.megamenu-categories ol li .category-box a {
     padding: 5px 0px;
}
 .menu-add {
     padding: 30px 15px;
}
 .menu-add img {
     width: 100%;
}
 .main-w img {
     width: 100%;
}
 .women-box {
     position: relative;
}
 .women-box::before {
     content: "";
     position: absolute;
     background: rgba(0, 0, 0, 0.3);
     width: 100%;
     height: 100%;
}
 .banner-up-text {
     position: absolute;
     bottom: 10px;
     left: 0px;
     right: 0px;
     text-align: center;
}
 .text-a {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 40px;
     font-weight: 700;
}
 .text-b {
     color: #fff;
     font-size: 28px;
     text-transform: uppercase;
     line-height: 30px;
     padding: 20px 0px;
}
 .text-c {
     color: #ffffff;
     font-size: 31px;
     font-weight: 300;
     text-transform: uppercase;
     line-height: 30px;
     padding-bottom: 20px;
}
 .megamenu .sub-full.megamenu-categories .women-box .banner-up-text a {
     background: #111111;
     color: #ffffff !important;
     display: inline-block;
     padding: 10px 16px;
     border-radius: 2px;
     overflow: hidden;
     font-size: 16px;
}
 .sticky-wrapper .sticky-wrapper-header {
     z-index: 20 !important;
     background: #ffffff;
}
 .is-sticky .sticky-wrapper-header .middle-area {
     padding: 10px 0px 
}
 .sticky-wrapper:not(.is-sticky) {
     height: auto !important;
}
 .hover-btn {
     display: inline-block;
     vertical-align: middle;
     -webkit-transform: perspective(1px) translateZ(0);
     transform: perspective(1px) translateZ(0);
     box-shadow: 0 0 1px rgba(0, 0, 0, 0);
     position: relative;
     background: #111111;
     -webkit-transition-property: color;
     transition-property: color;
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
}
 .hover-btn::before {
     content: "";
     position: absolute;
     z-index: -1;
     top: 0;
     bottom: 0;
     left: 0;
     right: 0;
     background: #38c8a8;
     -webkit-transform: scaleX(0);
     transform: scaleX(0);
     -webkit-transform-origin: 50%;
     transform-origin: 50%;
     -webkit-transition-property: transform;
     transition-property: transform;
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
     -webkit-transition-timing-function: ease-out;
     transition-timing-function: ease-out;
     display: block !important;
}
 .hover-btn:hover::before, .hover-btn:focus::before, .hover-btn:active::before {
     -webkit-transform: scaleX(1);
     transform: scaleX(1);
}
 .hover-btn:hover, .hover-btn:focus, .hover-btn:active {
     color: white;
     box-shadow: none;
}
 .btn-secondary.focus, .btn-secondary:focus {
     box-shadow: none;
}
 .img-responsive {
     max-width: 100%;
}
 .padding_right_15_inner {
     padding-right: 15px;
}
 .padding_left_15_inner {
     padding-left: 15px;
}
 .dark_bg {
     background: #282e40;
}
/*--------------------------------------------------------------------- top banner area ---------------------------------------------------------------------*/
 .slider_section {
     min-height: 560px;
     background: #282e40;
     position: relative;
}
.slider_section::after {
    width: 54%;
    position: absolute;
    top: 0;
    right: -370px;
    content: "";
    background: #fff;
    display: block;
    height: 100%;
    transform: skew(50deg);
}
.slider_section::before {
    width: 100%;
    position: absolute;
    bottom: 0;
    right: 0px;
    content: "";
    background: #fff;
    display: block;
    height: 90px;
}
.slider_section .full {
     position: relative;
     z-index: 9;
}
.slide_img {
    margin-top: 40px;
    margin-bottom: 0;
}
.top-banner-slider .heroslider {
     margin: 0px;
     padding: 0px;
     border: none;
     position: relative;
     border-radius: 0;
}
 .swiper-overlay {
     height: 100%;
     position: relative;
}
 .swiper-overlay {
     background: rgba(0, 0, 0, 0.5);
     content: "";
     width: 100%;
     height: 100%;
     left: 0px;
     top: 0px;
}
 .heroslider .container {
     position: relative;
     height: 100%;
     padding-left: 0;
     padding-right: 0;
     z-index: 5;
}
 .swiper-container {
     width: 100%;
     height: 100%;
}
 .heroslider .slider-01 {
     width: 100%;
     background-image: url(../images/slider-01.jpg);
     background-size: cover;
     background-position: center;
}
 .heroslider .slider-02 {
     width: 100%;
     background-image: url(../images/slider-02.jpg);
     background-size: cover;
     background-position: center;
}
 .heroslider .slider-03 {
     width: 100%;
     background-image: url(../images/slider-03.jpg);
     background-size: cover;
     background-position: center;
}
 .heroslider .slides li {
     height: 600px;
}
 .top-banner-slider .heroslider .slides li::before {
     content: "";
     position: absolute;
     background: rgba(0, 0, 0, 0.4);
     height: 100%;
     width: 100%;
     left: 0px;
     top: 0px;
}
 .top-banner-slider .flex_caption3 {
     position: absolute;
     z-index: 30;
     left: 0;
     right: 0;
     bottom: 50px;
     margin: 0 -15px;
     display: flex;
}
 a.slide_banner {
     position: relative;
     display: inline-block;
     margin: 0 12px 0 15px;
}
 .slide1_banner1 {
     width: 570px;
}
 .slide1_banner2 {
     width: 270px;
}
 .slide1_banner3 {
     width: 270px;
}
 .top-banner-slider .flex_caption1 {
     text-align: center;
     position: absolute;
     z-index: 30;
     left: 0;
     right: 0;
     margin: 0 auto;
     top: 31%;
     max-width: 720px;
     width: 100%;
     text-transform: uppercase;
     color: #333;
}
 .top-banner-slider .flex_caption1 .title1 {
     font-size: 36px;
     font-weight: 300;
     color: #ffffff;
}
 .top-banner-slider .flex_caption1 .title2 {
     font-size: 60px;
     font-weight: 900;
     color: #ffffff;
}
 .top-banner-slider .flex_caption2 {
     text-align: center;
}
 .top-banner-slider .flex_caption2 {
     position: absolute;
     z-index: 30;
     left: 0;
     top: 20%;
     display: table;
     width: 177px;
     height: 177px;
     background-color: #242424;
}
 .top-banner-slider .flex_caption2 .middle {
     display: table-cell;
     vertical-align: middle;
     text-transform: uppercase;
     text-align: center;
     font-weight: 700;
     line-height: 31px;
     font-size: 26px;
     color: #fff;
     transition: all 0.1s ease-in-out;
     -webkit-transition: all 0.1s ease-in-out;
}
 .top-banner-slider .flex_caption2 .middle:hover {
     background: #38c8a8;
}
 .top-banner-slider .flex_caption2 span {
     display: block;
     font-weight: 100;
     line-height: 36px;
     font-size: 34px;
}
 a.slide_banner::before {
     content: '';
     position: absolute;
     left: 0;
     top: 0;
     right: 0;
     bottom: 0;
     opacity: 0;
     border: 2px solid #ffffff;
     transition: all 0.1s ease-in-out;
     -webkit-transition: all 0.1s ease-in-out;
}
 a.slide_banner:hover::before {
     left: -7px;
     top: -7px;
     right: -7px;
     bottom: -7px;
     opacity: 1;
}
 .flex-control-nav {
     background: #38c8a8;
     bottom: 0px;
     position: relative;
}
 .flex-control-nav li {
     line-height: 10px;
}
 .flex-control-paging li a {
     background: rgba(255, 255, 255, 1);
     border: 2px solid #ffffff;
}
 .flex-control-paging li a.flex-active {
     border: 2px solid #ffffff;
}
 .flex-direction-nav a {
     background: #111111;
     text-align: center;
}
 .heroslider:hover .flex-direction-nav .flex-prev:hover {
     background: #38c8a8;
}
 .heroslider:hover .flex-direction-nav .flex-next:hover {
     background: #38c8a8;
}
 .flex-direction-nav a::before {
     color: #ffffff;
}
 .top-banner-slider .swiper-pagination {
     padding: 10px 0px;
}
 .heroslider .swiper-pagination {
     bottom: 0px;
     background: #38c8a8;
}
 .heroslider .swiper-pagination .swiper-pagination-bullet-active {
     background: #fff;
}
 .heroslider .swiper-pagination::before {
     content: "";
     width: 22px;
     height: 22px;
     position: absolute;
     left: -10px;
     top: 4px;
     z-index: -1;
     background: #e12d4f;
     -webkit-transform: rotate(45deg);
     transform: rotate(45deg);
}
 .heroslider .swiper-pagination::after {
     content: "";
     width: 22px;
     height: 22px;
     position: absolute;
     right: -10px;
     top: 4px;
     z-index: -1;
     background: #e12d4f;
     -webkit-transform: rotate(45deg);
     transform: rotate(45deg);
}
 .heroslider .swiper-pagination.swiper-pagination-bullets-dynamic {
     overflow: visible;
     width: 110px !important;
}
 .heroslider .swiper-pagination .swiper-pagination-bullet {
     opacity: 1;
}
 input[type="checkbox"].styled:checked+label:after, input[type="radio"].styled:checked+label:after {
     font-family: 'FontAwesome';
     content: "\f00c";
}
 input[type="checkbox"] .styled:checked+label::before, input[type="radio"] .styled:checked+label::before {
     color: #fff;
}
 input[type="checkbox"] .styled:checked+label::after, input[type="radio"] .styled:checked+label::after {
     color: #fff;
}
/*--------------------------------------------------------------------- layout new css ---------------------------------------------------------------------*/
 .relative {
    position: absolute;
     right: 0;
     top: 50%;
     transform: translateY(-50%);
    bottom: auto;
     text-align: left;
     padding: 0;
}
 .banner-main {
    position: relative;
}
.slider_section h1 {
    font-size: 65px;
    line-height: 65px;
    color: #fff;
    font-weight: 500;
    margin-bottom: 25px;
    padding-bottom: 0;
    margin-top: 140px;
}
.slider_section h1 strong.cur {
    font-size: 50px;
    line-height: 50px;
    color: #5293b7;
    font-weight: 400;
}
.slider_section p {
    color: #fff;
    font-size: 17px;
}
.banner-main span {
    font-size: 35px;
     color: #2f2f2f;
     padding-bottom: 25px;
     display: inline-block;
}
.banner-main p {
    font-size: 17px;
     line-height: 30px;
     color: #2f2f2f;
}
.heading h2 {
    padding: 0;
    font-size: 45px;
    font-weight: 500;
    text-align: left;
    color: #282e40;
}
 .about .aboutimg {
    text-align: center;
}
 .about .aboutimg figure {
    margin: 0px;
     padding-top: 40px;
}
 .about .aboutimg p {
    font-size: 17px;
     line-height: 32px;
     color: #555554;
     padding: 30px 0px;
}
 .about .aboutimg a{
     width: 218px;
     font-size: 17px;
     padding: 20px 0px;
     background-color: #000;
     color: #fff;
     display: inline-block;
     line-height: 20px;
     text-transform: uppercase;
     text-align: center;
}
 .about .aboutimg a:hover {
    color: #fff;
     background-color: #18bb18;
}
 .Coach {
     background-color: #fff;
     padding: 90px 0px;
}
 .Coach .titlepage {
     text-align: center;
     padding-bottom: 65px;
}
 .Coach .titlepage h2 {
     line-height: 72px;
     font-size: 40px;
     color: #18bb18;
}
 .need {
    color: #120f0f;
     font-weight: normal;
}
 .Coach .titlepage span {
    font-size: 20px;
     line-height: 22px;
     color: #383838;
}
 .Coach .tow-box {
     background-color: #fff;
}
 .mrgn-top {
    margin-top: 60px;
}
 .Coach .tow-box i {
     padding-right: 34px;
     float: left;
}
 .Coach .tow-box i img {
     float: left;
}
 .Coach .tow-box p {
    font-size: 27px;
     line-height: 34px;
     color: #151108;
}
 .Coach .read-more {
    margin-top: 60px;
}
 .Coach .read-more a{
     padding: 20px 0px;
     background-color: #000;
     color: #fff;
     display: inline-block;
     font-weight: 400;
     font-size: 17px;
     line-height: 20px;
     margin: 0 auto;
     display: flex;
     justify-content: center;
     width: 218px;
     text-transform: uppercase;
     text-align: center;
}
 .Coach .read-more a:hover {
    background-color: #18bb18;
}
 .green_bg {
    background-color: #18bb18;
}
 .guaranteed figure {
    margin: 0;
}
 .guaranteed figure img {
    width: 100%
}
 .pdn-right {
    padding-right: 0px;
}
 .get {
    padding-left: 30.3%;
     padding-bottom: 49px;
     padding-top: 32px;
}
 .get h2 {
     font-weight: bold;
     line-height: 86px;
     font-size: 60px;
     color: #14120f;
}
 .white {
    color: #fff;
}
 .get p {
    color: #fff;
     font-size: 17px;
     line-height: 32px;
}
 .get a {
     padding: 20px 0px;
     background-color: #000;
     color: #fff;
     width: 201px;
     display: inline-block;
     text-align: center;
     text-transform: uppercase;
     margin-top: 30px;
}
 .get a:hover {
    color: #14120f;
     background-color: #fff;
}
 .contact_form {
     background: #282e40;
     padding: 45px;
}
 .carousel-control-next {
     left: 0px;
     bottom: 109px;
}
 .carousel-control-prev {
     bottom: 68px;
     bottom: 0;
}
 .full-slider_cont {
     background-color: #fff;
     padding-top: 50px;
}
 .full-slider_cont h1 {
     font-size: 65px;
     line-height: 72px;
     color: #110707;
}
 .dark_brown {
     color: #ad2100;
     font-weight: bold;
}
 .full-slider_cont p {
     font-weight: 400;
     font-size: 17px;
     line-height: 34px;
     color: #262424;
     padding: 19px 0px 70px 0px;
}
 .cur {
     color: #120f0f;
}
 .Contact {
     background-color: #fff;
     padding-top: 90px;
     padding-bottom: 90px;
}
 .Contact .titlepage3 {
     padding-bottom: 50px;
}
 .Contact .titlepage3 h2 {
     font-size: 60px;
     line-height: 50px;
     color: #01080b;
     padding-bottom: 0px;
     font-weight: bold;
}
.form-control {
    border: none;
    margin: 10px 0;
    padding: 25px 25px;
    color: #fff;
    border-radius: 0;
    background: #282e40;
    height: 75px;
    color: #fff;
    max-width: 568px;
    width: 100%;
}
.form-control:focus, .form-control:hover {
     border: none !important;
     background: #282e40;
}
.textarea {
    margin-bottom: 37px;
    padding: 25px 25px;
    color: #fff;
    max-width: 568px;
    border: none;
    border-radius: 0;
    min-height: 145px;
    background: #282e40;
    width: 100%;
    font-size: 1rem;
    line-height: 1.5em;
}
 .send-btn {
     font-size: 26px;
     border: #000000 solid 2px;
     padding: 16px 70px;
     background-color: #000000;
     color: #fff;
     border-radius: 40px;
     margin: 0 auto;
}
 .send-btn:hover {
     background-color: #18bb18;
     border: #18bb18 solid 2px;
     color: #fff;
}
.footer {
    background-color: #282e40;
}
 .footer .JJcoach {
    margin-top: 45px;
}
 .footer .JJcoach h3 {
     color: #fff;
     font-size: 31px;
     line-height: 30px;
     display: block;
     padding-bottom: 25px;
     text-transform: uppercase;
     text-align: center;
     border: #ddd solid 1px;
     width: 676px;
     margin: 0 auto;
     padding: 25px 0;
     font-weight: bold;
}
 .coa {
    color: #12dc12;
}
 .footer .Contact i a {
     border: #fff solid 1px;
     padding: 3% 11%;
     display: inline-block;
}
 .footer .Social h3 {
     color: #fff;
     font-size: 17px;
     line-height: 30px;
     display: block;
     padding-bottom: 25px;
     text-transform: uppercase;
}
 .pdn-top-30 {
    padding-top: 30px;
}
 ul.location_icon {
     list-style: none;
     margin: 0;
     padding: 0;
     width: 100%;
     float: left;
}
 ul.location_icon li {
     float: left;
     height: 70px;
     color: #fff;
     display: flex;
     flex-wrap: wrap;
     align-items: center;
}
 ul.location_icon li img {
    padding-right: 10px;
}
 ul.location_icon span {
    font-size: 17px;
     font-weight: 400;
}
 ul.socil_link {
     list-style: none;
     margin: 0;
     padding: 0;
     width: 100%;
     float: left;
}
 ul.socil_link li {
     float: left;
     padding-right: 22%;
     height: 70px;
     margin: 0 -1px 0 0;
     text-align: center;
     display: flex;
     justify-content: center;
     align-items: center;
}
.copyright {
    background-color: #046882;
    padding: 10px 0px;
    float: left;
    width: 100%;
    text-align: center;
}
.copyright p {
    color: #fff;
    font-size: 15px;
    text-align: center;
    width: 100%;
}
 .copyright a {
    color: #fff;
}
 .copyright a:hover {
    color: #12c6f4;
}
/*--------------------------------------------------------------------- inner_page css ---------------------------------------------------------------------*/
 .about_page .about {
    margin-bottom: 90px;
}
 .about-bg {
     background-color: #12c6f4;
     margin-bottom: 90px;
}
 .about-bg .abouttitle h2 {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 45px;
     padding: 40px 0;
     font-weight: 500;
     text-align: center;
}
 .about_page .about .aboutimg p{
    text-align: left;
}
 .meet_page .get_infor {
    margin-bottom: 90px;
}
 .meet_page .meet-me {
     background-color: #18bb18;
     margin-bottom: 90px;
}
 .pdntp {
    padding-top: 135px;
}
 .meet_page .meet-me .abouttitle h2 {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 45px;
     padding: 40px 0;
     font-weight: 500;
     text-align: center;
}
 .Coach-bg {
     background-color: #18bb18;
}
 .Coach-bg .abouttitle h2 {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 45px;
     padding: 40px 0;
     font-weight: 500;
     text-align: center;
}
 .Contact-bg {
     background-color: #18bb18;
}
 .Contact-bg .abouttitle h2 {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 45px;
     padding: 40px 0;
     font-weight: 500;
     text-align: center;
}



.container {
     position: relative;
     z-index: 99;
}
.left_white {
     position: relative;
}
.left_white::after {
    position: absolute;
    height: 100%;
    width: 10%;
    right: 0;
    top: 0;
    background: #fff;
    content: "";
    display: block;
}
.right_white {
     position: relative;
}
.right_white::after {
    position: absolute;
    height: 100%;
    width: 10%;
    left: 0;
    top: 0;
    background: #fff;
    content: "";
    display: block;
}
.padding_right_0 {
     padding-right: 0 !important;
}
.padding_left_0 {
     padding-left: 0 !important;
}
.main_heading_1 h2 {
    font-size: 75px;
    font-weight: 700;
    color: #5293b7;
    padding: 0;
    margin-top: 50px;
}
.blog_blue p {
    font-size: 15px;
    line-height: 23px;
    padding: 0 15px 20px 15px;
    position: relative;
    z-index: 1;
}
.blog_blue {
    background: #12c6f4;
    margin-top: -1px;
    position: relative;
}
.blog_blue::after {
    width: 110%;
    height: 50px;
    content: "";
    display: block;
    position: absolute;
    top: -30px;
    left: -5%;
    background: #12c6f4;
    transform: rotate(6deg);
}
header {
    position: relative;
    z-index: 999;
}
button.main_bt {
    background: #12c6f4;
    color: #111;
}
footer p a {
    color: #fff;
    line-height: 30px;
}
footer h3 {
    color: #fff;
    font-size: 30px;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 35px;
}
footer p {
    color: #fff;
    font-size: 17px;
    line-height: 30px;
    float: left;
}
footer p span:nth-child(1) {
    float: left;
    margin-right: 15px;
}

footer p span {
    font-size: 15px;
    line-height: 24px;
    float: left;
}

footer input {
    width: 100%;
    height: 48px;
    background: #fff;
    border: none;
    padding: 0 20px;
    margin-bottom: 20px;
}

footer button {

    background: #12c6f4;
    width: 95px;
    height: 48px;

}
</style>


 