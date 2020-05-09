<html>
<br>
<head>
<div align="center"> <h1>Turn LED ON/OFF using apache server on Raspberry pi</h1>
</div>
</head>

<?php

if (isset($_POST['LedON']))
{
shell_exec("/var/www/html/./ledon.sh");
}
if (isset($_POST['LedOFF'])) 
{
shell_exec("/var/www/html/./ledoff.sh");
}
?>
<br>

<body>
    <div align="center">
    <form method="post">
    <button id="search" class="btn" name="LedON">
    <h3>LED ON</h3>
    </button>
    <button id="search" class="btn" name="LedOFF">
    <h3>LED OFF</h3></button><br>

    </form>
    </div>
</body>
</html>
