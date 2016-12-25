
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
                                <form role="form">
                                  <?= $this->Form->create($user) ?>
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <?php echo $this->Form->input('fname',array('class'=>'form-control','placeholder'=>'Please enter the first name', 'label'=>false)); ?>

                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <?php echo $this->Form->input('lname',array('class'=>'form-control','placeholder'=>'Please enter the last name', 'label'=>false)); ?>
                                            
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <?php  echo $this->Form->input('position',array('class'=>'form-control','placeholder'=>'Please enter position', 'label'=>false)); ?>
                                           
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <?php   echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Please enter email', 'label'=>false)); ?>
                                            
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                             <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Please enter password', 'label'=>false)); ?>
                                        
                                        </div>

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"  ></i></span>
                                             <?php 
                                             $roles = ['2' => 'Lecturer','3' => 'Clinical Instructor'];
                                             echo $this->Form->label('role', false);
                                             echo $this->Form->select('role',$roles,array('class'=>'form-control','empty'=>'-Pick pick your role-')); ?>
                                        
                                        </div>
                                        <div align="center">
                                       <?php echo $this->Form->button(__('Register', array('class'=>'btn btn-success'))) ?>
                                       </div>
                                       <?= $this->Form->end() ?>
                                     
                                    <hr />
                                    Already Registered ?  <a href="users/login" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>