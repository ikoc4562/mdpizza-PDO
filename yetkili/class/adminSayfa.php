<?php
class  adminSayfa {
	
	private $tabloadi = "adminsayfa";
	public 	$tagAc;
	public  $tagKapat;
	
	// admin sayfa oluştur fonksiyonu 
	public  function adminOlustur($data){
		// data değişkeni array olarak yükleniyor
		global $db;
		$id = $db->insert($this->tabloadi, $data);
if($id){echo '1'; }else{ mysql_error(); }
    
	}
	


/// admin Sayfa Güncelle id li 

	public function adminGuncelle($data,$id){
		global $db;
		$db->where('id', $id);
		if($db->update($this->tabloadi, $data)){ /*echo 'Sayfa güncellendi*/ }else{ mysql_error(); }
		
	}
	
	// sayfa güncelle isme göre this 
	public function adminGuncelleThis($data,$where,$name){
		// İSME GÖRE Günceller
		global $db;
		$db->where('$where', $name);
		if($db->update($this->tabloadi, $data)){ /*echo 'Sayfa güncellendi*/ }else{ mysql_error(); }
	
	} 
	
	//Lİsteleme 
	public function sorgu ($sorgu){
		global $db;
		$sql = $db->rawQuery($sorgu);
		return $sql;
		
	}
	
	// admin sayfa sil ID Ye göre Siler 
	public function adminSil($id){
		global $db;
		if($id==""){
			echo "hata İd Boş ";
		}else {
			$db->where('id', $id);
			if($db->delete($this->tabloadi)){ /*echo "SİLİNDİ"; */ }else{ echo 'SİLİNEMİYOR ';  }
		}
	}
	
	
	// Tabloda ne kadar veri varsa çeker  ekrana array olarak dönüyor print_r() içeirisinde yazdır json olarak yazdır 
	public  function adminTumcek($kactane=NULL){
		global $db;
	  $users = $db->get($this->tabloadi,null,$kactane);
		return $users;
	
	}
	
	// Tek veri yazdır  ID ye Göre tek bir veri yazar
	public function adminTekveri($veri,$id){
		global $db;
		$sec = mysql_fetch_assoc(mysql_query("SELECT * FROM adminsayfa where id='$id'"));
		return $sec[$veri];
	}
	
	
	
	public function adminTekveria($veri,$id){
		global $db;
		$db->where ("id",$id);
		$user = $db->getOne($this->tabloadi);
		return $user[$veri];
	}
	
	
	// Admin Mneu alt kategori 

	public  function adminKategoriMenus($id=0,$string=0){
	
		$sql_kat = mysql_query("select * from $this->tabloadi where ustid='$id' and durum='1'");
	
	
		if(mysql_affected_rows()){
	
			echo '<ul class="sub-menu-list">';
			while ($row = mysql_fetch_array($sql_kat)){
				echo '   <li><a id="'.$row['id'].'" href="index.php?page=sayfalar&id='.$row['id'].'"><i class="fa '.$row['icon'].'"></i> <span>'.$row['adi'].'</span></a></li>';
					
					
			}
			echo '</ul>';
		}else {
	
			return false;
		}
	
	}


	// Admin Ana Kategori
	
	public  function adminKategoriMenu($id=0,$string=0){
		
			$sql_kat = mysql_query("select * from $this->tabloadi where ustid='$id' and durum='1'");
		
		
			if(mysql_affected_rows()){
				
				
				while ($row = mysql_fetch_array($sql_kat)){
					echo '   <li class="menu-list"><a href="index.php"><i class="fa '.$row['icon'].'"></i> <span>'.$row['adi'].'</span></a>';
                   
						$this->adminKategoriMenus($row['id'],$string +1);
					echo '		</li>';
							
					
				}
				
			}else {
		
				return false;
			}
				
	}
	// admin Options 
	public  function adminKategoriOption($tip=NULL,$id=0,$string=0){
	
		$sql_kat = mysql_query("select * from $this->tabloadi where ustid='$id' and durum='1'");
	
	
		if(mysql_affected_rows()){
	
	
			while ($row = mysql_fetch_array($sql_kat)){
					$ustid = $this->adminTekveri("ustid", $tip);
						if ($row['id']==$ustid) {
							$selected="selected";
						}else{
							$selected="";
						}
				
				echo '<option '.$selected.' value="'.$row['id'].'" >'.str_repeat("-", $string).$row['adi'].'</option>';
					$this->adminKategoriOption($ustid,$row['id'], $string+1);
					
			}
	
		}else {
	
			return false;
		}
	
	}
	
	// Admin Tablo 
	
	public  function tabloListe($id=0,$string=0){
	
		$sql_kat = mysql_query("select * from $this->tabloadi where ustid='$id' ");
	
	
		if(mysql_affected_rows()){
	
	
			while ($tabloValue = mysql_fetch_array($sql_kat)){
					
				if($tabloValue[durum]==0){
					$durum = "Pasif";
				}else {
					$durum="Aktif";
				}
			echo ' 
     
        <tr  class="gradeA">
            <td>  
                            <div class="square-green single-row"><div class="checkbox "><input type="checkbox" >
                                </div>
                            </div>
</td>
            <td>'.$tabloValue['codeID'].'</td>
            <td>'.str_repeat("-", $string).$tabloValue['adi'].'</td>
        
            <td class="center hidden-phone">'.$tabloValue['tarih'].'</td>
              <td class="center hidden-phone">'.$durum.'</td>
             
                  <td class="center hidden-phone"> 
                
            
                 
                 <a id="'.$tabloValue['id'].'" href="index.php?page=adminsayfa&git=form&formid='.$tabloValue[id].'" title="Düzenle" class="btn btn-default active tabloDuzenle">   <i class="fa fa-gear"></i></a>
                
                 <a id="'.$tabloValue['id'].'" href="#" title="Sil" class="btn btn-default active tabloSil">  <i class="fa fa-minus-circle"></i></a>
               
                  </td>
        </tr>
        ';	
				$this->tabloListe($tabloValue['id'],$string+1);	
			}
	
		}else {
	
			return false;
		}
	
	}
	
}