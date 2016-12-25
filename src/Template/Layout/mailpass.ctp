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
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Evade : Recover Password</h2>
               
                <h5>( Enter your email address and we'll send you a link to reset your password. )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Forgot Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                  <?= $this->Form->create() ?>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                            <?php echo $this->Form->input('femail',array('class'=>'form-control', 'style'=>'width:300px','placeholder'=>'Email address','label'=>false)); ?>
                                           
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-clone"  ></i></span>
                                             <?php echo $this->Form->input('why',array('type'=>'textarea',' class'=>'form-control', 'style'=>'width:300px','placeholder'=>'Please tell us reason why you want to claim new pasword','label'=>false)); ?>
                                            
                                        </div>
                                 <div align="right">
                                             <?= $this->Form->submit('Submit',['class'=>'btn btn-default btn-sm', 'style'=>'float:center']); ?> </div>
                                       <?= $this->Form->end() ?>
                                      
                                     
                                    
                                    <hr />
                                    Not register ? <a href="/users/register" >Click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>