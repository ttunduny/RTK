<?php

/**
* 
*/
class Facilities_model extends CI_Model
{
	function get_all()
	{
		$sql = "select * from facilities";
		$result = $this->db->query($sql)->result_array();
		return $result;
	}

	function get_one_id($id)
	{
		$sql = "select * from facilities where id='$id' and rtk_enabled='1'";
		$result = $this->db->query($sql)->result_array();
		return $result[0];
	}

	function get_one_name($name)
	{
		$sql = "select * from facilities where facility_name like %'$name'% and rtk_enabled='1'";
		$result = $this->db->query($sql)->result_array();
		return $result[0];
	}

	function get_one_mfl($mfl)
	{
		$sql = "select * from facilities where facility_code ='$mfl' and rtk_enabled='1'";
		$result = $this->db->query($sql)->result_array();
		return $result[0];
	}

	function get_all_in_county($county_id)
	{
		$sql = "select * from facilities";
		$result = $this->db->query($sql)->result_array();
		return $result;
	}

	function get_all_in_district($district_id)
	{
		$sql = "select * from facilities where rtk_enabled='1' and district='$district_id'";
		$result = $this->db->query($sql)->result_array();
		return $result;
	}
}

?>