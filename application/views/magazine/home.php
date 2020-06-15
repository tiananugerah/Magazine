
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

<section class="home">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="owl-carousel owl-theme slide" id="featured">
					<?php
					foreach ($higline as $higline){
					?>
					<div class="item">
						<article class="featured">
							<div class="overlay"></div>
							<figure>
								<img src="https://lh3.googleusercontent.com/d/<?php echo $higline->post_img; ?>=s500?authuser=0" alt="<?php echo $higline->post_title; ?>">
							</figure>
							<div class="details">
								<div class="category">
									<a href="
										<?php 
											if ( $higline->post_cat_id == 6){
											echo base_url();?>magazine/majalah/<?php echo $higline->post_slug; 
											}else{
											echo base_url();?>magazine/detail/<?php echo $higline->post_slug; 
											}
										?>
									" class="badge">Highlights</a></div>
								<div class="time"><?php echo tanggal_indo($higline->created_at,TRUE); ?></div>
								<h1><a href="
										<?php 
											if ( $higline->post_cat_id == 6){
											echo base_url();?>magazine/majalah/<?php echo $higline->post_slug; 
											}else{
											echo base_url();?>magazine/detail/<?php echo $higline->post_slug; 
											}
										?>
									"><?php echo $higline->post_title; ?></a></h1>
							</div>
						</article>
					</div>
					<?php 
					}
					?>
				</div>
			</div>

			<div class="col-xs-4 col-md-4 sidebar" id="sidebar">
				<div class="sidebar-title for-tablet">Sidebar</div>
				<aside>
					<h1 class="aside-title" style="color:red;">#TRENDING</h1>
					<div class="aside-body">
						<?php
						foreach ($trending as $trending){
						?>
						<article class="article-mini">
							<div class="inner">
								<figure>
									<a href="
										<?php 
											if ( $trending->post_cat_id == 6){
											echo base_url();?>magazine/majalah/<?php echo $trending->post_slug; 
											}else{
											echo base_url();?>magazine/detail/<?php echo $trending->post_slug; 
											}
										?>		 
									">
										<img src="https://lh3.googleusercontent.com/d/<?php echo $trending->post_img; ?>=s500?authuser=0" alt="<?php echo $trending->post_title; ?>">
									</a>
								</figure>
								<div class="padding">
									<h1><a href="
										<?php 
											if ( $trending->post_cat_id == 6){
											echo base_url();?>magazine/majalah/<?php echo $trending->post_slug; 
											}else{
											echo base_url();?>magazine/detail/<?php echo $trending->post_slug; 
											}
										?>	
										"><?php echo $trending->post_title; ?></a></h1>
								</div>
							</div>
						</article>
						<?php 
						}
						?>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>

<section class="best-of-the-week">
	<div class="container">
		<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Berita Terbaru</div>
		</h1>

		<div class="page-description">
			<div class="row">
				<div class="row col-md-6 col-sm-6 col-xs-12">
					<?php
					foreach ($berita_baru as $berita_baru){
					?>
					<article class="article col-md-12">
						<div class="aside-body">
							<figure class="ads">
								<a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $berita_baru->post_img; ?>=s500?authuser=0" >
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time"><?php echo tanggal_indo($berita_baru->created_at,TRUE); ?></div>
								</div>
								<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru->post_slug; ?>"><?php echo $berita_baru->post_title; ?></a></h2>
							</div>
						</div>
					</article>
					<?php 
					}
					?>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">	
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<?php
							foreach ($berita_baru1 as $berita_baru1){
							?>
							<article class="article col-md-12">
								<div class="inner">
									<figure>
										<a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru1->post_slug; ?>">
											<img src="https://lh3.googleusercontent.com/d/<?php echo $berita_baru1->post_img; ?>=s500?authuser=0" alt="<?php echo $berita_baru1->post_title; ?>"  height="150">
										</a>
									</figure>
									<div class="padding">
										<div class="detail">
											<div class="time"><?php echo tanggal_indo($berita_baru1->created_at,TRUE); ?></div>
										</div>
										<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru1->post_slug; ?>"><?php echo $berita_baru1->post_title; ?></a></h2>
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
							foreach ($berita_baru2 as $berita_baru2){
							?>
							<article class="article col-md-12">
								<div class="inner">
									<figure>
										<a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru2->post_slug; ?>">
											<img src="https://lh3.googleusercontent.com/d/<?php echo $berita_baru2->post_img; ?>=s500?authuser=0>" alt="<?php echo $berita_baru2->post_title; ?>"  height="150">
										</a>
									</figure>
									<div class="padding">
										<div class="detail">
											<div class="time"><?php echo tanggal_indo($berita_baru2->created_at,TRUE); ?></div>
										</div>
										<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $berita_baru2->post_slug; ?>"><?php echo $berita_baru2->post_title; ?></a></h2>
									</div>
								</div>
							</article>
							<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="best-of-the-week">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-description">
					<div class="row">
						<div class="col-md-8 col-sm-6">
							<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Makanan Popular</div>
								<div class="carousel-nav" id="best-of-the-week-nav">
									<div class="all">
										<a class="btn btn-magz" href="<?php echo base_url();?>makan">Lainnya...</a>		
									</div>
								</div>
							</h1>
							<div class="row">
								<?php
								foreach ($makanan_popular as $makanan_popular){
								?>
								<article class="col-md-12 article-list">
									<div class="inner">
										<figure>
											<a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_popular->post_slug; ?>">
												<img src="https://lh3.googleusercontent.com/d/<?php echo $makanan_popular->post_img; ?>=s500?authuser=0">
											</a>
										</figure>
										<div class="details">
											<h1><a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_popular->post_slug; ?>"><?php echo $makanan_popular->post_title; ?></a></h1>
											<?php echo substr($makanan_popular->post_content,0,210); ?>...
											<div class="detail">
												<div class="time"><?php echo tanggal_indo($makanan_popular->created_at,TRUE); ?></div>
											</div>
										</div>
									</div>
								</article>
								<?php
								}
								?>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<aside>
							<h1 class="text" style="text-align: center;background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Rekomendasi</h1>
								<div class="aside-body">
									<?php
									foreach ($makanan_rekomendasi as $makanan_rekomendasi){
									?>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_rekomendasi->post_slug; ?>">
													<img src="https://lh3.googleusercontent.com/d/<?php echo $makanan_rekomendasi->post_img; ?>=s500?authuser=0">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_rekomendasi->post_slug; ?>"><?php echo $makanan_rekomendasi->post_title; ?></a></h1>
											</div>
										</div>
									</article>
									<?php
									}
									?>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		
		
<section class="best-of-the-week">
	<div class="container">
		<h1><div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Tempat Makanan Populer</div>
			<div class="carousel-nav" id="best-of-the-week-nav">
				<div class="all">
						<a class="btn btn-magz" href="<?php echo base_url();?>map">Lainnya...</a>				
				</div>
			</div>
		</h1>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<?php
					foreach ($makanan_tempat as $makanan_tempat){
					?>
					<article class="article col-md-12">
						<div class="inner">
							<figure>
								<a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_tempat->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $makanan_tempat->post_img; ?>=s500?authuser=0" alt="<?php echo $makanan_tempat->post_title; ?>" height="400">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time"><?php echo tanggal_indo($makanan_tempat->created_at,TRUE); ?></div>
								</div>
								<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_tempat->post_slug; ?>"><?php echo $makanan_tempat->post_title; ?></a></h2>
								<?php echo substr($makanan_tempat->post_content,0,200); ?>...
							</div>
						</div>
					</article>
					<?php
					}
					?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">re
				<div class="row">
					<?php
					foreach ($makanan_tempat1 as $makanan_tempat1){
					?>
					<article class="article col-md-12">
						<div class="inner">
							<figure>
								<a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_tempat1->post_slug; ?>">
									<img src="https://lh3.googleusercontent.com/d/<?php echo $makanan_tempat1->post_img; ?>=s500?authuser=0" alt="<?php echo $makanan_tempat1->post_title; ?>" height="400">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time"><?php echo tanggal_indo($makanan_tempat1->created_at,TRUE); ?></div>
								</div>
								<h2><a href="<?php echo base_url();?>magazine/detail/<?php echo $makanan_tempat1->post_slug; ?>"><?php echo $makanan_tempat1->post_title; ?></a></h2>
								<?php echo substr($makanan_tempat1->post_content,0,200); ?>...
							</div>
						</div>
					</article>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>