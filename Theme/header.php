 <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>TOWN-SEARCH CLIENT PORTAL</b></a>
            <!--logo end-->
			<?php 
if($user_level ==1){ ?>
	 <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="admin.php">Admin Panel</a></li>
            	</ul>
            </div>

<?php }?>
            <?php 
			if(loggedin()){ ?>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
			
			<?php }else{ ?>
				 <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Login</a></li>
            	</ul>
            </div>
				
			<?php } ?>
        </header>