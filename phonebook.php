<html>
<head>
<title>Phonebook</title>
</head>
<body>
<?php // Connects to your Database

//TODO --USE FREEPBX DATA
//require_once("/etc/freepbx.conf");
//$mysqli = new mysqli($amp_conf['AMPDBHOST'], $amp_conf['AMPDBUSER'], $amp_conf['AMPDBPASS'], $amp_conf['AMPDBNAME']);

//MYSQL conect  
mysql_connect("localhost", "freepbxuser", "password") or die(mysql_error());
mysql_select_db("asterisk") or die(mysql_error());

//Query
$data = mysql_query("SELECT * FROM users ORDER BY name ASC") or die(mysql_error());
Print "<h2>PhoneBook</h2><p>";
Print "<table border cellpadding=3 width=50%;>";
Print "<tr><th width=150>Name</th><th width=100>Extension</th><th width=200>Callerid</th></tr>";
//Main data
while($info = mysql_fetch_array( $data ))
{
Print "<tr><td align=center>".$info['name'] . "</td> ";
Print "<td align=center>".$info['extension'] . "</td> ";
Print "<td align=center>".$info['outboundcid'] . "</td>";
}
Print "</table>";
?>
</body>
</html>
