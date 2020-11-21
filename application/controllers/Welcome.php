<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['title'] = 'Family RV Storage';
        $data['description'] = '';
        $data['keywords'] = '';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/home',$data);
        $this->load->view('includes/footer',$data);

	}

    public function location(){
        $data['title'] = 'About Us : Family RV Storage';
        $data['description'] = '';
        $data['keywords'] = 'Our Location';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/location',$data);
        $this->load->view('includes/footer',$data);
    }

	public function aboutus(){
        $data['title'] = 'About Us : Family RV Storage';
        $data['description'] = '';
        $data['keywords'] = 'About us';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/aboutus',$data);
        $this->load->view('includes/footer',$data);
    }

    public function contact(){
        $data['title'] = 'Contact Us : Family RV Storage';
        $data['description'] = '';
        $data['keywords'] = 'About us';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/contact',$data);
        $this->load->view('includes/footer',$data);
    }



}
