<!DOCTYPE html>
<!--Iframe-Calendar-Link v0.0.2 - By Pete Holden-->
<html>
    <head></head>
    <body>
<div align="center">
<table width="99%">
    <tr><td>
        
            <style>
        table {
        border: 1px;
        padding: 0px;
        border-collapse: collapse;
        border-color: black;
        width: 358px;
        }
        .BoxFull {
        background-color: whitesmoke;    
        }
        .BoxFull:hover {
        background-color: lightskyblue;
        }
        .BoxEmpty {
        background-color: #333;    
        }
        .comborow th {
        background-color: white;    
        }
        .TodaysDate {
        background-color: lightblue;    
        }
        .TodaysDate:hover {
        background-color: lightskyblue;
        }
        td {
        
        height: 50px;
        width: 50px;
        vertical-align: top;
        text-align: left;
        }
        
        th {
        
        vertical-align: middle;
        text-align: center;
        color: #333;
        background-color: #f9ec14; 
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['YearCombo']) && isset($_POST['MonthCombo'])){
        //Set year and month to selected values
        $SelectedYear = $_POST['YearCombo'];
        $SelectedMonth = $_POST['MonthCombo'];
} else {
        //Or just use todays date
        $SelectedYear = date("Y");
        $SelectedMonth = date("m");
}

$MonthStartStr = strtotime("1-$SelectedMonth-$SelectedYear");
$MonthStart = date("d-m-Y",$MonthStartStr);
$DaysInMonth = date("t",$MonthStartStr);
$BlankDates = 42-$DaysInMonth;
$FirstDayNumber = date("w",$MonthStartStr);
$Todaydate = new DateTime();
$YearComboData1 = date("Y")-2;
$YearComboData2 = date("Y")-1;
$YearComboData3 = date("Y");
$YearComboData4 = date("Y")+1;
$YearComboData5 = date("Y")+2;
$CalendarHeader = date("F Y",$MonthStartStr);
?>

<script>
function SetPage(url)
{
 
document.getElementById("Databox").setAttribute("src", url);
 
}
</script>

    <form id="CalendarForm" name="CalendarForm" method="POST" action="index.php">
        <table cellspacing="0" cellpadding="4">
            <tr class="comborow">
                <th width="20%">
                    <select onchange="CalendarForm.submit()" size="1" name="YearCombo">
            		<option selected value="<?= $SelectedYear; ?>"><?= $SelectedYear; ?></option>
            		<option value="<?= $YearComboData1; ?>"><?= $YearComboData1; ?></option>
            		<option value="<?= $YearComboData2; ?>"><?= $YearComboData2; ?></option>
            		<option value="<?= $YearComboData3; ?>"><?= $YearComboData3; ?></option>
            		<option value="<?= $YearComboData4; ?>"><?= $YearComboData4; ?></option>
            		<option value="<?= $YearComboData5; ?>"><?= $YearComboData5; ?></option>
		            </select>
                    
                </th><th width="60%"><center><?= $CalendarHeader; ?></center></th><th width="20%">
                    <select onchange="CalendarForm.submit()" size="1" name="MonthCombo">
            		<option selected="<?= $SelectedMonth; ?>"><?= $SelectedMonth; ?></option>
            		<option value="01">Jan</option>
            		<option value="02">Feb</option>
            		<option value="03">Mar</option>
            		<option value="04">Apr</option>
            		<option value="05">May</option>
            		<option value="06">Jun</option>
            		<option value="07">Jul</option>
            		<option value="08">Aug</option>
            		<option value="09">Sep</option>
            		<option value="10">Oct</option>
            		<option value="11">Nov</option>
            		<option value="12">Dec</option>
		            </select></th>
            </tr>
        </table>

<?php

switch ($FirstDayNumber) {
    case 1:$LeadingBlanks = 0;break;
    case 2:$LeadingBlanks = 1;break;
    case 3:$LeadingBlanks = 2;break;
    case 4:$LeadingBlanks = 3;break;
    case 5:$LeadingBlanks = 4;break;
    case 6:$LeadingBlanks = 5;break;
    case 0:$LeadingBlanks = 6;break;
}

$TrailingBlanks = $BlankDates-$LeadingBlanks;

echo "<table border=1>  
        <tr><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th><th>SUN</th></tr>";

for ($Box=1, $DayCount=1, $DayCol=1; $Box <= 42; $Box++) {
    
    switch($Box){
        case $Box<=$LeadingBlanks || $Box>$DaysInMonth+$LeadingBlanks:echo "<td class=BoxEmpty></td>";break;
        
        case date("$DayCount-$SelectedMonth-$SelectedYear") == date("d-m-Y"):
            echo "<td onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$DayCount")."') class=TodaysDate>".$DayCount."</td>";$DayCount++;
            break;
        default:
            echo "<td  onclick=SetPage('databox.php?Day=".strtotime("$SelectedYear-$SelectedMonth-$DayCount")."') class=BoxFull>".$DayCount."</td>";$DayCount++;
            break;
        }

    $DayCol++;if($DayCol>7) { echo "</tr><tr>"; $DayCol=1;}
}
?>
</tr></table>
        
    </div>
        
    </td><td><iframe src="databox.php?Calendarheader=<?= $CalendarHeader; ?>" height="350px" width="585px" name="I1" frameborder="0" id="Databox"></iframe></td></tr>
</table>
</form>
</body>
</html>
