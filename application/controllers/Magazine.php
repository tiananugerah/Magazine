<?php defined('BASEPATH') or exit('No direct script access allowed');
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	/**
	 * Class Dashboard for admin purpose
	 * @author Diki Siswanto - D42116316
	 */
	class Magazine extends Public_Controller
	{
    		   public function kirim()
    	{
             // PHPMailer object
             $response = false;
             $mail = new PHPMailer();
           
    
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'oblonger.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
            $mail->SMTPAuth = true;
            $mail->Username = 'admin@oblonger.com'; // user email
            $mail->Password = 'F@t4yaku77'; // password email
            $mail->Port     = 587;
            $mail->setFrom('goodplace.ind@gmail.com', 'Good Place'); // user email
            $mail->SMTPSecure = 'tls';
    
            // Add a recipient
            $mail->addAddress( 'alfarizimuhamadrizki@gmail.com',  $this->input->post('name',TRUE)); //email tujuan pengiriman email
    
            // Email subject
            $mail->Subject = 'Pertanyaan User'; //subject email
            $mail->addCC($this->input->post('email',TRUE));
            // Set email format to HTML
            $mail->isHTML(true);
    
            // Email body content
            $mailContent = $this->input->post('message',TRUE); // isi email
            $mail->Body = $mailContent;
            
            //send the message, check for errors
            $mail->send();
            
			$this->template->load('magazine/index','magazine/about');
        }
    
		function __construct()
		{
            require APPPATH.'libraries/phpmailer/src/Exception.php';
            require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
            require APPPATH.'libraries/phpmailer/src/SMTP.php';
			parent::__construct();
			$this->load->model('M_magazine');
		}

		public function index()
		{	
			$data = array(
				'higline' 				=> $this->M_magazine->get_higline(),
				'trending' 				=> $this->M_magazine->get_trending(),
				'makanan_baru' 			=> $this->M_magazine->get_makanan_baru(),
				'makanan_popular' 		=> $this->M_magazine->get_makanan_populer(),
				'makanan_rekomendasi' 	=> $this->M_magazine->get_makanan_rek(),
				'makanan_tempat' 		=> $this->M_magazine->get_tempat(),
				'makanan_tempat1' 		=> $this->M_magazine->get_tempat1(),
				'berita_baru' 			=> $this->M_magazine->get_berita_baru(),
				'berita_baru1' 			=> $this->M_magazine->get_berita_baru1(),
				'berita_baru2' 			=> $this->M_magazine->get_berita_baru2(),
			);
			$this->template->load('magazine/index','magazine/home',$data);
		}

		public function magazine()
		{
			$data = array(
				'higline_majalah' 		=> $this->M_magazine->get_higline_majalah(),
				'trending_majalah'		=> $this->M_magazine->get_trending_majalah(),
				'majalah' 				=> $this->M_magazine->get_majalah(),
				'majalah_baru' 			=> $this->M_magazine->get_majalah_baru(),
				'majalah_pop' 			=> $this->M_magazine->get_majalah_pop(),
			);
			$this->template->load('magazine/index','magazine/magazine',$data);
		}

		public function about()
		{
			$this->template->load('magazine/index','magazine/about');
		}

		public function detail($id)
		{
			$data = array(
				'makanan_rek' 		=> $this->M_magazine->get_makanan_rek(),
				'tampili' 			=> $this->M_magazine->get_post($id),
			);

			$a = $this->M_magazine->getupdate($id);
			$datak = array(
				'visitor' 		=> $a->visitor+1,
			);

			$this->M_magazine->update($id,$datak);
			$this->template->load('magazine/index','magazine/detail',$data);
		}

		public function majalah($id)
		{
			$data = array(
				'majalah' 		=> $this->M_magazine->get_majalah_rek(),
				'tampili' 		=> $this->M_magazine->get_post($id),
			);

			$a = $this->M_magazine->getupdate($id);
			$datak = array(
				'visitor' 		=> $a->visitor+1,
			);

			$this->M_magazine->update($id,$datak);
			$this->template->load('magazine/index','magazine/majalah',$data);
		}

	}
 ?>