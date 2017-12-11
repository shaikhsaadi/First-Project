<?php
     $a=array(
        array(1,2,3),
	array(1,2,3),
	array("a",'b',1,"1")
     );
     for($j=count($a)-1;$j>=0;$j--){
	    $d=$a[$j];
	    for($i=count($d)-1;$i>=0;$i--){
                 echo $a[$j][$i];
     	    }
            echo "<br>";
     }
     $arr=array("A+"=>80,"A"=>30);
     echo count($arr);
     foreach($arr as $k => $value){
	echo $k."=>".$value."<br>";
     }
     $con=mysql_connect("localhost","root","") or die("Error: ");
     mysql_select_db("student");
     $f="Hossain Shaikh";
     $l="Saadi";
     $p="0123456789";
     $result=mysql_query("insert into info(fname,lname,phone) values('$f','$l','$p')") or die("Error :".mysql_error());
     if($result==TRUE) 
       echo "Success";
     $result=mysql_query("select*from info") or die("Error :".mysql_error());
     echo mysql_num_rows($result);
     while($row=mysql_fetch_assoc($result)){
          echo $row['id']."<br>";
          echo $row['fname']."<br>";
          echo $row['lname']."<br>";
          echo $row['phone']."<br>";
     }
?>