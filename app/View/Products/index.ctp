<div class="subscriptions">

	<header>

		<div class="btn-group pull-right">
			<?php echo $this->Html->link(__('Add'), array('action' => 'add'), array('class' => 'btn')); ?>
		</div>

		<h1><?php echo __('Products'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('entity_id'); ?></th>
				<th><?php echo $this->Paginator->sort('created_at'); ?></th>
				<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product): ?>
				<tr>
					<td><?php echo h($product['Product']['entity_id']); ?>&nbsp;</td>
					<td><?php echo h($product['Product']['created_at']); ?>&nbsp;</td>
					<td><?php echo h($product['Product']['updated_at']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['entity_id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['entity_id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['entity_id']), null, __('Are you sure you want to delete # %s?', $product['Product']['entity_id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
