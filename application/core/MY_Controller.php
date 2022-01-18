
<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* place this file into core folder */
class MY_Controller extends CI_Controller
{    
    
	protected $data = array();
	
	function __construct()
	{
		parent::__construct();
        

        //$this->load->database("default");
        

        $this->data['page_title'] = 'SAPK Online';
        $this->data['page_description'] = 'Sistem Aplikasi Pelayanan Kepegawaian';
		
	}

	protected function render($the_view = NULL, $template = 'master')
	{
		if($template == 'json' || $this->input->is_ajax_request())
		{
			header('Content-Type: application/json');
			echo json_encode($this->data);
		}
		elseif(is_null($template))
		{
			$this->load->view($the_view,$this->data);
		}
		else
		{
			$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
			$this->load->view('templates/' . $template . '_view', $this->data);
		}
	}
}

class Admin_Controller extends MY_Controller
{

	function __construct()
	{
		parent::__construct();		
        //$this->load->helper('url');

        //check login here
        if ($this->session->userdata('logged_in')) {
    		$session_data 	=	$this->session->userdata('logged_in');
    		$this->data['nama_admin'] = $session_data['nama_admin'];
    		$this->data['level'] = $session_data['level'];
    		

    	} else {
    		redirect('login','refresh');
    	}
		
        
	}
	protected function render($the_view = NULL, $template = 'admin')
	{                
        if($template == 'json' || $this->input->is_ajax_request())
        {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }else{
            
            parent::render($the_view, 'admin');
            
        }		
	}
}