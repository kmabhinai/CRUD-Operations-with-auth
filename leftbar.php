 <!-- BEGIN SIDEBAR -->
 <div class="page-sidebar" id="main-menu">
   <!-- BEGIN MINI-PROFILE -->
   <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
     <div class="user-info-wrapper">
       <!--profile photo -->
       <div class="profile-wrapper"> <img src="assets/img/user.png" alt="" data-src="logo/penguinw.png" data-src-retina="logo/penguinw.png" width="69" height="69" /> </div>
       <div class="user-info">
         <div class="greeting" style="font-size:14px;">Welcome</div>
         <div class="username" style="font-size:12px;"> <?php echo $_SESSION['name']?> <?php echo $_SESSION['login']; ?> </div>
         <div class="status" style="font-size:10px;"><a href="#">
           </a></div>
       </div>
     </div>
     <!-- END MINI-PROFILE -->
     <!-- BEGIN SIDEBAR MENU -->
     <p class="menu-title"> <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>

     <ul>
       

       <li><a href="index.php"><span class="fa fa-file-text-o"></span> Products</a></li>
       <li><a href="logout.php"><span class="fa fa-power-off"></span> Logout</a></li>




     </ul>