<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVADE FSK</title>
    <?= $this->Html->css('/assets/css/bootstrap.css') ?>
     <!-- FONTAWESOME STYLES-->
     <?= $this->Html->css('/assets/css/font-awesome.css') ?>
     <!-- MORRIS CHART STYLES-->
    <?= $this->Html->css('/assets/js/morris/morris-0.4.3.min.css') ?>
        <!-- CUSTOM STYLES-->
    <?= $this->Html->css('/assets/css/custom.css') ?>
     <!-- GOOGLE FONTS-->
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans') ?>
    <?= $this->Html->css('/font-awesome-4.7.0/css/font-awesome.css') ?>
    <?= $this->Html->css('/font-awesome-4.7.0/css/font-awesome.min.css') ?>

    <?= $this->Html->script('/assets/js/jquery-1.10.2.js') ?>
      <!-- BOOTSTRAP SCRIPTS -->
    <?= $this->Html->script('/assets/js/bootstrap.min.js') ?>
    <!-- METISMENU SCRIPTS -->
    <?= $this->Html->script('/assets/js/jquery.metisMenu.js') ?>
     <!-- MORRIS CHART SCRIPTS -->
    <?= $this->Html->script('/assets/js/morris/raphael-2.1.0.min.js') ?>
    <?= $this->Html->script('/assets/js/morris/morris.js') ?>
       <!-- DATA TABLE SCRIPTS -->
    <?= $this->Html->script('/assets/js/dataTables/jquery.dataTables.js') ?>
    <?= $this->Html->script('/assets/js/dataTables/dataTables.bootstrap.js') ?>
       <!-- TABLE STYLES-->
    <?= $this->Html->script('/assets/js/dataTables/dataTables.bootstrap.css') ?>
    
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->


    <?= $this->Html->script('/assets/js/custom.js') ?>
    <?= $this->Html->css('/assets/css/bootstrap.css') ?>
    

</head>
<body>
<!-- all your content here -->
 
  
 
  <!-- link to scripts here -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/users/dashboard"> EVADE</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?= date('l, d M Y');?> &nbsp; <a href="/users/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>  

       
         <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu"> <li class="text-center">
                <br>
                <?= $this->Html->image('a.png');?><center><br>
                
                    
          </li>
                 <?php

          $role = $this->request->session()->read('Auth.User.role');

          if($role==1)

          {
          ?>
        <li>
                        <a href="/users/dashboard"><i class="fa fa-home fa-2x "></i> Home</a>
                    </li>
                     <li>
                        <a  href="/users/add"><i class="fa fa-user-plus fa-2x "></i> Add a new user</a>
                    </li>
                    <li>
                        <a  href="/nursings"><i class="fa fa-graduation-cap fa-2x "></i> Student page</a>
                    </li>
                    <li>
                        <a   href="/nursings/sem"><i class="fa fa-line-chart fa-2x "></i> Semester conversion</a>
                    </li> 
                      <li  >
                        <a  href="/osce-actions"><i class="fa fa-ambulance fa-2x "></i> Insert OSCE question</a>
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-users fa-2x"></i> Manage student<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/users/ci2">Manage Student (Area Skills)</a>
                            </li>
                            <li>
                                <a href="/users/ci">Manage Student (Nursing Skills) </a>
                            </li>
                            <li>
                                <a href="/users/lecturer">Manage Student (OSCE) </a>
                            </li>
                            
                        </ul>
                      </li> 
                     <li  >
                        <a  href="/AreaskillAttributes"><i class="fa fa-calculator fa-2x "></i> View Results</a>
                    </li>
                      
            
                     <?php

          }
          else if($role == 2 )

          {
          ?>
  <li>
                        <a href="/users/lecturer"><i class="fa fa-home fa-2x "></i> Dashboard </a>
                    </li>
                     
               <li >
                        <a   href="/osce-skills"><i class="fa fa-file-text-o fa-2x "></i> Results part 1</a>
                    </li> 
                      <li  >
                        <a  href="/osce-skills2"><i class="fa fa-file-text-o fa-2x "></i> Results part 2</a>
                    </li>
                    <li  >
                        <a  href="/osce-skills3"><i class="fa fa-file-text-o fa-2x "></i> Results part 3 </a>
                    </li>       
           <li  >
                        <a   href="/osce-skills4"><i class="fa fa-file-text-o fa-2x "></i> Results part 4</a>
                    </li> 
                     <li  >
                        <a   href="/osce-skills5"><i class="fa fa-file-text-o fa-2x "></i>Results part 5</a>
                    </li> 
                    <li  >
                        <a   href="osce-skills6"><i class="fa fa-file-text-o fa-2x "></i>Results part 6</a>
                    </li> 
                      <?php
            }

             else if($role ==3)

            {
          ?>

           <li>
                        <a class="active-menu"  href="/users/ci"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="/users/ci"><i class="fa fa-medkit fa-2x "></i> Nursing Skills</a>
                    </li>
                    <li>
                        <a  href="/users/ci2"><i class="fa fa-user-md fa-2x "></i> Area Skills</a>
                    </li>
               <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li> 
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>       
           <li  >
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li> 
                     <li  >
                        <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                    </li> 

  <?php
            }

             else

            {
          ?>
            <h2></h2>
            <?php 
            }
            ?>



                </ul>
               
            </div>
            
        </nav>  
         
        <!-- /. NAV SIDE  --> 

       
        
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            
             <?php

          $role = $this->request->session()->read('Auth.User.role');

          if($role==1)

          {
          ?>
                     <h2>
       Administrator Page </h2>   
                        
                    

                <?php

          }
                
            else if($role == 2 )

          {
          ?>
                     <h2>
       Lecturer Page </h2>   
                       
                    

                  <?php
            }

             else if($role ==3)

            {
          ?>

          <h2>
       Clinical Instructor Page </h2> 
                       
  <?php
            }

             else

            {
          ?>
            <h2>Evade : Register </h2>
            <?php 
            }
            ?>
                <strong> <b><i class="fa fa-user"></i> <?php echo $this->request->session()->read('Auth.User.fname'); ?>
        <?php echo $this->request->session()->read('Auth.User.lname'); ?> </b></strong> 
        <br>
        Department of Nursing<br>
        Faculty of Health Sciences<br>
        UiTM Puncak Alam <br>

               <hr />
                   
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
  
                    </div>
                </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
      
     <!-- /. WRAPPER  -->
           <!-- /. NAV TOP  -->
           <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <footer>
    </footer>

</body>
</html>
