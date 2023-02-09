<!--header-->
  <div class="strip"> </div>
  <div class="header-top" id="home">
    <div class="container">
      <div class="head-section">
        <div class="logo-content">
          <!--top-logo-->
          
              <div class="logo">
                  <a href="index.php"><img src="images/logo.png"  alt="" width="180" height="100" /></a>
                  <h4 style="color: orange;">Starehe Retirement Home Management System</h4> <!-- Changed name to Starehe -->
              </div>
              <div class="top-log">
                <ul>
                  <li><a href="admin/login.php">Admin</a></li> <!--Removed Link admin/login.php -->
                  <li><a href="contact.php">Contact</a></li> <!-- Removed Link contact.php-->
                 <li><a href="#">Eligibility</a></li> <!-- Removed Link eligibility.php-->
                <li><a href="#">Rules</a></li> <!-- Removed Link rules.php-->
                 <li><a href="search.php">Search</a></li> <!-- Removed Link search.php-->
                </ul>
                  <div class="clearfix"> </div> 
              </div>  
              <div class="clearfix"> </div> 
          </div>
          <div class="social-content">
              <div class="top-icons">
                <ul>
                  <li><a class="fb" href="#"><span> </span></a></li>
                  <li><a class="gp" href="#"><span> </span></a></li>
                  <li><a class="tw" href="#"><span> </span></a></li>
                  <li><a class="you" href="#"><span> </span></a></li>
                  <div class="clearfix"> </div>
                </ul>
              </div>
            </div>
          </div>
            <div class="clearfix"></div>
      </div>
        <div class="clearfix"></div>
    <div class="sub-header">
    <!--start-top-nav-->
             <nav class="top-nav">
              <ul class="top-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">  About </a></li> <!--Removed link about.php -->
                <li><a href="#">Services</a></li> <!--Removed link services.php -->
                <li><a href="#">Eligibility</a></li> <!--Removed link eligibility.php-->
                <li><a href="#"> Rules </a></li>  <!--Removed link rules.php-->
                <li><a href="#"> Search </a></li> <!--Removed link search.php--> 
                <li><a href="#">Contact</a></li> <!--Removed link contact.php-->
                  <div class="clearfix"> </div>

              </ul>
              <a href="#" id="pull"><h6>MENU</h6><img src="images/menu-icon.png" title="menu" /></a>

            </nav>
            <!--start-top-nav-script-->
          <script>
            $(function() {
              var pull    = $('#pull');
                menu    = $('nav ul');
                menuHeight  = menu.height();
              $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
              });
              $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                      menu.removeAttr('style');
                    }
                });
            });
          </script>
  <!--//End-top-nav-script-->

      <!-- script-for-menu -->
        <script>
          $(document).ready(function(){
            $("span.menu").click(function(){
              $(".top-nav ul").slideToggle(200);
            });
          });
        </script>
      <div class="clearfix"> </div>
    </div>
    <!--/header-->