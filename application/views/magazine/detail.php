
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
		<section class="single">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<article class="article main-article">
							<header>
								<a href="<?php echo $tampili->post_link ?>" ><h1><?php echo $tampili->post_title ?></h1></a>
								<ul class="details">
									<li><?php echo tanggal_indo($tampili->created_at,TRUE); ?></li>
								</ul>
							</header>
							<div class="main">
								<div class="featured">
									<figure>
										<img src="http://drive.google.com/uc?export=view&id=<?php echo $tampili->post_img ?>">
									</figure>
								</div>
									<?php 
										if($tampili->post_cat_id == 8){
									?>
									<a href="<?php echo $tampili->post_link ?>">
										<h2><b class="fa fa-map-marker">&emsp; Silahkan klik untuk melihat lokasi</b></h2>
									</a>
									<?php 
										}
									?>
									<?php echo $tampili->post_content ?>
								</div>
						</article>
						<div class="sharing">
						<div class="title"><i class="ion-android-share-alt"></i><b>Bagikan</b></div>
							<ul class="social">
								<li>
									<a href="https://www.instagram.com/goodplace_ind/">
										<input type="image" src="<?php echo base_url()?>assets/img/Ic_Ig@2x.png"width="30" height="30">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Rekomendasi Lainnya</div>	
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php
						foreach ($makanan_rek as $makanan_rek){
					?>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_rek->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $makanan_rek->post_img; ?>=s500?authuser=0" alt="<?php echo $makanan_rek->post_title; ?>" height="200px">
								</a>
							</figure>
							<div class="padding">
								<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_rek->post_slug; ?>"><?php echo $makanan_rek->post_title; ?></a></h2>
								<div class="detail">
										<div class="time"><?php echo tanggal_indo($makanan_rek->created_at,TRUE); ?></div>
								</div>
							</div>
						</div>
					</article>
					<?php
						}
					?>
				</div>
			</div>
		</section>