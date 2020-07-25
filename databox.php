<!DOCTYPE html>

<html>
    <head></head>
    <body><font face="Arial">
        <?php
        //Page content is decided by combo selections OR by TD OnClick... This works out which
        if(isset($_GET["Day"])){
        //Day comes from the TD OnClick
        $ImportDate = $_GET["Day"];
        echo "Month Selected"."<br>".date("F-Y",$ImportDate)."<br><br>".date("d-m-Y",$ImportDate);
        } 
        
        else if(isset($_GET["Calendarheader"])){
        //Month comes from the Iframe onload src
        $CalendarHeader = $_GET["Calendarheader"];
        echo "Month Selected"."<br>".$CalendarHeader."<br><br>No Day selected";
        } 

        ?>
        </font>
    </body>
</html>
