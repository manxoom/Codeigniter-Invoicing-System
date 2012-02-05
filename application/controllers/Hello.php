<?php

class Hello extends CI_Controller
{
    
	
function index()
{



if($this->input->post('contact'))
{

   echo "Contact form successfully sent";
   
}
else
{
$this->load->view('main');
}

}

}

