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
    <?= $this->Html->script('assets/js/dataTables/jquery.dataTables.js') ?>
    <?= $this->Html->script('assets/js/dataTables/dataTables.bootstrap.js') ?>
       <!-- TABLE STYLES-->
    <?= $this->Html->script('assets/js/dataTables/dataTables.bootstrap.css') ?>
    
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
     <?= $this->Html->script('/assets/js/custom.js') ?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Evade : Register</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
                                
                                  <?= $this->Form->create($user) ?>
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <?php echo $this->Form->input('fname',array('class'=>'form-control','placeholder'=>'First name', 'label'=>false)); ?>

                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"  ></i></span>
                                            <?php echo $this->Form->input('lname',array('class'=>'form-control','placeholder'=>'Last name', 'label'=>false)); ?>
                                            
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap"  ></i></span>
                                            <?php  echo $this->Form->input('position',array('class'=>'form-control','placeholder'=>'Position', 'label'=>false)); ?>
                                           
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                            <?php   echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email', 'label'=>false)); ?>
                                            
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                             <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Password', 'label'=>false)); ?>
                                        
                                        </div>

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                             <?php 
                                             $roles = ['2' => 'Lecturer','3' => 'Clinical Instructor'];
                                             echo $this->Form->label('role', false);
                                             echo $this->Form->select('role',$roles,array('class'=>'form-control','empty'=>'-Choose your role-')); ?>
                                        
                                        </div>
                                         <div align="right">
                                        

                                       <?= $this->Form->button('Register now',['class'=>'btn btn-default btn-sm', 'style'=>'float:center']); ?> 
                                       <?= $this->Form->end() ?>
                                       </div>
                                     
                                    <hr />
                                    Already registered ?  <a href="/users/login" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>