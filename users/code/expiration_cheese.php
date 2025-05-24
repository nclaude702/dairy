<?php
class CheckExpiration_cheese {
	//function __contruct($date_Expiration)
	public function checkExpiration()
	{
		try {
        include("code/connection.php");

		$query=$con->query("SELECT expired_date,cheese_id from output_cheese")->fetchAll(PDO::FETCH_ASSOC);
		$today=date("Y-d-m");

	    foreach ($query as $id) {
	    	$cid=$id['cheese_id'];
	    	$expirationdate=$id['expired_date'];
	    	if($expirationdate<=$today)
	    	{
	    	  $update=$con->query("UPDATE output_cheese SET status='no expired' where cheese_id='$cid'");	
	    	}
	    	else
	    	{
	    		  $update=$con->query("UPDATE output_cheese SET status='expired' where cheese_id='$cid'");
	    	}	
	    }	
		} catch (Exception $e) {
			 echo $e->getMessage();
		}
		
	}
}

$expiration = new CheckExpiration_cheese();
$expiration->checkExpiration();


?>