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

</head><body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Evade : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details to Login </strong>  
                            </div>
                            <div class="panel-body">
                               <?=$this->Form->create() ?>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                             <?=$this->Form->input('email', array('class'=>'form-control','label' => false, 'placeholder'=> 'Enter your email'))?>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                             <?=$this->Form->input('password', array('class'=>'form-control','label' => false, 'placeholder'=> 'Enter your password'))?>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="/users/mailpass" >Forgot password ? </a> 
                                            </span>
                                        </div>
                                      <div align="left"><?= $this->Form->button('Login',['type'=>'submit','class'=>'btn btn-default btn-sm', 'style'=>'float:center']); ?> 
                                      
                                     
                                    <hr />
                                    Not register ? <a href="/users/register" >Register here </a> 
                                    <?=$this->Form->end() ?>

                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
