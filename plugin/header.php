
                   
                
                 
		
		<section class="rev_slider_wrapper">
    <h2 class="hidden">rev slider</h2>
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>

          
		
			<?php
$perintah="SELECT * FROM slider ORDER By id DESC LIMIT 6";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				
				if($coint_i==1)
				{
					$aktifs = 'active';
				} else {
					
					$aktifs = '';
				}
			
			
			
			
			
 echo '
  <li class="gradient-overlay overly" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slides/'.$data['foto'].'"  data-saveperformance="off"  data-title="'.$data['nama'].'">
                <img src="images/slides/'.$data['foto'].'"  alt="'.$data['nama'].'"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
               
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="right" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="outer-box" >
                   
                    <h3>'.$data['nama'].' </h3>  
<h4>'.$data['ket'].'</h4>					
                </div></div>
                
            </li>

 
 
 
 


  ';
 
 
 

					
} ?>	




		 
          
                
        </ul>
    </div>
</section>
