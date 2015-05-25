<?php
if($_SERVER['REQUEST_METHOD']==POST)
{
    $num = $_POST['first'];
        if(isset($_POST['oper']))
        {
            $num1=explode(',',$num);
            foreach($num1 as $key => $values)
            {
                $count++;
            }
            if($_POST['oper']== "add")
            {
                for($i=0;$i<$count;$i++)
                {
                    $result=$result + $num1[$i];
                }
             
            }
            if($_POST['oper']== "sub")
            {
                {
                  
                for($i=0; $i<$count ; $i++)
                {
                    $result=$num1[$i] - $result;
                 
                }
                }
             
            }
            if($_POST['oper']== "mul")
            {
                $result=1;
                for($i=0; $i<$count ; $i++)
                {
                    $result=$result * $num1[$i];
                    echo "$result";
                }
             
            }
        
        }
        $dbc=mysql_connect('localhost','root','abhijit');
        mysql_select_db('real_calci',$dbc);
        $num2= mysql_real_escape_string(trim(strip_tags($num)),$dbc);
        $query="INSERT INTO entries (entry_id, text_num , result) VALUES (0,'$num2','$result')";
        mysql_query($query,$dbc);
        $query1="SELECT * FROM entries";
        if($r= mysql_query($query1,$dbc))
        {
            while($row=mysql_fetch_array($r))
            {
                print " You Entered : {$row['text_num']}<br>"."Result is: {$row['result']}". "<br>";
            }
        }
        else
        {
            print'<p style="COLOR :RED;"> Check the query</p>'.mysql_error().'</p>';
        }
}
?>