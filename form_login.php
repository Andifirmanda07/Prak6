<?php 
echo "Login";
<form method = post action = cek login.php>

<table>
<tr><td>User Name</td><td> : <input name='id_user'type='text'></td></tr>
<tr><td>Password</td><td> : <input name='paswd'type='text'></td></tr>
<tr><td>Captcha<br>
<img src='captcha.php'/></td><td> :<input type='text' name='captcha_code'></td></tr>
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>
</table>
</form>;
 ?>