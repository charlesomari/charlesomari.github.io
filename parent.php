<html>
<head><title></title>
<link REL="SHORTCUT ICON" HREF="favicon.ico">
<link rel="stylesheet" type="text/css" href="styles.css" /> 
</head>
<body>
<div class="wrapper">
		<table  width="100%">
<div id="header1" >
<h>Welcome Our Parent/Gurdian</h>
</div></table></table>
<tr><td width="100%"><?php include("parentmenu.php"); ?></td></tr></table>
<table width="100%" height="auto">
<tr>
<td valign="top">
<?php
if(@$_GET['link']=="feebal"){ include("studentfeesbal.php");
}elseif(@$_GET['link']=="feestructview"){ include("feesstructureview.php");
}elseif(@$_GET['link']=="pev"){ include("parentviewevents.php");
}elseif(@$_GET['link']=="viewresults"){ include("studentviewresults.php");
}elseif(@$_GET['link']=="kres"){ include("parentkcseview.php");

}else{
include("student.php");
}
?>
</td>

</tr></table>
<?php include("footer.php"); ?>
</div>
</body>
</html>
