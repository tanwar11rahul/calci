<?php
include 'filter.php';
//echo $_POST['operation'];
if($_SERVER['REQUEST_METHOD']==POST){
    
	$Entered_String = $_POST['Entered_String'];
	$Exploded_String_Array = explode(',',$Entered_String);
	
	foreach($all_files as $values){
		if(isset($_POST["operation"])){
			if($_POST['operation'] == $values)			{
				$result = $values($Exploded_String_Array);
				//echo "$result";
			}
		}
	}
	$dbc=mysql_connect('localhost','root','Rahul');
        mysql_select_db('real_calci',$dbc);
        $num2= mysql_real_escape_string(trim(strip_tags($Entered_String)),$dbc);
        $query="INSERT INTO entries (entry_id, entered_text , result) VALUES (0,'$num2','$result')";
        mysql_query($query,$dbc);
        $query1="SELECT * FROM entries ORDER BY entry_id DESC LIMIT 10";
        if($r= mysql_query($query1,$dbc))
        {
            while($row=mysql_fetch_array($r))
            {
                print " You Entered : {$row['entered_text']}<br>"."Result is: {$row['result']}". "<br>";
            }
        }
        else
        {
            print'<p style="COLOR :RED;"> Check the query</p>'.mysql_error().'</p>';
        }
}
?>