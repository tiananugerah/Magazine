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
			<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Tempat Makanan Populer</div></h1>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="row">
						<?php
						foreach ($map_data1->result() as $map_data1){
						?>
						<article class="article col-md-12">
							<div class="inner">
								<figure>
									<a href="<?php echo base_url();?>magazine/detail/<?php echo $map_data1->post_slug; ?>">
										<img src="https://lh3.googleusercontent.com/d/<?php echo $map_data1->post_img; ?>=s500?authuser=0" alt="<?php echo $map_data1->post_title; ?>" height="400">
									</a>
								</figure>
								<div class="padding">
									<div class="detail">
										<div class="time"><?php echo tanggal_indo($map_data1->created_at,TRUE); ?></div>
									</div>
									<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $map_data1->post_slug; ?>"><?php echo $map_data1->post_title; ?></a></h2>
									<?php echo substr($map_data1->post_content,0,200); ?>...
								</div>
							</div>
						</article>
						<?php
						}
						?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="row">
						<?php
						foreach ($map_data2->result() as $map_data2){
						?>
						<article class="article col-md-12">
							<div class="inner">
								<figure>
									<a href="<?php echo base_url();?>magazine/detail/<?php echo $map_data2->post_slug; ?>">
										<img src="https://lh3.googleusercontent.com/d/<?php echo $map_data2->post_img; ?>=s500?authuser=0" alt="<?php echo $map_data2->post_title; ?>" height="400">
									</a>
								</figure>
								<div class="padding">
									<div class="detail">
										<div class="time"><?php echo tanggal_indo($map_data2->created_at,TRUE); ?></div>
									</div>
									<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $map_data2->post_slug; ?>"><?php echo $map_data2->post_title; ?></a></h2>
									<?php echo substr($map_data2->post_content,0,200); ?>...
								</div>
							</div>
						</article>
						<?php
						}
						?>
					</div>
				</div>
				<div class="col-md-12 text-center">
						<?php echo $pagination ?>
					<div class="pagination-help-text">
						Total Record : <?php echo $total_rows ?>
					</div>
				</div>
			</div>
		</div>
	</section>