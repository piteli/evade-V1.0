<!-- page content -->
<div class="panel panel-primary">
    <div class="panel-heading"><h4><i class="fa fa-user-plus"></i> Create a new user</h4></div>
                        

    <div class="panel-body">
              <div class="col-md-6">
                      <?= $this->Form->create($user) ?>
                        <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?php echo $this->Form->input('fname' , ['placeholder '=>'First name', 'class'=>'form-control', 'label'=>false]); ?>
                        </div>
                        <br>
                         <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <?php echo $this->Form->input('email',array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Email address')); ?>
                        </div>
                              <br>
                       <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                              <?php echo $this->Form->input('password',array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Password')); ?>
                        </div>
                              <br>
                      
              </div>
                  <div class="col-md-6">

                        <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                             <?php echo $this->Form->input('lname',array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Last name')); ?> 
                         </div>     
                              <br>

                        
                        <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                              <?php echo $this->Form->input('position',array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Grade')); ?>
                        </div>
                        <br>
                        <div class="form-group input-group">
                          <span class="input-group-addon"><i class="fa fa-key"></i></span>
                          <?php  $roles = ['2' => 'Lecturer','3' => 'Clinical Instructor'];
                            echo $this->Form->label('role', false);
                            echo $this->Form->select('role',$roles,array('empty'=>'-Pick Role', 'class'=>'form-control')); ?>               
</div>
            </div>

 

             <br><br><br>


                             
                        </div>
                        <div class="panel-footer">
                                                    <div align="right">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                        
                                        </div>
                        </div>
                          <?= $this->Form->end() ?>
                    </div>


    


        