<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}

		public function vlogin()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$this->load->model('user_model');
		$result = $this->user_model->obtenerUsuario($data['username']);

if($data['username']==$result[0]->username && $data['password']==$result[0]->password )
		$this->load->view('admin',$result);
	else{
		$data['mensaje']='datos erroneos';
		$this->load->view('login',$data);

	}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */