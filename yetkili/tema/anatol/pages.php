<?php

if($_GET['page']=="sayfalar"){

	$adminsayfa = new adminSayfa();
	$sayfa =  $adminsayfa->adminTekveri("include", $_GET['id']);
	include ($sayfa);
	
	
}
// ADMİN SAYFASI OLUŞTURMA
if ($_GET[page]=="adminsayfa") {
	
	
	switch ($_GET['git']) {
		case "form":
			include 'sayfa/admin/adminform.php';
			break;
				
		case "icerikForm":
			include 'sayfa/icerik/icerikForm.php';
			break;
				
		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}
	
	
}
// İçerik yönetimi SAYFASI OLUŞTURMA
else if($_GET[page]=="icerik"){


		switch ($_GET['git']) {
		
			case "icerikForm":
				include 'sayfa/icerik/icerikForm.php';
				break;
			
			default:
				//include 'sayfa/admin/adminsayfa.php';
			break;
		}

}
// SİTE yönetimi SAYFASI OLUŞTURMA
else if($_GET[page]=="siteyonetimi"){


	switch ($_GET['git']) {
	
				
		case "menuForm":
			include 'sayfa/siteyonetimi/menuForm.php';
			break;
			case "menuOlustur":
				include 'sayfa/siteyonetimi/menuOlustur.php';
				break;
				case "sliderForm":
				include 'sayfa/siteyonetimi/sliderForm.php';
				break;
			case "parcacikform":
				include 'sayfa/siteyonetimi/parcacikForm.php';
				break;

				
		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}

}

// Kullanıcılar Sayfası OLUŞTURMA
else if($_GET[page]=="kullanicilar"){


	switch ($_GET['git']) {
	
				
		case "uyeForm":
			include 'sayfa/kullanicilar/uyeForm.php';
			break;
			
			case "yoneticiForm":
			include 'sayfa/kullanicilar/yoneticiForm.php';
			break;
			
		case "userForm":
			include 'sayfa/kullanicilar/userForm.php';
			break;
		
				
		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}

}

// Üyeler Sayfası OLUŞTURMA
else if($_GET[page]=="uyeler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/uyeler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/uyeler/duzenle.php';
			break;
		
				
		default:
			//include 'sayfa/admin/adminsayfa.php';
			break;
	}

}
// bankahesap  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="bankahesap"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/bankahesap/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/bankahesap/duzenle.php';
			break;
 
		    case "Fotograf":
			include 'sayfa/bankahesap/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/bankahesap/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/bankahesap/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/bankahesap/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/bankahesap/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/bankahesap/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Kurumsal  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="kurumsal"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/kurumsal/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/kurumsal/duzenle.php';
			break;
 
		    case "Fotograf":
			include 'sayfa/kurumsal/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/kurumsal/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/kurumsal/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/kurumsal/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/kurumsal/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/kurumsal/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}
// Slider  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="slider"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/slider/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/slider/duzenle.php';
			break;
 
		    case "Fotograf":
			include 'sayfa/slider/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/slider/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/slider/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/slider/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/slider/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/slider/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Reklamlar  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="reklamlar"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/reklamlar/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/reklamlar/duzenle.php';
			break;
 
		    case "Fotograf":
			include 'sayfa/reklamlar/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/reklamlar/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/reklamlar/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/reklamlar/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/reklamlar/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/reklamlar/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Klarnettamir  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="klarnettamir"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/klarnettamir/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/klarnettamir/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/klarnettamir/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/klarnettamir/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/klarnettamir/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/klarnettamir/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/klarnettamir/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/klarnettamir/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Sss  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Sss"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Sss/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Sss/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/Sss/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/Sss/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/Sss/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/Sss/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/Sss/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/Sss/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Users  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="Users"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Users/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Users/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/Users/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/Users/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/Users/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/Users/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/Users/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/Users/dosyaduzenle.php';
			break;
			
				
			 case "Bultenler":
			include 'sayfa/Users/bultenler.php';
			break;
			
			 case "BDuzenle":
			include 'sayfa/Users/bultenduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Klarnet Kursu  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="klarnetkurs"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/klarnetkurs/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/klarnetkurs/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/klarnetkurs/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/klarnetkurs/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/klarnetkurs/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/klarnetkurs/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/klarnetkurs/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/klarnetkurs/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Makamlar YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="makamlar"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/makamlar/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/makamlar/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/makamlar/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/makamlar/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/makamlar/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/makamlar/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/makamlar/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/makamlar/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// OnemliSahsiyetler YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="OnemliSahsiyetler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/OnemliSahsiyetler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/OnemliSahsiyetler/duzenle.php';
			break;
 
		 					
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Sorular YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="sorular"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/sorular/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/sorular/duzenle.php';
			break;
			
 		 case "Cevaplar":
			include 'sayfa/sorular/index_cevap.php';
			break;
		 					
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// İlan  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="ilanlar"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/ilanlar/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/ilanlar/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/ilanlar/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/ilanlar/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/ilanlar/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/ilanlar/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/ilanlar/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/ilanlar/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}
// Mağaza  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="magaza"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/magaza/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/magaza/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/magaza/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/magaza/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/magaza/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/magaza/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/magaza/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/magaza/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}


// Türk Müziği  YÖNETİM  Sayfası OLUŞTURMA
else if($_GET[page]=="turkmuzigi"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/turkmuzigi/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/turkmuzigi/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/turkmuzigi/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/turkmuzigi/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/turkmuzigi/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/turkmuzigi/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/turkmuzigi/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/turkmuzigi/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}




// Etkinlikler  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Etkinlikler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Etkinlikler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Etkinlikler/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/Etkinlikler/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/Etkinlikler/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/Etkinlikler/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/Etkinlikler/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/Etkinlikler/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/Etkinlikler/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Kuruluslar  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Kuruluslar"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Kuruluslar/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Kuruluslar/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/Kuruluslar/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/Kuruluslar/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/Kuruluslar/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/Kuruluslar/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/Kuruluslar/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/Kuruluslar/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Oneri Mesajları  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Oneri"){
 
	switch ($_GET['git']) {
  		 			
		 case "Duzenle":
			include 'sayfa/Oneri/duzenle.php';
			break;
 						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Ziyaretler  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Ziyaretler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Ziyaretler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Ziyaretler/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/Ziyaretler/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/Ziyaretler/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/Ziyaretler/fotoduzenle.php';
			break;
			
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Nota Arşivi  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="notaarsivi"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/notaarsivi/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/notaarsivi/duzenle.php';
			break;
 
		 case "Fotograf":
			include 'sayfa/notaarsivi/fotograf.php';
			break;
			
			 case "yeniFoto":
			include 'sayfa/notaarsivi/yeniFoto.php';
			break;
			
			 case "FotoDuzenle":
			include 'sayfa/notaarsivi/fotoduzenle.php';
			break;
			
			 case "Dosya":
			include 'sayfa/notaarsivi/dosya.php';
			break;
			
			 case "yeniDosya":
			include 'sayfa/notaarsivi/yeniDosya.php';
			break;
			
			 case "DosyaDuzenle":
			include 'sayfa/notaarsivi/dosyaduzenle.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Yazar ekleme Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Yazar"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Yazar/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Yazar/duzenle.php';
			break;
  	 						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}



// Egitmenler  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="Egitmenler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/Egitmenler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/Egitmenler/duzenle.php';
			break;
  
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

// Kategoriler  Yönetim  Sayfası OLUŞTURMA
else if($_GET[page]=="kategoriler"){


	switch ($_GET['git']) {
	
				
		case "yeniEkle":
			include 'sayfa/kategoriler/yeniEkle.php';
			break;
			
		 case "Duzenle":
			include 'sayfa/kategoriler/duzenle.php';
			break;
  
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}



// DOSYA YÖNETİMİ  Sayfası OLUŞTURMA
else if($_GET[page]=="dosyayonetimi"){


	switch ($_GET['git']) {
	
				
		case "dosyaForm":
			include 'sayfa/dosyayonetimi/dosyaForm.php';
			break;
						
		default:
			//include 'sayfa/dosyayonetimi/index.php';
			break;
	}

}

