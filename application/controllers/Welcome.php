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

    public function sanitation()
    {
        $data['title'] = 'On Site Dump Stations';
        $data['description'] = 'Family RV has onsite dump station for your convenience';
        $data['keywords'] = '';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/sanitation',$data);
        $this->load->view('includes/footer',$data);

    }

    public function washbay()
    {
        $data['title'] = 'RV and Camper Wash Bay';
        $data['description'] = 'Large wash bay adjacent to the lot for easy clean up and parking';
        $data['keywords'] = '';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/washbay',$data);
        $this->load->view('includes/footer',$data);

    }

    public function lowprice()
    {
        $data['title'] = 'Low Price and Simple Terms';
        $data['description'] = 'Family RV Storage offers one low price, and no surprise terms.';
        $data['keywords'] = '';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/lowprice',$data);
        $this->load->view('includes/footer',$data);

    }

    public function security()
    {
        $data['title'] = 'Family RV offers peace of mind that you investment is safe.';
        $data['description'] = 'Family RV Storage offers one low price, and no surprise terms.';
        $data['keywords'] = '';
        $data['css'] = array('');
        $data['js'] = array();
        $this->load->view('includes/header',$data);
        $this->load->view('welcome/security',$data);
        $this->load->view('includes/footer',$data);

    }

}
