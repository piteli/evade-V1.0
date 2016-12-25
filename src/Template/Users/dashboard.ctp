 <div class="row">
  <center><?= $this->Html->image('fsk.png') ?> </center> 

      <div class="col-md-6 col-sm-12 col-xs-12"> 
        <div class="panel panel-default">
            <div class="panel-heading">Student by semester </div>
                <div class="panel-body">
                      <div id="morris-bar-chart"></div>
                 </div>
            </div>  
        </div>  

       <div class="col-md-3 col-sm-12 col-xs-12">
       <div class="panel ">
          <div class="main-temp-back">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fa fa-users fa-3x"></i> Total students </div>
                <div class="col-xs-6">
                  <div class="text-temp"> 300</div>
                </div>
              </div>
            </div>
          </div>
          
        </div>  
        </div>

         <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-university fa-5x"></i>
                            <h3>120  </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                           Lecturers
                            
                        </div>
                    </div>
                     <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-hospital-o fa-5x"></i>
                            <h3>120  </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                           Clinical Instructor
                            
                        </div>
                    </div>
              

















    <?= $this->Html->script('/assets/js/custom.js') ?>

              <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>