<?php
class Mymodel extends CI_Model
{

/*funcion Mymodel()
 {
parent::CI_Model();
 }
*/
function test ()
{
	$this->db->get('user');
	
}
}
?>