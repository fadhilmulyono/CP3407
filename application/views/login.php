<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login | Stayscapes Guest House Manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="<?php echo base_url(); ?>Login/authenticate" method="post">
					<label for="username">Login:</label>
					<input id="username" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="password" name="password" type="password" class="text" />
					<div class="sep">
                        <?php echo validation_errors(); ?><?php if (isset($loginerror)) { ?><?php echo $loginerror; ?><?php } ?>
                    </div>
					<button type="submit" class="ok">Login</button>
				</form>
			</div>
			<div class="footer">&copy; 2021 <a href="">Stayscapes Guest House</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>