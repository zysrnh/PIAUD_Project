
					
					
					
										<?php

global $koneksi_db, $maxkonten;
$perintah="SELECT * FROM mod_data_profil";
$hasil = $koneksi_db->sql_query( $perintah );
$coint_i = 0;
while ($data = $koneksi_db->sql_fetchrow($hasil)) {
				$coint_i++;
				$id = md5($data['id']);
				
 echo '
 
   <div class="logo pull-left">
                <a href="index.html">
                    <img src="images/'.$data['foto'].'" alt="Logo '.$data['nama'].'" width="240px">
                </a>
            </div>

            <div class="nav-outer">

<div class="header-top">
                    <div class="contact">
 <span class="icon fa fa-phone"></span> '.$data['telp'].' 
 

'; 
					
} ?>	
										
										
						
                        
                    </div>
                    <div class="register">
                        <a href="register.html">Register</a>
                        <a href="login.html">Login </a>
                    </div>

                    
                    <div id="top-search" class="top-search">
                        <span class="flaticon-search search"></span>
                        <ul class="search-box">
                            <li>
                                  <form  action="index.php" method="get">
								  <input type="hidden" name="pilih" value="search" />
                                    <input type="text" name="query"  placeholder="Search for something...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    
                </div>