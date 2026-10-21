<?php
global $koneksi_db, $maxkonten;
$perintah="SELECT * FROM mod_data_profil";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				$id = md5($data['id']);
				
 echo '   

				 
				 
				 <section class="footer">
   
				 
    <div class="footer-bottom">
        <div class="footer-bottom-bg">
            <div class="container">
                <div class="pull-left">
                    <figure><a href="#"><img src="images/'.$data['foto'].'" alt="Logo '.$data['nama'].'"  width="240px"></a></figure>
                </div>
                <div class="pull-right">
                    <div class="menu">
                        <ul class="clearfix">
 
 

 
'; 
					
} ?>	


						
						
						<?php 
global $koneksi_db;

$hasil3 = $koneksi_db->sql_query( "SELECT * FROM menu2 WHERE published=1 ORDER BY ordering" );
while ($datamenu3 = $koneksi_db->sql_fetchrow($hasil3)) {
$idmenu3 = $datamenu3['id'];
$menuidmenu3 = $datamenu3['menu2'];
$urlidmenu3 = $datamenu3['url'];
$adamenu3=$koneksi_db->sql_numrows($koneksi_db->sql_query("SELECT * FROM submenu2 where parent='".$idmenu3."' AND published='1'"));

echo '
		
		';



if ($adamenu3 > 0) {
	
	echo ' <ul>';

$hasil23 = $koneksi_db->sql_query( "SELECT * FROM `submenu2` WHERE published='1' AND  parent='".$idmenu3."' ORDER By `ordering` ASC");
while ($datamenu23 = $koneksi_db->sql_fetchrow($hasil23)) {
$idmenu23 = $datamenu23['id'];

$menuidmenu23 = $datamenu23['menu2'];
$urlidmenu23 = $datamenu23['url'];




echo '
                      <li><a href="'.$urlidmenu23.'" title="'.$menuidmenu23.'">'.$menuidmenu23.'</a></li>                  
                         
                   
				';


}
echo ' 
                          
                         
                       
                 </ul>
				';
}



echo ' 
                   ';

}









                 
                           
?>						
					
						
						
                          
                        </ul>
                    </div>
        <?php
global $koneksi_db, $maxkonten;
$perintah="SELECT * FROM mod_data_profil";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				$id = md5($data['id']);
				$tth = date('Y');
 echo '   

				 



 <div class="copy-right">
                        Copyright © <span>'.$data['nama'].'</span> '.$tth.'
                    </div>

 
'; 
					
} ?>	
           
                </div>
            </div>
        </div>
        
    </div>
</section>






<!--Scroll to top-->
<div class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></div>
<!--Gallery Popup-->
<div class="gallery-box" id="gallery-popup">
    <!--Bg Fade Layer-->
    <div class="bg-fade-layer"></div>
    
    <div class="popup-container">
        <div class="popup-content">
        
            <div class="popup-header">
                <button type="button" class="btn-close"><span class="fa fa-close"></span></button>
                <h3>Opening Remark</h3>
            </div>
            
            <div class="content-outer">
                
                <!--Vertical Slider-->
                <div class="vertical-slider">
                    
                    <!-- template -->
                    <div class="ms-vertical-template  ms-tabs-vertical-template">
                        <!-- masterslider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                        
						
						
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
 
  <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/foto/'.$data2['foto'].'" alt="Foto '.$data2['nama'].'"/>  
                                <img class="ms-thumb" src="images/foto/'.$data2['foto'].'" alt="thumb" />
                            </div>
 
 
 
 
				
					
				';
				
}
			
			?>
						
						
						
                           
                           

                            
                        </div>
                        <!-- end of masterslider -->
                    </div>
                    <!-- end of template -->
    
                </div>
                
            </div>
            
        </div>
    <!--popup-content -->
    </div>
<!-- popup-container -->
</div>
<!-- Gallery Box -->




























						
										
										
										
										
										
							