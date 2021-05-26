<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adres Bilgileri</title>
<link href="style.css" rel="stylesheet">    
</head>
    
<body>
 
<div class="sayfa">
    <div class="ust">
    <a id="baslik" href="#">
    <a href="index"><img src="Resimler/Logo.png" alt="Logo"/></a>
    </a>
    <ul id="menu">
        <li><a href="index.php" class="aktif">Kitaplar</a></li>
        <li><a href="iletisim.php" class="aktif">İletişim</a></li> 
    </ul>
        <div class="temizle"></div>
    </div>
    <div class="orta">
    <div class="orta-sol2">
    <?php
        $kitap = $_POST['kadi'];
        $adet = $_POST['adet'];
        if($kitap == "kayi1")
        {
            echo '<img src="Resimler/kay%C4%B11.jpg">';
        }
        if($kitap == "kayi2")
        {
            echo '<img src="Resimler/kay%C4%B12.jpg">';
        }
        if($kitap == "kayi3")
        {
            echo '<img src="Resimler/kay%C4%B13.jpg">';
        }
        if($kitap == "kayi4")
        {
            echo '<img src="Resimler/kay%C4%B14.jpg">';
        }
        if($kitap == "kayi5")
        {
            echo '<img src="Resimler/kay%C4%B15.jpg">';
        }
        if($kitap == "kayi6")
        {
            echo '<img src="Resimler/kay%C4%B16.jpg">';
        }
        if($kitap == "kayi7")
        {
            echo '<img src="Resimler/kay%C4%B17.jpg">';
        }
        if($kitap == "kayi8")
        {
            echo '<img src="Resimler/kay%C4%B18.jpg">';
        }
        if($kitap == "kayi9")
        {
            echo '<img src="Resimler/kay%C4%B19.jpg">';
        }
        if($kitap == "kayi10")
        {
            echo '<img src="Resimler/kay%C4%B110.jpg">';
        }
        if($kitap == "kayi11")
        {
            echo '<img src="Resimler/kay%C4%B111.jpg">';
        }
    ?>
    </div>
        
    <div class="orta-sag2">
        <h1><font color="Red">ALIŞVERİŞ TAMAMLAMA</font></h1><br>
        <?php
        $kitap = $_POST['kadi'];
        $adet = $_POST['adet'];
        if($kitap == "kayi1")
        {
            $fiyat = $adet * 24.99 ;
        }
        if($kitap == "kayi2")
        {
            $fiyat = $adet * 35 ;
        }
        if($kitap == "kayi3")
        {
            $fiyat = $adet * 35 ;
        }
        if($kitap == "kayi4")
        {
            $fiyat = $adet * 37.50;
        }
        if($kitap == "kayi5")
        {
            $fiyat = $adet * 35;
        }
        if($kitap == "kayi6")
        {
            $fiyat = $adet * 35;
        }
        if($kitap == "kayi7")
        {
            $fiyat = $adet * 32.50;
        }
        if($kitap == "kayi8")
        {
            $fiyat = $adet * 32.50;
        }
        if($kitap == "kayi9")
        {
            $fiyat = $adet * 32;
        }
        if($kitap == "kayi10")
        {
            $fiyat = $adet * 35;
        }
        if($kitap == "kayi11")
        {
            $fiyat = $adet * 35;
        }
		echo "<b>Adet</b> : $adet <br>";
        echo "<b>Toplam Fiyat</b> :", $fiyat , " TL <br>";
    ?>
        <form action="basarili.php">
        
            <br><b>Ad</b><input type="text" name="ad" required="required" placeholder="Adınız.."><br><br>
            <b>Soyad</b><input type="text" name="soyad" required="required" placeholder="Soyadınız.."><br><br>
            <b>Şehirler</b><select name="Sehir"><br><br>
        <option value="0">Şehirler</option>
        <option value="1">Adana</option>
        <option value="2">Adıyaman</option>
        <option value="3">Afyonkarahisar</option>
        <option value="4">Ağrı</option>
    <option value="5">Amasya</option>
    <option value="6">Ankara</option>
    <option value="7">Antalya</option>
    <option value="8">Artvin</option>
    <option value="9">Aydın</option>
    <option value="10">Balıkesir</option>
    <option value="11">Bilecik</option>
    <option value="12">Bingöl</option>
    <option value="13">Bitlis</option>
    <option value="14">Bolu</option>
    <option value="15">Burdur</option>
    <option value="16">Bursa</option>
    <option value="17">Çanakkale</option>
    <option value="18">Çankırı</option>
    <option value="19">Çorum</option>
    <option value="20">Denizli</option>
    <option value="21">Diyarbakır</option>
    <option value="22">Edirne</option>
    <option value="23">Elazığ</option>
    <option value="24">Erzincan</option>
    <option value="25">Erzurum</option>
    <option value="26">Eskişehir</option>
    <option value="27">Gaziantep</option>
    <option value="28">Giresun</option>
    <option value="29">Gümüşhane</option>
    <option value="30">Hakkâri</option>
    <option value="31">Hatay</option>
    <option value="32">Isparta</option>
    <option value="33">Mersin</option>
    <option value="34">İstanbul</option>
    <option value="35">İzmir</option>
    <option value="36">Kars</option>
    <option value="37">Kastamonu</option>
    <option value="38">Kayseri</option>
    <option value="39">Kırklareli</option>
    <option value="40">Kırşehir</option>
    <option value="41">Kocaeli</option>
    <option value="42">Konya</option>
    <option value="43">Kütahya</option>
    <option value="44">Malatya</option>
    <option value="45">Manisa</option>
    <option value="46">Kahramanmaraş</option>
    <option value="47">Mardin</option>
    <option value="48">Muğla</option>
    <option value="49">Muş</option>
    <option value="50">Nevşehir</option>
    <option value="51">Niğde</option>
    <option value="52">Ordu</option>
    <option value="53">Rize</option>
    <option value="54">Sakarya</option>
    <option value="55">Samsun</option>
    <option value="56">Siirt</option>
    <option value="57">Sinop</option>
    <option value="58">Sivas</option>
    <option value="59">Tekirdağ</option>
    <option value="60">Tokat</option>
    <option value="61">Trabzon</option>
    <option value="62">Tunceli</option>
    <option value="63">Şanlıurfa</option>
    <option value="64">Uşak</option>
    <option value="65">Van</option>
    <option value="66">Yozgat</option>
    <option value="67">Zonguldak</option>
    <option value="68">Aksaray</option>
    <option value="69">Bayburt</option>
    <option value="70">Karaman</option>
    <option value="71">Kırıkkale</option>
    <option value="72">Batman</option>
    <option value="73">Şırnak</option>
    <option value="74">Bartın</option>
    <option value="75">Ardahan</option>
    <option value="76">Iğdır</option>
    <option value="77">Yalova</option>
    <option value="78">Karabük</option>
    <option value="79">Kilis</option>
    <option value="80">Osmaniye</option>
    <option value="81">Düzce</option>
</select>
            <br><br><b>İlçe</b><input type="text" name="ilce" required="required" placeholder="İlçeniz.."><br><br>
            <b>Adres</b><input type="text" name="adres" size="60" required="required" placeholder="Adresiniz.."><br><br>
            <input type="submit" name="gonder" value="Alış Verişi Tamamla">
        </form> 
        </div> 
        </div> 
    <div class="alt">
    <p>
            <a href="index.php">Kitaplar</a> | <a href="iletisim.php">İletisim</a><p>
            <p>
            © 2019 Tüm hakları saklıdır.| Tasarım: <a href="">Sude SARMA</a>
            </p>
            <div class="temizle"></div>
        </div> 
 </div> 
</body>
</html>