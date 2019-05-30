<h1>Customers</h1>
<table>
	<tr>
		<th>Id</th>
		<th>First name</th>
		<th>Last name</th>
	</tr>
	<?php foreach ($customers as $customer): ?>
		<tr>
			<td><?= $this->Html->link($customer->id, ['action' => 'view', $customer->id]) ?></td>
			<td><?= $customer->first_name ?></td>
			<td><?= $customer->last_name ?></td>
		</tr>
	<?php endforeach; ?>
</table>