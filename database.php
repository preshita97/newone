<?php
class database
{
	public function myconnection()
	{
		$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
		return $con;
	}
	public function login($email,$password)
	{
	$res=mysql_query("select * from user_tbl where email_id='$email' and password='$password'",$this->myconnection());
	$cnt=mysql_num_rows($res);
	return $cnt;
	}

	public function delmulcat($all)
	{
	$res=mysql_query("delete from cat_tbl where cat_id IN('$all') ",$this->myconnection());
	return $res;
	}

	public function delmuluser($all)
	{
	$res=mysql_query("delete from user_tbl where email_id IN('$all') ",$this->myconnection());
	return $res;
	}

	public function delmulpro($all)
	{
	$res=mysql_query("delete from pro_tbl where pro_id IN('$all') ",$this->myconnection());
	return $res;
	}


	public function cat_displaybycount()
	{
		$res=mysql_query('select count(p.pro_id) "cnt",c.cat_id,c.cat_name from cat_tbl as c,pro_tbl as p where p.fk_cat_id=c.cat_id group by c.cat_name',$this->myconnection());
			return $res;
	}

	public function displaypro1($id)
	{
		$res=mysql_query("select * from pro_tbl where fk_cat_id='$id'",$this->myconnection());
		return $res;
	}
	public function displayusr()
	{
		$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("select * from user_tbl");
			return $res;
	}

public function cat_display()
	{
	$res=mysql_query("select * from cat_tbl",$this->myconnection());
	return  $res;
	}
	public function cat_add($cat_name)
	{
	$res=mysql_query("insert into cat_tbl values(null,'$cat_name')",$this->myconnection());
	return  $res;
	}
	public function cat_upd($cat_name)
	{
	$res=mysql_query("update cat_tbl set cat_name='$catname' where cat_id='$cat_id'",$this->myconnection());
	return  $res;
	}
	public function pro_insert($query)
	{
	$res=mysql_query($query,$this->myconnection());
	return  $res;
	}
	public function displaypro()
	{
	$res=mysql_query("select p.*,c.* from pro_tbl as p,cat_tbl as c where p.fk_cat_id=c.cat_id",$this->myconnection());
	return  $res;
	}
	public function checkkart($pro_id,$email_id)
	{
		$res=mysql_query("select * from order_tbl where fk_email_id='$email_id' and fk_pro_id='$pro_id'",$this->myconnection());
		return mysql_num_rows($res);
	}
	

	public  function view_product($pro_id)
	{
		$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
		$res=mysql_query("select * from pro_tbl where pro_id='$pro_id'");
		return $res;
		

	}
	public  function view_cat($cat_id)
	{
		$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
		$res=mysql_query("select * from cat_tbl where cat_id='$cat_id'");
		return $res;
		

	}
	public function displaycat1()
	{
		$res=mysql_query("select * from cat_tbl",$this->myconnection());
		return $res; 
	}
	public function deletepro($pro_id)
	{

		$res=mysql_query("delete from pro_tbl where pro_id='$pro_id'",$this->myconnection());
		return $res;
	}
	public function deletecat($cat_id)
	{

		$res=mysql_query("delete from cat_tbl where cat_id='$cat_id'",$this->myconnection());
		return $res;
	}
	public function displaypro_kart($pro_id)
	{
	$res=mysql_query("select * from pro_tbl where pro_id='$pro_id'",$this->myconnection());
	return  $res;
	}
	public function addtokart($amt,$date,$id,$email_id,$qty,$flag)
	{
		$res=mysql_query("insert into order_tbl value ('NULL','$amt','$date','$id','$email_id','$qty','$flag')");
		return $res;
	}
	public function viewkart($email_id,$flag)
	{
		$res=mysql_query("select p.*,o.* from order_tbl as o,pro_tbl as p where  o.fk_email_id='$email_id' and o.flag='kart' and o.fk_pro_id=p.pro_id",$this->myconnection());
		return $res;
	}
	public function deletekart($o_id)
	{
		$res=mysql_query("delete from order_tbl where o_id='$o_id'",$this->myconnection());
		return $res;
	}
	public function payamt($email_id)
	{
		$res=mysql_query("select sum(amt)'amount' from order_tbl where fk_email_id='$email_id'",$this->myconnection());
		return $res;
	}
}
?>