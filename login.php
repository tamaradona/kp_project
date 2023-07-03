<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />	
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0" />
<link rel="stylesheet" href="login.css" media="screen">


</head>
<body class='login'>
$(if chap-id)
	<form name="sendin" action="auth/auth.php" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="$(link-orig)" />
		<input type="hidden" name="popup" value="true" />
	</form>
	
	<script type="text/javascript" src="md5.js"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('$(chap-id)' + document.login.password.value + '$(chap-challenge)');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
$(endif)


<form class="vertical-form" name="login" action="auth/auth.php" method="post" background="#A03472"
	$(if chap-id) onSubmit="return doLogin()" $(endif)>
<input type="hidden" name="dst" value="$(link-orig)" />
<input type="hidden" name="popup" value="true" />
<div style="margin:0;padding:50;display:inline"></div>

<center>
    <div id="head">
    </div>
    
    
<div id="box">
    <div id="userdiv"> </div>
    <legend>
    <p>Login  </p>
    </legend>
<div><input id="user" autocomplete="on" name="username" type="text" value="$(username)" placeholder="Username"/></div>
<div><input id="pass" autocomplete="off" name="password" type="password" label="false" placeholder="Password"/></div>
<div><input id="boton" name="submit" type="submit" value=" " /></div>
</div>
</center>




<div class='footer'>
<p>$(if trial == 'yes')Free trial available, <a href="auth/auth.php">click here</a>.$(endif)</p>
<p>$(if error)<span style="color: #ffffff; font-size: 16px">$(error)</span>$(endif)</p>
<br>
<p>
</p>
</div>
</form>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</body>
</html>
