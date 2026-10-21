<?php
$perintah="SELECT * FROM halaman WHERE id='1'";
$hasil = $koneksi_db->sql_query( $perintah );
				while ($data = $koneksi_db->sql_fetchrow($hasil)) {

				$post = $data[2];
							$na = $data[3];
				
					


					
					if (!$na){	
			
			echo '
				
				
<section class="about">
    <div class="container">
                
        <div class="row">
            <div class="single-column col-md-12 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="post-content">
                        <div class="section-title">
                            <h2>'.$data[1].'</h2>
                        </div>
                       <div class="text" style="margin-bottom:12px;">
                            '.$data[2].'
                        </div>
						
						 <ul class="list">
                            <li><a href="forum.html" >Forum Diskusi</a></li>
                            <li><a href="pengaduan.html" >Saran Kritik dan Pengaduan</a></li>
                            <li><a href="direktori.html" >Direktroi Link</a></li>
                        </ul>
                      <div class="link">
                            <a href="register.html" class="read-more">Register</a>
                            <a href="login.html" class="read-more">Login</a>
                        </div>
                    </div>
                </div>    
                     

            </div>
			
			
			';
			} else {
				echo '
				
				
<section class="about">
    <div class="container">
                
        <div class="row">
            <div class="single-column col-md-6 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="post-content">
                        <div class="section-title">
                            <h2>'.$data[1].'</h2>
                        </div>
                        <div class="text" style="margin-bottom:12px;">
                            '.$data[2].'
                        </div>
						
						 <ul class="list">
                          <li><a href="forum.html" >Forum Diskusi</a></li>
                            <li><a href="pengaduan.html" >Saran Kritik dan Pengaduan</a></li>
                            <li><a href="direktori.html" >Direktroi Link</a></li>
                        </ul>
						
                      <div class="link">
                         <a href="register.html" class="read-more">Register</a>
                            <a href="login.html" class="read-more">Login</a>
                        </div>
   
                    </div>
                </div>    
                  

            </div>
			
			
			';
			}

			
				
			
			if (!$na){	
			
			
			} else {
			
			echo '
			
            <div class="single-column col-md-6 col-sm-12">  
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/pages/'.$data[3].'" alt="'.$data[1].'"></a>
                    </figure>
                </div> 
            </div>
			
			';
			
			}	
			
			echo '
        </div>
    </div>           
</section>				
				
			
				
				';
	
								

					
}	

								?>			
				






<section class="event" style="margin-top:-160px;">
    <div class="container">
 <div class="section-title center">
        <h2>Artikel <span>Berita</span></h2><br/><br/>
    </div>
        <div class="event-carousel">
		
		
		
						
<?php

						$query2 = $koneksi_db->sql_query( "SELECT * FROM `artikel` WHERE publikasi=1 ORDER BY `id` DESC LIMIT 8" );	
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
											
<div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="img-holder">
                    <figure><a href="#"><img src="images/artikel/'.$gambar.'" alt="'.$data[1].'"/></a></figure>
                    <div class="content bg-color-1">
                        <div class="inner-box">
                            <div class="btn-box">
                                <div class="count">'.dbd($data[5]).'</div>
                                <div class="month">'.dbm($data[5]).'</div>
                            </div>
                            <h4><a href="artikel/'.$data[0].'/'.$url.'.html" title="'.$data[1].'">'.$data[1].'</a></h4>
                            <p><span class="fa fa-clock-o"></span> '.datetimess($data[5]).'</p>
                            <p><span class="fa fa-map-marker"></span> '.$kelas24.'</p>
                        </div>
                    </div>
                    
                </div>

            </div>											
											
											
											
							
								
				
				

				
     ';
						
						}
						?>
		
		
            


        </div>

    </div>
</section>






<section class="gallery-section gallery-three-column style-1">
    <div class="container">
 <div class="section-title center">
        <h2>Galeri Foto <span>Video</span></h2>
    </div>
    
        <!--Sortable Masonry-->
        <div class="sortable-carousel">
            <!--Filter-->
            <div class="row">
                
				<?php
				$perintah2="SELECT * FROM mod_data_foto ORDER By id DESC LIMIT 8";
$hasil2 = $koneksi_db->sql_query( $perintah2 );
$coint_i = 0;
while ($data2 = $koneksi_db->sql_fetchrow($hasil2)) {
				$coint_i++;
				
				$kid2 = $data2['kat'];

$propinsi1212 = $koneksi_db->sql_query("SELECT * FROM mod_data_fotokat WHERE id='$kid2'");
while($p1112=$koneksi_db->sql_fetchrow($propinsi1212)){
$namax2 = $p1112['nama'];
}
				
				
					$url2=str_replace(" ", "-", $namax2);
			
 echo '		
 
  <div class="col-md-3 col-sm-6 col-xs-12 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/foto/'.$data2['foto'].'" alt="Foto '.$data2['nama'].'"></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Open Gallery Popup">'.$data2['nama'].'</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Open Gallery Popup"><span class="icon-magnifier"></span></a>
                                    <a href="gallery/'.$kid2.'/'.$url2.'.html" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
 
 
				
					
				';
				
}
			
			?>
				
				
				
          
          
            </div>
            <!--Filter-->
            <div class="row">
                

 				
<?php
$perintah="SELECT * FROM mod_data_video ORDER By id DESC LIMIT 3";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_ix++;
				
	
 echo '


  <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="http://img.youtube.com/vi/'.$data['video'].'/hqdefault.jpg" alt="Video '.$data2['nama'].'"></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3>'.$data2['nama'].'</h3>
                
                                    <a href="https://www.youtube.com/embed/'.$data['video'].'" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
 



'; 
					
} ?>	         					
            
            </div>

            
        </div>
        
    </div>
   
</section>


<section class="call-out" style="padding:50px;">
    <div class="container">
        <div class="row">

            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text-left clearfix">
                    <h2>Daftar Sekarang!</h2>
                    <p>Berbagai layanan dan fasilitas terbaru kami hadirkan untuk putra putri anda.<br>Dengan tenaga pengajar yang profesional.</p>
                </div>
                    
            </div>

            <div class="column col-md-3 col-sm-12 col-xs-12">
                <div class="text-right padd-top-20">
                    <a href="#" class="theme-btn btn-style-one">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <div class="section-title center">
            <h2>Guru <span>Pengajar</span></h2><br/><br/>
        </div>

        <div class="team-list">
            <div class="row">
			
			
						
<?php
$perintah="SELECT * FROM mod_data_guru ORDER By rand() LIMIT 4";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_ix++;
				
					$url=str_replace(" ", "-", $data[1]);

 echo '
 <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="item">
                        <div class="img-holder">
                            <figure><a href=""><img src="images/guru/'.$data['foto'].'" alt="'.$data['nama'].'"/></a></figure>
                            <div class="content">
                                <h2><a href="">'.$data['nama'].'</a></h2>
                                <p>'.$data['pekerjaan'].'</p>
                            </div>
                            
                        </div>
                        
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h2><a href="">'.$data['nama'].'</a></h2>
                                    <p>head teacher</p>
                                </div>
                                <ul class="social">
                                    <li><a href="'.$data['fb'].'"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="'.$data['tw'].'"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="'.$data['in'].'"><i class="fa fa-instagram"></i></a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                </div>
				
				
 
 
'; 
					
} ?>	         									

 			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
                
            
            </div>
        </div>
            

    </div>
</section> 


<?php
global $koneksi_db, $maxkonten;
$perintah="SELECT * FROM mod_data_profil";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				$id = md5($data['id']);
				
 echo '   

				 
<section class="footer" style="margin-top:-40px;margin-bottom:-40px;">
<div class="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Alamat</a></h4>
                            <p>'.$data['alamat'].'</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-technology-2"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Telephone</a></h4>
                            <p>'.$data['telp'].'</p>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-interface"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Email</a></h4>
                            <p>'.$data['email'].' </p>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div></section> 
'; } ?>