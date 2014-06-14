Welcome back, <?= getName($_GET['id']); ?>

<?php

function getName($id)
{
	// Smoke and mirrors. Imagine a real data layer
	$names = array(
		'...you...',
		'Jonathan',
		'<script>alert("Not good.");</script>'
	);

	return array_key_exists($id, $names) ? $names[$id] : $names[0];
}
