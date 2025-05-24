<?php
class CheckExpiration_yoghourt {
	//function __contruct($date_Expiration)
	public function checkExpiration()
	{
		try {
		include("../code/connection.php");
		$query=$con->query("SELECT expired_date,id from output_youghurt")->fetchAll(PDO::FETCH_ASSOC);
		$d=date("Y-d-m");

	    foreach ($query as $id) {
	    	$yid=$id['id'];
	    	$expirationdate=$id['expired_date'];
	    	if($expirationdate>=$d)
	    	{
	    	
	    	  $update=$con->query("UPDATE output_youghurt SET status='no expired' where id='$yid'");	
	    	}
	    	else
	    	{
	    		  $update=$con->query("UPDATE output_youghurt SET status='expired' where id='$yid'");
	    	}	
	    }	
		} catch (Exception $e) {
			 echo $e->getMessage();
		}
		
	}
}

$expiration = new CheckExpiration_yoghourt();
$expiration->checkExpiration();


?>