<table class="table table-hover">
	<thead>
		<tr>
			<td>Name</td>
			<td>Age</td>
		</tr>
	</thead>
<?php       foreach($userinfo as $key)
		{?><tr>
			<td><?= $key['Name']?></td>
			<td><?= $key['Age']?></td>
		</tr>
<?php       }?>
</table>