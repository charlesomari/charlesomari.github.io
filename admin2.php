<html>
<head><title></title>
<link REL="SHORTCUT ICON" HREF="favicon.ico">
<link rel="stylesheet" type="text/css" href="styles.css" /> 
<style type="text/css">
.hyena{
  background-image: url("");

  min-height: 440px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size:100%;
  position: relative;
}
</style>
</head>
<body>
<div class="wrapper">
		<table  width="100%">
<div id="header1" >
<p> WELCOME ADMIN TO LERTZ HIGH SCHOOL DATABASE CENTRE </p>
</div></table></table>
<tr><td width="100%"><?php include("adminmenu.php"); ?></td></tr></table>
<table width="100%">
<tr>
<td>
	<?php
if(@$_GET['link']=="create"){ include("studentacct.php");
}elseif(@$_GET['link']=="view"){ include("studentview.php");
}elseif(@$_GET['link']=="view1"){ include("adminclassview.php");
}elseif(@$_GET['link']=="classview"){ include("adminclassview.php");
}elseif(@$_GET['link']=="events"){ include("events.php");
}elseif(@$_GET['link']=="results"){ include("adminresultsupload.php");
}elseif(@$_GET['link']=="viewresults"){ include("marksview.php");
}elseif(@$_GET['link']=="asgn"){ include("duty.php");
}elseif(@$_GET['link']=="new"){ include("adminviewevents.php");
}elseif(@$_GET['link']=="add"){ include("studentform.php");
}elseif(@$_GET['link']=="class"){ include("classassigned.php");
}elseif(@$_GET['link']=="fee"){ include("feesstructure.php");
}elseif(@$_GET['link']=="bal"){ include("feesbalance.php");
}elseif(@$_GET['link']=="dutyview"){ include("dutyview.php");
}elseif(@$_GET['link']=="feesview"){ include("feesstructureview.php");
}elseif(@$_GET['link']=="balview"){ include("balanceview.php");
}elseif(@$_GET['link']=="upload"){ include("kcseresults.php");
}elseif(@$_GET['link']=="uploadview"){ include("kcseresultsview.php");
}elseif(@$_GET['link']=="overal"){ include("adminoverallclass.php");
}elseif(@$_GET['link']=="overallview"){ include("classoverallview.php");



}else{
include("v2.php");
}
?>
</td>	

</tr></table>
<?php include("footer.php"); ?>
</div>
</body>
</html>
