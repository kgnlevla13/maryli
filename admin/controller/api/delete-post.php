<?php 


if (isset($_POST))
{

	$id = post('id');
	$table = post('table');
	$column = post('column');

	$row = $db->from($table)->where($column,$id)->first();
	
	$query = $db->delete($table)->where($column, $id)->done();
	

	if ($query) 
	{
		$json['success'] = 'evet';

		return true;
	}
	else
	{
		return false;
	}

}

?>