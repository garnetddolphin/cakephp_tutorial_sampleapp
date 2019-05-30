<div class="customers form">
	<?= $this->Form->create($customer) ?>
		<fieldset>
			<legend><?= __('Add Customer') ?></legend>
			<?= $this->Form->control('first_name') ?>
			<?= $this->Form->control('last_name') ?>
			<?= $this->Form->control('telephone_number') ?>
			<?= $this->Form->control('mailaddress') ?>
		</fieldset>
	<?= $this->Form->button(__('Submit')); ?>
	<?= $this->Form->end() ?>
</div>