
{include file='header.tpl'}
{if !empty($error)} <p> {$error} </p>{/if}
<form action="" method="post">
	<label>UserName  :</label><input type="text" name="username" class="box"/><br /><br />
	<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
	<input type="submit" value=" Submit "/><br />
</form>

{include file='footer.tpl'}
