<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Payment Gateways'); ?></h2>

		
			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'paymentGateways', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Payment Gateways'), array('controller' => 'paymentGateways', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Add'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
		<?php echo $this->Form->create('PaymentGateway'); ?>
		<?php
			echo $this->Form->input('name');
		?>

		<?php
			echo $this->Form->button('Add', array('type' => 'submit', 'class' => 'btn'));
			echo $this->Form->end();
		?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('List Payment Gateways'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
<li><?php echo $this->Html->link(__('List User Payment Profiles'), array('controller' => 'user_payment_profiles', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New User Payment Profile'), array('controller' => 'user_payment_profiles', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>

</div></div>