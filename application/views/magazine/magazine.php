
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
		
<!--		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="owl-carousel owl-theme slide" id="featured">
							<?php
							foreach ($higline_majalah as $higline_majalah){
							?>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="<?php echo $higline_majalah->post_img; ?>" alt="<?php echo $higline_majalah->post_title; ?>">
									</figure>
								</article>
							</div>
							<?php
							}
							?>
						</div>
					</div>
					
					<div class="col-xs-4 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<?php
						foreach ($trending_majalah as $trending_majalah){
						?>
						<aside>
						  <div class="aside-body ">
							<figure class="ads">
								<a href="<?php echo base_url();?>magazine/majalah/<?php echo $trending_majalah->post_slug; ?>">
								  <img class="gambar" src="<?php echo $trending_majalah->post_img; ?>">
								</a>
							</figure>
						  </div>
						</aside>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</section>
-->
		<section class="best-of-the-week">
			<div class="container">
				<h1>
					<div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Majalah Terbaru</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php
						foreach ($majalah_baru as $majalah_baru){
					?>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah_baru->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $majalah_baru->post_img; ?>=s500?authuser=0" alt="<?php echo $majalah_baru->post_title; ?>" height="370px">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time"><?php echo tanggal_indo($majalah_baru->created_at,TRUE); ?></div>
								</div>
								<h2><a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah_baru->post_slug; ?>"><?php echo $majalah_baru->post_title; ?></a></h2>
							</div>
						</div>
					</article>
					<?php
						}
					?>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1>
					<div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Majalah Populer</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php
						foreach ($majalah_pop as $majalah_pop){
					?>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah_pop->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $majalah_pop->post_img; ?>=s500?authuser=0" alt="<?php echo $majalah_pop->post_title; ?>" height="370px">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time"><?php echo tanggal_indo($majalah_pop->created_at,TRUE); ?></div>
								</div>
								<h2><a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah_pop->post_slug; ?>"><?php echo $majalah_pop->post_title; ?></a></h2>
							</div>
						</div>
					</article>
					<?php
						}
					?>
				</div>
			</div>
		</section>
