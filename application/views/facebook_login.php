<?php 
echo "<pre>";
print_r($user_profile);
echo "</pre>";

$user = $this->facebook->getUser();
if($user <> "")
{
	?>
	<a href="<?=BASE_URL?>upload/facebook_logout">Logout</a>
	<?php
}else{
	?>
	<a href="#" onclick="popup('<?php echo $login_url; ?>')" title="Login with Facebook"><img src="<?=IMAGES?>log_with_fb.png" /></a>
	<?php
}
?>
</span>
<script language="javascript">              
	function popup(url) {
		newwindow=window.open(url,'name','height=200,width=150');
		if (window.focus) {newwindow.focus()}
			return false;
	}

	window.onload = function(){
		window.opener.location.reload(true);
		window.close();
	}();
</script>
?>
