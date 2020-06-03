<h1>All Issues</h1>
<table>
	<tr>
		<th>Issue Title</th>
		<th>Register Date</th>
		<th>Status</th>
	</tr>
    <?php foreach ($data['issues'] as $issue) : ?>
		<tr>
			<th><?= $issue->title ?></th>
			<th><?= $issue->registerDateTime ?></th>
			<th><?= $issue->status?></th>
		</tr>
    <?php endforeach; ?>
</table>