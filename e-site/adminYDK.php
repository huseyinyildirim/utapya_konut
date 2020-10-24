<?php
header ('Content-type: text/html; charset=utf-8');
      session_start();
      if($_SESSION["kullanici_adi"]) {
      include("baglan.php");
$daire=$_SESSION["kullanici_adi"];
?>
<html>
<head>

<script type="text/javascript" src="jquery-1.4.1.js"></script>
<script type="text/javascript" src="featuredcontentglider.js"></script>
<link rel="stylesheet" type="text/css" href="featuredcontentglider.css">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script language="JavaScript" type="text/javascript" src="java/jquery.js"></script>
		<script language="JavaScript" type="text/javascript">
		
		
function SayiKontrol(e) {
	olay = document.all ? window.event : e;
	tus = document.all ? olay.keyCode : olay.which;
	if((tus<48||tus>57)&&tus!=8) {
		if(document.all) { olay.returnValue = false; } else { olay.preventDefault();alert(olay.keyCode) }
	}
}		
		
		

		function yonmesaj_islem()
		{

		a= document.getElementById('gonderen_mesaji').value
       if (a == ""){
        alert('Lütfen Mesajınızı Yazınız');
        document.getElementById('gonderen_mesaji').focus();
     return false;
     }  
  	
    
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'mesajekle.php',
					data:'gonderen=' + document.getElementById('mesaji_gonderen').value +				     					     
					     '&mesaj=' + document.getElementById('gonderen_mesaji').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		


		function sifre_degistir()
		{

		a= document.getElementById('sifre').value
       if (a == ""){
        alert('Lütfen Yeni Şifrenizi Giriniz');
        document.getElementById('sifre').focus();
     return false;
     }  
  	
		b= document.getElementById('sifre2').value
       if (b == ""){
        alert('Lütfen Yeni Şifrenizi Tekrar Giriniz');
        document.getElementById('sifre2').focus();
     return false;
     } 

       if (a != b){
        alert('Lütfen Her İki Kutucuğada Aynı Şifreyi Giriniz.');
 document.getElementById('sifre').focus();
     return false;
     }      
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'sifredegistir.php',
					data:'gonderen=' + document.getElementById('gonderen').value +				     					     
					     '&sifre=' + document.getElementById('sifre').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		function eposta_gir()
		{

		a= document.getElementById('eposta1').value
       if (a == ""){
        alert('Lütfen E-Posta Adresinizi Giriniz');
        document.getElementById('eposta1').focus();
     return false;
     }  
  	
		b= document.getElementById('eposta2').value
       if (b == ""){
        alert('Lütfen E-Posta Adresinizi Tekrar Giriniz');
        document.getElementById('eposta2').focus();
     return false;
     } 

       if (a != b){
        alert('Lütfen Her İki Kutucuğada Aynı E-Posta Adresini Giriniz.');
 document.getElementById('sifre').focus();
     return false;
     }      
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'epostagir.php',
					data:'gonderen=' + document.getElementById('gonderen').value +				     					     
					     '&eposta=' + document.getElementById('eposta1').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		

		function yonetime_mesaj()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'yonetime_mesaj.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		

		function mesaj_listele()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'mesaj_listele.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
		

		function borclar_odemeler()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'borclar_odemeler.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}	
		

		
		
		function ana_sayfa(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'ana_sayfa.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		function daireana_sayfa(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'daireana_sayfa.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
		
		
		function sifre()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'sifre.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}			
		

		function maliveri()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'mali_veri.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		

		
		function cevap_bekleyen()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'cevap_bekleyen.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
		
		function cevapla(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'cevap_detay.php',
					data:'mesaj_id=' + gelen,					
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}	
		

		function yonetim_mesaj_sil(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'mesaj_yonetim_sil.php',
					data:'mesaj_id=' + gelen,					
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
		


		function cevabi_kaydet()
		{

		a= document.getElementById('cevap').value
       if (a == ""){
        alert('Lütfen Cevap Mesajını Yazınız');
        document.getElementById('cevap').focus();
     return false;
     }  
  	
		b= document.getElementById('cevap_id').value

     
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'mesaj_ilet.php',
					data:'id=' + document.getElementById('cevap_id').value +				     					     
					     '&cevap=' + document.getElementById('cevap').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		
		function daire_guncelle()
		{
		
		a= document.getElementById('ubsifre').value
       if (a == ""){
        alert('Şifre Hanesi Boş Geçilemez');
        document.getElementById('ubsifre').focus();
     return false;
     }		
		
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'daire_guncelle.php',
					data:'ubdaireno=' + document.getElementById('ubdaireno').value +
					     '&ubtelefon=' + document.getElementById('ubtelefon').value+	
					     '&ubsifre=' + document.getElementById('ubsifre').value+
					     '&ubadsoyad=' + document.getElementById('ubadsoyad').value+					     				     						     					     								     					     
					     '&ubeposta=' + document.getElementById('ubeposta').value,
					success:function(ajax_cevap)
					{
						$('#sorgu_Yukleniyor').hide();
						$('#sorgu_Sonuc').hide();
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Menu').hide();						
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		



		function borc_ekle()
		{
		
		a= document.getElementById('borc_tur').value
       if (a == "Borc Türü"){
        alert('Lütfen Borç Türünü Seçiniz');
        document.getElementById('borc_tur').focus();
     return false;
     }	
     
		b= document.getElementById('borc_ay').value
       if (b == "Ay"){
        alert('Lütfen Borcun Ait Olduğu Ayı Seçiniz');
        document.getElementById('borc_ay').focus();
     return false;
     }
     
		c= document.getElementById('borc_yil').value
       if (c == "Yıl"){
        alert('Lütfen Borcun Ait Olduğu Yılı Seçiniz');
        document.getElementById('borc_yil').focus();
     return false;
     }
     
		d= document.getElementById('borc_tutar').value
       if (d == ""){
        alert('Lütfen Borç Miktarını Belirtiniz');
        document.getElementById('borc_tutar').focus();
     return false;
     }			
		
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'borc_ekle.php',
					data:'borc_turu=' + document.getElementById('borc_tur').value +
					     '&borc_yil=' + document.getElementById('borc_yil').value+	
					     '&borc_ay=' + document.getElementById('borc_ay').value+
					     '&borc_tutar=' + document.getElementById('borc_tutar').value+	
					     '&borc_eposta=' + document.getElementById('borc_eposta').value+						     				     				     						     					     								     					     
					     '&borc_daireno=' + document.getElementById('borc_daireno').value,
					success:function(ajax_cevap)
					{
						$('#sorgu_Yukleniyor').hide();
						$('#sorgu_Sonuc').hide();
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Menu').hide();						
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}	



		function odemey_ekle()
		{
		
		a= document.getElementById('odemey_gun').value
       if (a == "Gün"){
        alert('Lütfen Ödeme Gününü');
        document.getElementById('odemey_gun').focus();
     return false;
     }	
     
		b= document.getElementById('odemey_ay').value
       if (b == "Ay"){
        alert('Lütfen Ödeme Ayını Seçiniz');
        document.getElementById('odemey_ay').focus();
     return false;
     }
     
		c= document.getElementById('odemey_yil').value
       if (c == "Yıl"){
        alert('Lütfen Ödeme Yılını Seçiniz');
        document.getElementById('odemey_yil').focus();
     return false;
     }
     
		d= document.getElementById('odemey_tutar').value
       if (d == ""){
        alert('Lütfen Ödeme Miktarını Belirtiniz');
        document.getElementById('odemey_tutar').focus();
     return false;
     }			
		
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'odeme_ekle.php',
					data:'odemey_gun=' + document.getElementById('odemey_gun').value +
					     '&odemey_ay=' + document.getElementById('odemey_ay').value+	
					     '&odemey_yil=' + document.getElementById('odemey_yil').value+
					     '&odemey_tutar=' + document.getElementById('odemey_tutar').value+						     				     				     						     					     								     					     
					     '&odemey_daireno=' + document.getElementById('odemey_daireno').value,
					success:function(ajax_cevap)
					{
						$('#sorgu_Yukleniyor').hide();
						$('#sorgu_Sonuc').hide();
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Menu').hide();						
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}	





		function sitesakin()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'sitesakin.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		


		
		
		function yeni()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').show();				
			$('#Orta_Sonuc').hide();
			$('#Orta_Yukleniyor').hide();			

		}		
		

		
		function bilgigetir()
		{		
		
					$('#sorgu_Yukleniyor').show();
			$('#sorgu_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'bilgi_sonuc.php',
					data:'adi=' + document.getElementById('adibilgi').value,					
					success:function(ajax_cevap)
					{
						$('#sorgu_Yukleniyor').hide();
						$('#sorgu_Sonuc').show();
						$('#sorgu_Sonuc').html(ajax_cevap);
					}
				}
			);
		}	
		

		function sifre_islem()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'sifre_islem.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		function siteodeme()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'siteodeme.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
		
		function mesaj_gonder()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'mesaj_gonder.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		

		function toplu_borc()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'toplu_borc.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		function toplu_borcisle()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'toplu_borcisle.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}				

		
		function ysifre_degistir()
		{

		a= document.getElementById('ydaire').value
       if (a == "Daire No"){
        alert('Lütfen Şifre Belirleyeceğiniz Daireyi Seçiniz');
        document.getElementById('ydaire').focus();
     return false;
     }  
  	
		b= document.getElementById('ysifre').value
       if (b == ""){
        alert('Lütfen Yeni Şifreyi Giriniz');
        document.getElementById('ysifre').focus();
     return false;
     } 
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'ysifredegistir.php',
					data:'daire=' + document.getElementById('ydaire').value +				     					     
					     '&sifre=' + document.getElementById('ysifre').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		function dmesaj_gonder()
		{

		a= document.getElementById('ddaire').value
       if (a == "Daire No"){
        alert('Lütfen Mesaj Göndereceğiniz Daireyi Seçiniz');
        document.getElementById('ddaire').focus();
     return false;
     }  
  	
		b= document.getElementById('dmesaj').value
       if (b == ""){
        alert('Lütfen Mesajınızı Yazınız');
        document.getElementById('dmesaj').focus();
     return false;
     } 
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'dmesaj_gonder.php',
					data:'daire_no=' + document.getElementById('ddaire').value +				     					     
					     '&mesaj=' + document.getElementById('dmesaj').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
	
		


		function mesaj_arsiv()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'mesaj_arsiv.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		function csil(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'cevap_sil.php',
					data:'mesaj_id=' + gelen,					
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		

				function banka()
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'banka.php',
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
	
		function site_odeme_yap()
		{

		a= document.getElementById('so_gun').value
       if (a == "Gün"){
        alert('Lütfen Ödeme Gününü Seçiniz');
        document.getElementById('so_gun').focus();
     return false;
     }  
  	
		b= document.getElementById('so_ay').value
       if (b == "Ay"){
        alert('Lütfen Ödeme Ayını Seçiniz');
        document.getElementById('so_ay').focus();
     return false;
     } 
     
		c= document.getElementById('so_yil').value
       if (c == "Yıl"){
        alert('Lütfen Ödeme Yılını Seçiniz');
        document.getElementById('so_yil').focus();
     return false;
     }
     
		d= document.getElementById('so_tutar').value
       if (d == ""){
        alert('Lütfen Ödeme Tuatarını Giriniz');
        document.getElementById('so_tutar').focus();
     return false;
     } 
     
		e= document.getElementById('so_aciklama').value
       if (e == ""){
        alert('Lütfen Ödeme İlişkin Açıklama Giriniz');
        document.getElementById('so_aciklama').focus();
     return false;
     }      
         	
			$('#Orta_Yukleniyor').show();
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'odeme_isle.php',
					data:'odeme_gun=' + document.getElementById('so_gun').value +
					     '&odeme_ay=' + document.getElementById('so_ay').value+	
					     '&odeme_tutar=' + document.getElementById('so_tutar').value+						     
					     '&odeme_aciklama=' + document.getElementById('so_aciklama').value+				     						     					     								     					     
					     '&odeme_yil=' + document.getElementById('so_yil').value,
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		
		
		
		function daire_getir()
		{

		a= document.getElementById('daire').value
       if (a == "Daire No"){
        alert('Lütfen Bilgilerini Görmek İstediğiniz Daireyi Seçiniz');
        document.getElementById('daire').focus();
     return false;
     }  
  	
     
        	
			$('#sorgu_Yukleniyor').show();
			$('#sorgu_Sonuc').hide();
			$.ajax
			(
				{
					type:'POST',
					url:'daire_getir.php',
					data:'daire=' + document.getElementById('daire').value,
					success:function(ajax_cevap)
					{
						$('#sorgu_Yukleniyor').hide();
						$('#sorgu_Sonuc').show();
						$('#sorgu_Sonuc').html(ajax_cevap);
					}
				}
			);
		}
		
		
		
		function sodeme_sil(gelen)
		{
			$('#Orta_Yukleniyor').show();
			$('#ekleme').hide();				
			$('#Orta_Sonuc').hide();
			$.ajax
			(
				{
					url:'sodeme_sil.php',
					data:'sodeme_id=' + gelen,					
					success:function(ajax_cevap)
					{
						$('#Orta_Yukleniyor').hide();
						$('#Orta_Sonuc').show();
						$('#Orta_Sonuc').html(ajax_cevap);
					}
				}
			);
		}		
	
		</script>
		
		
		
<style type="text/css">



.ds_box {

	background-color: #FFF;

	border: 1px solid #000;

	position: absolute;

	z-index: 32767;

}



.ds_tbl {

	background-color: #FFF;

}



.ds_head {

	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}



.ds_subhead {

	background-color: #CCC;

	color: #000;

	font-size: 12px;

	font-weight: bold;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	width: 32px;

}



.ds_cell {

	background-color: #EEE;

	color: #000;

	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}



.ds_cell:hover {

	background-color: #F3F3F3;

} /* This hover code won't work for IE */



        </style>		
		


<style type="text/css">

/*Credits: Dynamic Drive CSS Library */
/*URL: http://www.dynamicdrive.com/style/ */

.indentmenu{
font: bold 12px Arial;
width: 100%; /*leave this value as is in most cases*/
overflow: hidden;
}

.indentmenu ul{
border-left:0px solid #ab9cc3; border-right:0px solid #ab9cc3; border-top:1px solid #ab9cc3; border-bottom:1px solid #ab9cc3; margin:0; padding:0; float: left;
width: 100%; /*width of menu*/
/*dark purple border*/
background: black url('media/indentbg.gif') repeat-x center;
}

.indentmenu ul li{
display: inline;
}

.indentmenu ul li a{
float: left;
color: #000000; /*text color*/
padding: 5px 5px;
text-decoration: none;
border-right: 1px solid #564c66; /*dark purple divider between menu items*/
}

.indentmenu ul li a:visited{
color: #000000;
}

.indentmenu ul li a:hover, .indentmenu ul li .current{
color: white !important; /*text color of selected and active item*/
padding-top: 6px; /*shift text down 1px for selected and active item*/
padding-bottom: 4px; /*shift text down 1px for selected and active item*/
background: black url('media/indentbg2.gif') repeat-x center;
}

        </style>

<title>E-Site Ütopya Konutları Sitesi</title>

</head>
<?
if ($daire=="Yonetim")
{
?>
<body onload="ana_sayfa();" topmargin="0" leftmargin="0">
<?
}
else
{
?>
<body onload="daireana_sayfa();" topmargin="0" leftmargin="0">
<?
}
?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" bgcolor="#FFFFFF">
    <tr>
  

      <td>
      <p align="center">
            
      
      <div align="center">
  <center>
  <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="950" id="AutoNumber1" bgcolor="#DDE5F1">

  
    <tr>
      <td>

<?
 include("ust.php");
?>
  
      </td>
 
    </tr>

    <tr>
 
      <td>

<div id="ekleme" align="center"></div>
<div id="Orta_Yukleniyor" align="center" style="display:none;">
<img src="image/indicator.gif" width="32" height="32"></div>
<div id="Orta_Sonuc" align="center"></div>
     
      
      </td>
    </tr>
    <tr>
      <td width="940">


&nbsp;</td>
    </tr>
    
    
<div id="Orta_Menu" align="center">    

    
</div>    
    
    </table>
  </center>
</div>

      </td>
    </tr>
    <tr>
      <td>



</td>
    </tr>
    <tr>
      <td>
      <p align="center"><? include("alt.php"); ?></td>
    </tr>

      <td>

      </td>
    </tr>
  </table>
  </center>
</div>
</body>
</html>
<?php
}
else {
Header("Location: index.php");
}
?>