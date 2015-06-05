<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Devbox</title>
</head>
<body>
<h1>Welcome to devbox</h1>

<?php
error_reporting(-1);
$sites = shell_exec( 'ls /var/www/sites' );
$sites = trim( $sites );
$sites = preg_split( '/\n/', $sites );

$ip = '192.168.59.103';
?>
<h2>Sites</h2>
<ul>

	<?php foreach ( $sites as $site ) : ?>
		<?php
		$url = sprintf( 'http://%s.%s.xip.io', $site, $ip );
		?>
		<li>
			<?php if ( file_exists( '/var/www/sites/' . $site . '/public' ) ) : ?>
				<a href="<?php echo $url; ?>">
					<?php echo $site; ?>
				</a>
			<?php else: ?>
				<?php echo $site; ?> (No public folder found)
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>
</body>
</html>
