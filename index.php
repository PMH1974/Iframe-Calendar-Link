<!DOCTYPE html>
<?php
//Iframe Calendar Link
//by Pete Holden

//Work out if combos have been changed
if (isset($_POST['YearCombo']) && isset($_POST['MonthCombo'])){
        //Set year and month to selected values
        $SelectedYear = $_POST['YearCombo'];
        $SelectedMonth = $_POST['MonthCombo'];
} else {
        //Or just use todays date
        $SelectedYear = date("Y");
        $SelectedMonth = date("m");
}

//This sets a date range of 2 years either way, from todays year, used in YearCombo dropdown, add more for more range
$YearComboData1 = date("Y")-2;
$YearComboData2 = date("Y")-1;
$YearComboData3 = date("Y");
$YearComboData4 = date("Y")+1;
$YearComboData5 = date("Y")+2;

//Work out the calendar header and variables (which is sent on form submit to Databox.php)
$CalendarHeader = date("F-Y",strtotime("1-$SelectedMonth-$SelectedYear"));
$MonthStartDay = date("w",strtotime("$SelectedYear-$SelectedMonth-1"));
$DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$SelectedMonth,$SelectedYear);

//Not so proud of this bit, very bulky and would work much better with a loop, but this seems to mess with formats and onclicks and allsorts of issues
//So i just gave up and used switch, a case for each day of the week for the 42 boxes, looping this is just way too confusing for me

switch ($MonthStartDay) {
    case 1:
        //Set the obvious days up to 28
        $Box1 = 1;
        $Box2 = 2;
        $Box3 = 3;
        $Box4 = 4;
        $Box5 = 5;
        $Box6 = 6;
        $Box7 = 7;
        $Box8 = 8;
        $Box9 = 9;
        $Box10 = 10;
        $Box11 = 11;
        $Box12 = 12;
        $Box13 = 13;
        $Box14 = 14;
        $Box15 = 15;
        $Box16 = 16;
        $Box17 = 17;
        $Box18 = 18;
        $Box19 = 19;
        $Box20 = 20;
        $Box21 = 21;
        $Box22 = 22;
        $Box23 = 23;
        $Box24 = 24;
        $Box25 = 25;
        $Box26 = 26;
        $Box27 = 27;
        $Box28 = 28;
        //Work out if the next 3 days are valid
        if($Box28 +1 > $DaysInMonth) { $Box29 = NULL; } else { $Box29 = 29; }
        if($Box28 +2 > $DaysInMonth) { $Box30 = NULL; } else { $Box30 = 30; }
        if($Box28 +3 > $DaysInMonth) { $Box31 = NULL; } else { $Box31 = 31; }
        if($Box28 +4 > $DaysInMonth) { $Box32 = NULL; } else { $Box32 = NULL; }
        if($Box28 +5 > $DaysInMonth) { $Box33 = NULL; } else { $Box33 = NULL; }
        if($Box28 +6 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = NULL; }
        if($Box28 +7 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = NULL; }
        if($Box28 +8 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = NULL; }
        if($Box28 +9 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box28 +10 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box28 +11 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box28 +12 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box28 +13 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box28 +14 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;
    
    case 2:
        $Box1 = NULL;
        $Box2 = 1;
        $Box3 = 2;
        $Box4 = 3;
        $Box5 = 4;
        $Box6 = 5;
        $Box7 = 6;
        $Box8 = 7;
        $Box9 = 8;
        $Box10 = 9;
        $Box11 = 10;
        $Box12 = 11;
        $Box13 = 12;
        $Box14 = 13;
        $Box15 = 14;
        $Box16 = 15;
        $Box17 = 16;
        $Box18 = 17;
        $Box19 = 18;
        $Box20 = 19;
        $Box21 = 20;
        $Box22 = 21;
        $Box23 = 22;
        $Box24 = 23;
        $Box25 = 24;
        $Box26 = 25;
        $Box27 = 26;
        $Box28 = 27;
        $Box29 = 28;
        if($Box29 +1 > $DaysInMonth) { $Box30 = NULL; } else { $Box30 = 29; }
        if($Box29 +2 > $DaysInMonth) { $Box31 = NULL; } else { $Box31 = 30; }
        if($Box29 +3 > $DaysInMonth) { $Box32 = NULL; } else { $Box32 = 31; }
        if($Box29 +4 > $DaysInMonth) { $Box33 = NULL; } else { $Box33 = NULL; }
        if($Box29 +5 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = NULL; }
        if($Box29 +6 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = NULL; }
        if($Box29 +7 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = NULL; }
        if($Box29 +8 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box29 +9 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box29 +10 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box29 +11 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box29 +12 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box29 +13 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;

    case 3:
        $Box1 = NULL;
        $Box2 = NULL;
        $Box3 = 1;
        $Box4 = 2;
        $Box5 = 3;
        $Box6 = 4;
        $Box7 = 5;
        $Box8 = 6;
        $Box9 = 7;
        $Box10 = 8;
        $Box11 = 9;
        $Box12 = 10;
        $Box13 = 11;
        $Box14 = 12;
        $Box15 = 13;
        $Box16 = 14;
        $Box17 = 15;
        $Box18 = 16;
        $Box19 = 17;
        $Box20 = 18;
        $Box21 = 19;
        $Box22 = 20;
        $Box23 = 21;
        $Box24 = 22;
        $Box25 = 23;
        $Box26 = 24;
        $Box27 = 25;
        $Box28 = 26;
        $Box29 = 27;
        $Box30 = 28;
        if($Box30 +1 > $DaysInMonth) { $Box31 = NULL; } else { $Box31 = 29; }
        if($Box30 +2 > $DaysInMonth) { $Box32 = NULL; } else { $Box32 = 30; }
        if($Box30 +3 > $DaysInMonth) { $Box33 = NULL; } else { $Box33 = 31; }
        if($Box30 +4 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = NULL; }
        if($Box30 +5 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = NULL; }
        if($Box30 +6 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = NULL; }
        if($Box30 +7 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box30 +8 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box30 +9 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box30 +0 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box30 +11 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box30 +12 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;

    case 4:
        $Box1 = NULL;
        $Box2 = NULL;
        $Box3 = NULL;
        $Box4 = 1;
        $Box5 = 2;
        $Box6 = 3;
        $Box7 = 4;
        $Box8 = 5;
        $Box9 = 6;
        $Box10 = 7;
        $Box11 = 8;
        $Box12 = 9;
        $Box13 = 10;
        $Box14 = 11;
        $Box15 = 12;
        $Box16 = 13;
        $Box17 = 14;
        $Box18 = 15;
        $Box19 = 16;
        $Box20 = 17;
        $Box21 = 18;
        $Box22 = 19;
        $Box23 = 20;
        $Box24 = 21;
        $Box25 = 22;
        $Box26 = 23;
        $Box27 = 24;
        $Box28 = 25;
        $Box29 = 26;
        $Box30 = 27;
        $Box31 = 28;
        if($Box31 +1 > $DaysInMonth) { $Box32 = NULL; } else { $Box32 = 29; }
        if($Box31 +2 > $DaysInMonth) { $Box33 = NULL; } else { $Box33 = 30; }
        if($Box31 +3 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = 31; }
        if($Box31 +4 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = NULL; }
        if($Box31 +5 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = NULL; }
        if($Box31 +6 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box31 +7 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box31 +8 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box31 +9 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box31 +10 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box31 +11 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;

    case 5:
        $Box1 = NULL;
        $Box2 = NULL;
        $Box3 = NULL;
        $Box4 = NULL;
        $Box5 = 1;
        $Box6 = 2;
        $Box7 = 3;
        $Box8 = 4;
        $Box9 = 5;
        $Box10 = 6;
        $Box11 = 7;
        $Box12 = 8;
        $Box13 = 9;
        $Box14 = 10;
        $Box15 = 11;
        $Box16 = 12;
        $Box17 = 13;
        $Box18 = 14;
        $Box19 = 15;
        $Box20 = 16;
        $Box21 = 17;
        $Box22 = 18;
        $Box23 = 19;
        $Box24 = 20;
        $Box25 = 21;
        $Box26 = 22;
        $Box27 = 23;
        $Box28 = 24;
        $Box29 = 25;
        $Box30 = 26;
        $Box31 = 27;
        $Box32 = 28;
        if($Box32 +1 > $DaysInMonth) { $Box33 = NULL; } else { $Box33 = 29; }
        if($Box32 +2 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = 30; }
        if($Box32 +3 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = 31; }
        if($Box32 +4 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = NULL; }
        if($Box32 +5 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box32 +6 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box32 +7 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box32 +8 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box32 +9 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box32 +10 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;

    case 6:
        $Box1 = NULL;
        $Box2 = NULL;
        $Box3 = NULL;
        $Box4 = NULL;
        $Box5 = NULL;
        $Box6 = 1;
        $Box7 = 2;
        $Box8 = 3;
        $Box9 = 4;
        $Box10 = 5;
        $Box11 = 6;
        $Box12 = 7;
        $Box13 = 8;
        $Box14 = 9;
        $Box15 = 10;
        $Box16 = 11;
        $Box17 = 12;
        $Box18 = 13;
        $Box19 = 14;
        $Box20 = 15;
        $Box21 = 16;
        $Box22 = 17;
        $Box23 = 18;
        $Box24 = 19;
        $Box25 = 20;
        $Box26 = 21;
        $Box27 = 22;
        $Box28 = 23;
        $Box29 = 24;
        $Box30 = 25;
        $Box31 = 26;
        $Box32 = 27;
        $Box33 = 28;
        if($Box33 +1 > $DaysInMonth) { $Box34 = NULL; } else { $Box34 = 29; }
        if($Box33 +2 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = 30; }
        if($Box33 +3 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = 31; }
        if($Box33 +4 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = NULL; }
        if($Box33 +5 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box33 +6 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box33 +7 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box33 +8 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box33 +9 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;
        
    default:
        $Box1 = NULL;
        $Box2 = NULL;
        $Box3 = NULL;
        $Box4 = NULL;
        $Box5 = NULL;
        $Box6 = NULL;
        $Box7 = 1;
        $Box8 = 2;
        $Box9 = 3;
        $Box10 = 4;
        $Box11 = 5;
        $Box12 = 6;
        $Box13 = 7;
        $Box14 = 8;
        $Box15 = 9;
        $Box16 = 10;
        $Box17 = 11;
        $Box18 = 12;
        $Box19 = 13;
        $Box20 = 14;
        $Box21 = 15;
        $Box22 = 16;
        $Box23 = 17;
        $Box24 = 18;
        $Box25 = 19;
        $Box26 = 20;
        $Box27 = 21;
        $Box28 = 22;
        $Box29 = 23;
        $Box30 = 24;
        $Box31 = 25;
        $Box32 = 26;
        $Box33 = 27;
        $Box34 = 28;
        if($Box34 +1 > $DaysInMonth) { $Box35 = NULL; } else { $Box35 = 29; }
        if($Box34 +2 > $DaysInMonth) { $Box36 = NULL; } else { $Box36 = 30; }
        if($Box34 +3 > $DaysInMonth) { $Box37 = NULL; } else { $Box37 = 31; }
        if($Box34 +4 > $DaysInMonth) { $Box38 = NULL; } else { $Box38 = NULL; }
        if($Box34 +5 > $DaysInMonth) { $Box39 = NULL; } else { $Box39 = NULL; }
        if($Box34 +6 > $DaysInMonth) { $Box40 = NULL; } else { $Box40 = NULL; }
        if($Box34 +7 > $DaysInMonth) { $Box41 = NULL; } else { $Box41 = NULL; }
        if($Box34 +8 > $DaysInMonth) { $Box42 = NULL; } else { $Box42 = NULL; }
        break;
}

?>
<head>
    
</head>
<body>
<script>
function SetPage(url)
{
 
document.getElementById("Databox").setAttribute("src", url);
 
}
</script>

<form id="CalendarForm" name="CalendarForm" method="POST" action="index.php">
<div align="center">
<table border="0" width="99%" cellspacing="3" cellpadding="0">
	<tr>
		<td width="360">
		<table border="0" width="350" cellspacing="0" cellpadding="0">
			<tr>
				<td width="30%" align="center">

		<p align="center">

		<font face="Arial">

		<select onchange="CalendarForm.submit()" size="1" name="YearCombo">
		<option selected value="<?= $SelectedYear; ?>"><?= $SelectedYear; ?></option>
		<option value="<?= $YearComboData1; ?>"><?= $YearComboData1; ?></option>
		<option value="<?= $YearComboData2; ?>"><?= $YearComboData2; ?></option>
		<option value="<?= $YearComboData3; ?>"><?= $YearComboData3; ?></option>
		<option value="<?= $YearComboData4; ?>"><?= $YearComboData4; ?></option>
		<option value="<?= $YearComboData5; ?>"><?= $YearComboData5; ?></option>
		    
		    
		</select></font></td>
				<td width="40%" align="center"><?= $CalendarHeader; ?></td>
				<td width="30%" align="center"><font face="Arial"><select onchange="CalendarForm.submit()" size="1" name="MonthCombo">
		<option selected="<?= $SelectedMonth; ?>"><?= $SelectedMonth; ?></option>
		<option value="1">Jan</option>
		<option value="2">Feb</option>
		<option value="3">Mar</option>
		<option value="4">Apr</option>
		<option value="5">May</option>
		<option value="6">Jun</option>
		<option value="7">Jul</option>
		<option value="8">Aug</option>
		<option value="9">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>
		
		</select></font></td>
			</tr>
		</table>
		</td>
		<td rowspan="2">
<iframe src="databox.php?Calendarheader=<?= $CalendarHeader; ?>" height="410" width="99%" name="I1" frameborder="0" id="Databox"></iframe>
		</td>
	</tr>
	
	<tr>
		<td><table border="1" cellspacing="0" bordercolor="#000000" width="350px">
	<tr>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">MON</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">TUE</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">WED</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">THU</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">FRI</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">SAT</font></td>
		<td height="50" width="50" align="center" bgcolor="#000000">
		<font face="Arial" color="#FFFFFF">SUN</font></td>
	</tr>
	<!-- This terrible mass of code simply checks to see if the box number has a value and then checks if it's todays date, then it opens Databox.php?Day=[$Box Number] into the iframe -->
	<!-- It also echos the BGCOLOR either Black for nothing, Blue for Today and White for Any other calendar day and disables any clicks on blank days-->
	<tr>
	    <td <?php if(empty($Box1)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box1")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box1")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box1")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box1; ?></font></td>
        <td <?php if(empty($Box2)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box2")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box2")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box2")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box2; ?></font></td>
        <td <?php if(empty($Box3)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box3")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box3")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box3")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box3; ?></font></td>
        <td <?php if(empty($Box4)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box4")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box4")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box4")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box4; ?></font></td>
        <td <?php if(empty($Box5)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box5")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box5")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box5")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box5; ?></font></td>
        <td <?php if(empty($Box6)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box6")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box6")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box6")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box6; ?></font></td>
        <td <?php if(empty($Box7)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box7")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box7")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box7")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box7; ?></font></td>
	</tr>
	<tr>
    	<td <?php if(empty($Box8)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box8")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box8")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box8")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box8; ?></font></td>
        <td <?php if(empty($Box9)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box9")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box9")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box9")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box9; ?></font></td>
        <td <?php if(empty($Box10)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box10")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box10")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box10")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box10; ?></font></td>
        <td <?php if(empty($Box11)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box11")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box11")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box11")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box11; ?></font></td>
        <td <?php if(empty($Box12)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box12")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box12")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box12")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box12; ?></font></td>
        <td <?php if(empty($Box13)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box13")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box13")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box13")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box13; ?></font></td>
        <td <?php if(empty($Box14)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box14")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box14")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box14")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box14; ?></font></td>
	</tr>
	<tr>
		<td <?php if(empty($Box15)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box15")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box15")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box15")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box15; ?></font></td>
        <td <?php if(empty($Box16)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box16")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box16")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box16")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box16; ?></font></td>
        <td <?php if(empty($Box17)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box17")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box17")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box17")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box17; ?></font></td>
        <td <?php if(empty($Box18)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box18")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box18")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box18")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box18; ?></font></td>
        <td <?php if(empty($Box19)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box19")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box19")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box19")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box19; ?></font></td>
        <td <?php if(empty($Box20)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box20")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box20")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box20")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box20; ?></font></td>
        <td <?php if(empty($Box21)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box21")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box21")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box21")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box21; ?></font></td>
	</tr>
	<tr>
        <td <?php if(empty($Box22)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box22")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box22")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box22")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box22; ?></font></td>
        <td <?php if(empty($Box23)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box23")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box23")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box23")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box23; ?></font></td>
        <td <?php if(empty($Box24)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box24")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box24")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box24")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box24; ?></font></td>
        <td <?php if(empty($Box25)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box25")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box25")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box25")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box25; ?></font></td>
        <td <?php if(empty($Box26)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box26")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box26")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box26")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box26; ?></font></td>
        <td <?php if(empty($Box27)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box27")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box27")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box27")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box27; ?></font></td>
        <td <?php if(empty($Box28)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box28")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box28")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box28")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box28; ?></font></td>
	</tr>
	<tr>
		<td <?php if(empty($Box29)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box29")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box29")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box29")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box29; ?></font></td>
        <td <?php if(empty($Box30)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box30")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box30")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box30")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box30; ?></font></td>
        <td <?php if(empty($Box31)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box31")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box31")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box31")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box31; ?></font></td>
        <td <?php if(empty($Box32)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box32")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box32")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box32")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box32; ?></font></td>
        <td <?php if(empty($Box33)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box33")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box33")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box33")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box33; ?></font></td>
        <td <?php if(empty($Box34)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box34")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box34")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box34")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box34; ?></font></td>
        <td <?php if(empty($Box35)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box35")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box35")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box35")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box35; ?></font></td>
	</tr>
	<tr>
		<td <?php if(empty($Box36)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box36")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box36")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box36")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box36; ?></font></td>
        <td <?php if(empty($Box37)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box37")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box37")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box37")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box37; ?></font></td>
        <td <?php if(empty($Box38)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box38")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box38")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box38")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box38; ?></font></td>
        <td <?php if(empty($Box39)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box39")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box39")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box39")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box39; ?></font></td>
        <td <?php if(empty($Box40)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box40")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box40")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box40")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box40; ?></font></td>
        <td <?php if(empty($Box41)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box41")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box41")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box41")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box41; ?></font></td>
        <td <?php if(empty($Box42)) { echo "bgcolor=#333"; } elseif(date("Y-m-d",strtotime("$SelectedYear-$SelectedMonth-$Box42")) == date("Y-m-d")) { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box42")."') bgcolor=lightskyblue"; } else { echo "onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$Box42")."') bgcolor=whitesmoke"; } ?> height="50" width="50" align="left" valign="top">
		<font face="Arial"><?= $Box42; ?></font></td>
	</tr>
	</form>
	    
        
</table>
</td>
	</tr>
</table>

</div>
</body>
</html>
