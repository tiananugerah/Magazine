<?php defined('BASEPATH') or exit('No direct script access allowed');
	
	/**
	 * Class Dashboard for admin purpose
	 * @author Diki Siswanto - D42116316
	 */
	class Map extends Public_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_map');
		}

		public function index()
		{
			$q = urldecode($this->input->get('q', TRUE));
			$start = intval($this->input->get('start'));
			
			if ($q <> '') {
				$config['base_url'] = base_url() . 'map/index.html?q=' . urlencode($q);
				$config['first_url'] = base_url() . 'map/index.html?q=' . urlencode($q);
			} else {
				$config['base_url'] = base_url() . 'map/index.html';
				$config['first_url'] = base_url() . 'map/index.html';
			}
	
			$config['per_page'] = 4;
			$config['page_query_string'] = TRUE;
			$config['total_rows'] = $this->M_map->total_rows($q);
			$map1 = $this->M_map->get_limit_data($config['per_page'], $start, $q);
			$map2 = $this->M_map->get_limit_data($config['per_page'], $start+4, $q);
	
			$this->load->library('pagination');
			$this->pagination->initialize($config);
	
			$data = array(
				'map_data1' => $map1,
				'map_data2' => $map2,
				'q' => $q,
				'pagination' => $this->pagination->create_links(),
				'total_rows' => $config['total_rows'],
				'start' => $start,
			);
			$this->template->load('magazine/index','magazine/maps',$data);
        }
        
        
	}
 ?>