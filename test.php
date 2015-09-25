<?php

CREATE TABLE `Kasutajad` (
`id` int(4) NOT NULL auto_increment,
`email` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;
-- 
-- Dumping data for table `members`
--
INSERT INTO `members` VALUES (1, 'john', '1234');

?>



<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">

<tr>
	<td colspan="3"><strong> Sisselogimine </strong></td>
</tr>

<tr>
	<td width="78">Kasutajanimi</td>
<td width="294"><input name="email" type="email" placeholder="E-post" >

</td>
</tr>
<tr>
<td>Parool</td>
<td><input name="password" type="password" placeholder="Parool" ></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" placeholder="Logi sisse" ></td>
</tr>

</table>
</td>
</form>
</tr>
</table>