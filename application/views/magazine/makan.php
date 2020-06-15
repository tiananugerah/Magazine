<?php
	function tanggal_indo($tanggal, $cetak_hari = false)
	{
		$tgl = date('Y-m-d', strtotime($tanggal));	
		$hari = array ( 1 =>    'Senin',
					'Selasa',
					'Rabu',
					'Kamis',
					'Jumat',
					'Sabtu',
					'Minggu'
				);
				
		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tgl);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($cetak_hari) {
			$num = date('N', strtotime($tgl));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}
?>
<section class="best-of-the-week">
	<div class="container">
		<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Makanan Populer</div></h1>
	<div class="row">
		<div class="row">
			<?php
				foreach ($makan_data->result() as $makan_data){
			?>
			<article class="col-md-12 article-list">
				<div class="inner">
				<figure>
					<a href="<?php echo base_url();?>magazine/detail/<?php echo $makan_data->post_slug; ?>">
						<img src="https://lh3.googleusercontent.com/d/<?php echo $makan_data->post_img; ?>=s500?authuser=0">
					</a>
				</figure>
				<div class="details">
					<h1><a href="<?php echo base_url();?>magazine/detail/<?php echo $makan_data->post_slug; ?>"><?php echo $makan_data->post_title; ?></a></h1>
					<?php echo substr($makan_data->post_content,0,220); ?>...
					<div class="detail">
					<div class="time"><?php echo tanggal_indo($makan_data->created_at,TRUE); ?></div>
					</div>
				</div>
				</div>
			</article>
			<div class="line"></div>
			<?php
				}
			?>
			<div class="col-md-12 text-center">
					<?php echo $pagination ?>
				<div class="pagination-help-text">
					Total Record : <?php echo $total_rows ?>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>