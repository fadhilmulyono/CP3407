<?php if(!$this->session->has_userdata('username')){
    redirect(base_url() . "Login");
} ?>
<!doctype html>
<html> 
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Stayscapes Guest House Manager</title> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/navi.css" media="screen" />
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/img/admin-button-icon-hi.png"/>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/togel_menu.js"></script>
<style>.hide{ display:none !important;  /*visibility:hidden;*/ } </style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, 
                    <strong><?php if($this->session->has_userdata("username")) {
                        echo $this->session->userdata("username"); 
                    } ?></strong> [ <a href="<?php echo base_url(); ?>Login/logout">Logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<span style="float:left;">Today :</span><p id="date"><strong></strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> 
			<ul>
                <li class="upp"><a href="<?php echo base_url(); ?>Admin">Dashboard</a>
				</li>
				<li class="upp"><a href="<?php echo base_url(); ?>Admin/rooms">Rooms</a>
				</li>
				<li class="upp "><a href="<?php echo base_url(); ?>Admin/bookings">Bookings</a>
				</li>
				<li class="upp "><a href="<?php echo base_url(); ?>Admin/tenants">Tenants</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
                    <li class="b1"><a class="icon config" href="<?php echo base_url(); ?>Admin">Dashboard</a></li>
					<li class="b2"><a class="icon view_page" href="<?php echo base_url(); ?>Admin/rooms">Rooms Manager</a></li>
					<li class="b2"><a class="icon page" href="<?php echo base_url(); ?>Admin/bookings">Bookings Manager</a></li>
					<li class="b2"><a class="icon users" href="<?php echo base_url(); ?>Admin/tenants">Tenants Manager</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
		  <div class="clear"></div>
			<div class="full_w">
            <?php if (isset($content_page)){
                $this->load->view($content_page);
            } ?>
	        </div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<div class="left">
			<p>Content Management Systems: <a href="<?php echo base_url(); ?>Admin">Stayscapes Guest House</a></p>
		</div>
		<div class="right">
			<p>@ 2021 </p>
		</div>
	</div>
</div>
</body>
<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
</html>
