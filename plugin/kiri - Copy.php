

<!-- START SECTION CATEGORIES -->
<section class="small_pb">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Layanan Online</h2>
                    </div>
                    <p>Layanan akademik, civitas dan jejaring alumni online yang tersedia<br/>Menuju tautan dan ikuti petunjuk didalamnya</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="course_categories carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "576":{"items": "3"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>
                	<?php
global $koneksi_db, $maxkonten;
$perintah="SELECT * FROM mod_data_layanan order by id ASC LIMIT 12";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				$id = md5($data['id']);
				if (!isset($warna)) $warna = 'bg_light_green"';
else $warna = 'bg_blue';	
 echo '   
 
 <div class="item" style="color:#333333;border:1px solid #333333;">
                    	<div class="single_categories">
                        	<a href="'.$data['link'].'" class="" style="color:#333333;">
                            	<i class="fa fa-'.$data['icon'].'"></i>
                           '.$data['nama'].'
                            </a>
                        </div>
                    </div>
					
				
 
 

 
'; 
					
} ?>		
					
					
					
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CATEGORIES -->


<!-- START SECTION COURSES -->
<section class="small_pt">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Artikel Berita</h2>
                    </div>
                    <p>Kumpulan update artikel berita terkini kampus, seputar akademik, civitas maupun kegiatan lainnya</p>
                </div>
            </div>
        </div>
        <div class="row">
		
	<?php

						$query2 = $koneksi_db->sql_query( "SELECT * FROM `artikel` WHERE publikasi=1 ORDER BY `id` DESC LIMIT 6" );	
						while ($data = $koneksi_db->sql_fetchrow($query2)) {
						$id2    = $data[0];
						$judul2    = $data[1];
					$gambar = $data['gambar'];
				      	$post = $data[2];
					$na = catch_that_image($post);
						$url=str_replace(" ", "-", $data[1]);
						$idzz = $data['id'];

	$topik = $data['topik'];
$adaxc=$koneksi_db->sql_numrows($koneksi_db->sql_query("SELECT * FROM komentar where artikel='".$idzz."'"));

$propinsi4 = $koneksi_db->sql_query("SELECT * FROM topik WHERE id='$topik'");
while($p4=$koneksi_db->sql_fetchrow($propinsi4)){
	$kelas24 = $p4['topik'];
}


						
						
											echo '
											
												<div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="artikel/'.$data[0].'/'.$url.'.html" title="'.$data[1].'"><img src="images/artikel/'.$gambar.'" alt="'.$data[1].'"/></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="artikel/'.$data[0].'/'.$url.'.html" title="'.$data[1].'">'.$data[1].'</a></h4>
                        <p>'.limitTXT(strip_tags($data['konten']),60).'</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#" ><i class="ti-calendar"></i>'.datetimess($data[5]).'</a></li>
               
                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
											
											
											
							
										

     ';
						
						}
						?>
					                     		
		
		
        
			
			
			
			
			
	
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="medium_divider"></div>
                	<a href="kategori/1/Artikel-Berita.html" class="btn btn-default">Lihat semua berita <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COURSES -->
