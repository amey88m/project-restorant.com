<?php


class Admin extends Model {


    public static function finalorder() 
    {
        
        Sessions::session_auto_logoff();
        
        $db = new DB;
		$connection = $db->connection();
        
        $name 	= $_POST['name'];
		$offer 	= $_POST['offer'];
		$dis 	= $_POST['dis'];
		$cost 	= $_POST['cost'];
		$qty 	= $_POST['qty'];
		$token  = $_POST['tok'];

		$total = $cost*$qty;

		$date = new DateTime( "now",  new DateTimeZone("Asia/kolkata"));
		$order_date = $date->format("y-m-d  H:i:s:a");

			#   check for empty fields    #
			if(empty($_POST['name']) || empty($_POST['offer']) || empty($_POST['dis']) || empty($_POST['cost']) || empty($_POST['tok']) || empty($_POST['qty'])):
				print "<span style='color:#f02'>fields are not proper.</span>";
				exit();
			else:
				# insert into customerorder table   #
				$sql = "INSERT INTO customerorder(customername,customerphone,order_status,orderdate,itemname,itemoffer,discount,each_item_cost,item_qty,total_cost) 
				VALUES('{$_SESSION['customer_name']}','{$_SESSION['customer_phone']}',1,'$order_date','$name','$offer','$dis','$cost','$qty','$total')";
				
				$result = $db->numRows($sql);
				print "<span class='text-success'>Thank you for ordered.</span>";
				exit;
			endif;
    }

}