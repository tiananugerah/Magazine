<?php defined('BASEPATH') or exit('No direct script access allowed');
	
	/**
	 * Class Dashboard for admin purpose
	 * @author Diki Siswanto - D42116316
	 */
	class Makan extends Public_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_makanan');
		}

		public function index()
		{
			$q = urldecode($this->input->get('q', TRUE));
			$start = intval($this->input->get('start'));
			
			if ($q <> '') {
				$config['base_url'] = base_url() . 'makan/index.html?q=' . urlencode($q);
				$config['first_url'] = base_url() . 'makan/index.html?q=' . urlencode($q);
			} else {
				$config['base_url'] = base_url() . 'makan/index.html';
				$config['first_url'] = base_url() . 'makan/index.html';
			}
	
			$config['per_page'] = 5;
			$config['page_query_string'] = TRUE;
			$config['total_rows'] = $this->M_makanan->total_rows($q);
			$makan = $this->M_makanan->get_limit_data($config['per_page'], $start, $q);
	
			$this->load->library('pagination');
			$this->pagination->initialize($config);
	
			$data = array(
				'makan_data' => $makan,
				'q' => $q,
				'pagination' => $this->pagination->create_links(),
				'total_rows' => $config['total_rows'],
				'start' => $start,
			);
			$this->template->load('magazine/index','magazine/makan',$data);
        }
        
        
	}
 ?>