<html>
<head><title></title>
<link REL="SHORTCUT ICON" HREF="favicon.ico">
<link rel="stylesheet" type="text/css" href="styles.css" /> 
</head>
<body>
<div class="wrapper">
		<table  width="100%">
<div id="header1" >
<p> WELCOME STAFFS </p>
</div></table></table>
<tr><td width="100%"><?php include("staffmenu.php"); ?></td></tr></table>
<table width="100%" height="auto">
<tr><td>
	<?php
if(@$_GET['link']=="dutyview"){ include("teachersdutyview.php");
}elseif(@$_GET['link']=="classview"){ include("classview.php");

}elseif(@$_GET['link']=="viewresults"){ include("teacherresultsview.php");
}elseif(@$_GET['link']=="view2"){ include("staffsevents.php");
}elseif(@$_GET['link']=="kcse"){ include("kresults.php");
}elseif(@$_GET['link']=="teachersview"){ include("teachersviewclass.php");
}else{
include("teachers.php");
}
?></td>

</tr></table>
<?php include("footer.php"); ?>
</div>
</body>
</html>
