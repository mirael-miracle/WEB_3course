<!DOCTYPE html>
<html>
<head>
	<title>LB12</title>
</head>
<body>

{foreach from=$people key=k item=p}
		{$k}={$p}<br/>
{/foreach}
{$shock}

<br>
echo "<table><tr><th>First name</th><th>Last name</th><th>Email</th><th>Phone</th><th>City</th>";
<tr>
{$first_name}
</tr>
<tr>
{$last_name}
</tr>
<tr>
{$email}
</tr>
<tr>
{$number}
</tr>
<tr>
{$city}
</tr>
</table>
</body>
</html>