<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/admin/admin_header');
$this->load->view('templates/admin/admin_sidebar');
echo $the_view_content;
$this->load->view('templates/admin/admin_footer');
?>