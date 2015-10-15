<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Handler extends CI_Controller {

	/**
	 * Deal with submitted forms
	 */
	// default page
	public function index()
	{
		$this->load->view('handle');
	}

	// traditional form handling
	function traditional()
	{
		// spit out the form
		$this->load->view('in/traditional');
	}

	function handle_traditional()
	{
		// check the checkbox value
		if (!empty($_POST['grade']))
		{
			// make sure they chose an answer
			if (!empty($_POST['jungle']))
			{
				// make sure it is the right answer
				if ($_POST['jungle'] == "cheetah")
				{
					echo "You got the right answer!";
				} else
				{
					echo "Sorry, wrong answer.";
				}
			} else
			{
				echo "You did not choose an answer.";
			}
		} else
		{
			echo "Your answer will not be graded.";
		}
	}

	// using the Input class
	function ci_input()
	{
		// spit out the form
		$this->load->view('in/ci');
	}

	function handle_ci()
	{
		// check the checkbox value
		if ($this->input->post('grade') !== NULL)
		{
			// make sure they chose an answer
			if ($this->input->post('jungle') !== false)
			{
				// make sure it is the right answer
				if ($this->input->post('jungle') == "cheetah")
				{
					echo "You got the right answer!";
				} else
				{
					echo "Sorry, wrong answer.";
				}
			} else
			{
				echo "You did not choose an answer.";
			}
		} else
		{
			echo "Your answer will not be graded.";
		}
	}

}
