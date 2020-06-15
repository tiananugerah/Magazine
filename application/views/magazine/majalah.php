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
        <div class="row">
            <div class="col-md-12">
                <div class="page-description">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <aside>
                                <div class="aside-body">
                                <figure class="ads">
                                    <a href="single.html">
                                        <img src="http://drive.google.com/uc?export=view&id=<?php echo $tampili->post_img; ?>" >
                                    </a>
                                </figure>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3><?php echo $tampili->post_title ?></h3>
                            <div class="time"><?php echo tanggal_indo($tampili->created_at,TRUE); ?></div><br>
                            <!-- Button trigger modal -->
                            <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                              Baca
                            </button><br>
                            <p>
                                <a  class="btn btn-default btn-block" href="https://drive.google.com/uc?export=download&id=<?php echo $tampili->post_link ?>" target="_blank">Download</a>
                            </p>
                            
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h6 class="modal-title" id="myModalLabel"><?php echo $tampili->post_title ?></h6> 
                                  </div>
                                  <div class="modal-body">
                                    <div style="text-align: center;">
                                        <iframe src="http://docs.google.com/gview?url=https://drive.google.com/uc?id=<?php echo $tampili->post_link ?>&embedded=true&embedded=true" 
                                        style="width:100%; height:500px;" frameborder="0"></iframe>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="article main-article">
                        <h4>Deskripsi</h4>
                        <?php echo $tampili->post_content ?>
                </article>
                </div>
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
        <h1>
            <div class="text" style="background-color:#fbde44;padding-top: 15px; padding-bottom: 15px;padding-left: 10px; padding-right: 10px;">Majalah Populer</div>
        </h1>
        <div class="owl-carousel owl-theme carousel-1">
            <?php
                foreach ($majalah as $majalah){
            ?>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah->post_slug; ?>">
                            <img src="https://lh3.googleusercontent.com/d/<?php echo $majalah->post_img; ?>=s500?authuser=0" alt="<?php echo $majalah->post_title; ?>" height="370px">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                                <div class="time"><?php echo tanggal_indo($majalah->created_at,TRUE); ?></div>
                        </div>
                        <h2><a href="<?php echo base_url();?>magazine/majalah/<?php echo $majalah->post_slug; ?>"><?php echo $majalah->post_title; ?></a></h2>
                    </div>
                </div>
            </article>
            <?php
                }
            ?>
        </div>
    </div>
</section>