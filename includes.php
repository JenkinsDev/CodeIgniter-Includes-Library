<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Includes
 * 
 * This library is used for inserting multiple view files with just a single call
 * to the Includes::include_files(); method.
 * 
 * @author David Jenkins <david.nicholas.jenkins@hotmail.com>
 */
class Includes {
	public function __construct() {
		$this->CI =& get_instance();
	}

	/**
	 * Includes::include_files();
	 * 
	 * Checks to see if the $file_names parameter is an array
	 * or single string.  If it is an array lets make a call
	 * to pass_correct_file_data();
	 * 
	 * @param $file_names mixed
	 * @param $file_data  mixed
	 * 
	 * @return void
	 */
	public function include_files($file_names, $file_data = '') {
		if(is_array($file_names))
			$this->pass_correct_file_data($file_names, $file_data);
		else
			$this->CI->load->view($file_names, $file_data);
	}
	
	/**
	 * Includes::pass_correct_file_data();
	 * 
	 * Since the $file_names are set as an array, lets make sure we assign
	 * the correct $file_data to the right file.
	 * 
	 * @param $file_names mixed
	 * @param $file_data  mixed
	 * 
	 * @return void
	 */
	public function pass_correct_file_data($file_names, $file_data) {
		foreach($file_names as $current_file_name) {
			if(isset($file_data[$current_file_name]))
				$this->CI->load->view($current_file_name, $file_data[$current_file_name]);
			else
				$this->CI->load->view($current_file_name, $file_data);
		}
	}
}