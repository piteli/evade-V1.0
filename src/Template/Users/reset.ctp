<div class="row">
	<div class="large-7 columns">
	</div>
	<div class="large-5 columns">
		<div class="row collapse postfix-round">
		<div class="small-10 columns">
		<?= $this->Form->create();?>
			<?= $this->Form->input('search',['label' => "please enter the email address for us to send the reset link"]);?>
			</div>

			<div class="small-2 columns"
			<?= $this->Form->submit('reset', ['class' => 'button postfix']);?>
			</div>
			</div>
			</div>
			</div>
		<?= $this->Form->end();?>
</div>