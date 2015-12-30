<aside>
	  <?php
		 $result = mysqli_query($con,"SELECT * FROM search where mobno='$user_mobno' ");
		 $row=mysqli_fetch_array($result);
	  ?>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo $row['shoplogo']; ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $row['shopnm']; ?></h5>
              	  	
                  <li class="mt">
                      <a href="viewpage.php">
                          <i class="fa fa-dashboard"></i>
                          <span>View Page</span>
                      </a>
                  </li>
				  

                  <li class="sub-menu">
                      <a href="advertise.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Advertise Image</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>-->
                  </li>

                  <li class="sub-menu">
                      <a href="shopimg.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Shop Image</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a  href="shopdet.php" >
                          <i class="fa fa-book"></i>
                          <span>Shop Details</span>
                      </a>
                      <!--<ul class="sub">
                          <li class="active"><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>-->
                  </li>
                   <li class="sub-menu">
                      <a  href="info.php" >
                          <i class="fa fa-book"></i>
                          <span>Personal Information</span>
                      </a>
                      <!--<ul class="sub">
                          <li class="active"><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="services.php" >
                          <i class="fa fa-th"></i>
                          <span>Services</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="gallery.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Image Gallery</span>
                      </a>
                  </li>
	      <li class="sub-menu">
                      <a href="lock_screen.html" >
                          <i class="fa fa-th"></i>
                          <span>Lock Screen</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>-->
                  </li>
<li class="sub-menu">
                      <a href="visitors.php" >
                          <i class="fa fa-th"></i>
                          <span>View Visitors</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>-->
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>