<?php include 'templates/header.php'; ?>

		<h1>You submitted a POST request.</h1>
		<p>Here are details about the POST request.</p>
		<p><a href="/">Return to main page</a></p>
		<pre><code><?php print_r($request); ?></code></pre>

<?php include 'templates/footer.php'; ?>