<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function index()
	{		
		$this->load->view('templates/login_header');
		$this->load->view('pages/login');
		$this->load->view('templates/login_footer');
	}

	public function view($page = 'login_body')
	{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}

			switch ($page)
			{
				case "login_error": $data['title'] = "Login"; $this->load->view('templates/login_header', $data); $this->load->view('pages/login', $data); break;
				case "signup_error": $data['title'] = "Sign Up"; $this->load->view('templates/login_header', $data); $this->load->view('pages/signup', $data); break;
				case "login_about": $data['title'] = "About"; $this->load->view('templates/login_header', $data); break;
				case "login_whatIsCNE": $data['title'] = "What Is C & E"; $this->load->view('templates/login_header', $data); break;
				case "login": $data['title'] = "Sign In"; $this->load->view('templates/login_header', $data); break;
				case "signup": $data['title'] = "Sign Up"; $this->load->view('templates/login_header', $data); break;
			}

			$this->load->view('pages/'.$page, $data);

			$this->load->view('templates/login_footer');
	}
	
	/*
	function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			//redirect('site/members_area');
			redirect('main');
		}
		else // incorrect username or password
		{	
			//$this->index();
			$this->load->view('includes/header');
			$this->load->view('includes/nav');
			$this->load->view('oh_snap');
			$this->load->view('login_form');
			$this->load->view('includes/footer');
		}
	}	
	

	function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}

	*/
	
	function create_member()
	{
		
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		


		
		if($this->form_validation->run() == FALSE)
		{
			//$this->load->view('signup_form');
			redirect('signup_error');
		}
		
		else
		{			
			$this->load->model('membership_model');
			
			if($query = $this->membership_model->create_member())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$this->load->view('signup_form');			
			}
		}
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}
