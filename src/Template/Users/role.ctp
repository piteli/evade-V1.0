<div class="row">
	<div class="large-7 columns">
	</div>
	<div class="large-5 columns">
		<div class="row collapse postfix-round">
		<div class="small-10 columns">
		<?= $this->Form->create();?>
			<?= $this->Form->input('search',['label' => false]);?>
			</div>

			<div class="small-2 columns"
			<?= $this->Form->submit('search', ['class' => 'button postfix']);?>
			</div>
			</div>
			</div>
			</div>
		<?= $this->Form->end();?>
</div>

<?php
if(!empty($users)){
?>
		<table class="large-11 columns" cellpadding="0" cellspacing="0" >
		<thead>
			<tr>
				<th> NO. </th>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Email </th>
			</tr>
		</thead>
		<tbody>

<?php
	$i = 1;
	foreach($users as $user){
?>
	<tr>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $user['fname'] ?> </td>
		<td> <?php echo $user['lname'] ?> </td>
		<td> <?php echo $user['email'] ?> </td>
	</tr>

<?php

	$i++;
	}
?>
	<tbody>
	</table>
<?php

}
?>