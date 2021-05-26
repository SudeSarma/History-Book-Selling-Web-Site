<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı I: Ertuğrul'un Ocağı</title>
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
    <div class="orta-sol">
    <img src="Resimler/kay%C4%B11.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-I</font></h1><br>
        <?php
        echo "<table border='1' width='500px'>";
        echo "<tr>";
        echo "<th>Yazar </th>";
        echo "<th>Prof. Dr. Ahmet ŞİMŞİRGİL</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Yayın Evi </td>";
        echo "<th>Timaş Yayınları</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Yayın Tarihi </td>";
        echo "<th>24.10.2009</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>229</td>";
        echo "</tr>";
		echo "<tr>";
        echo "<th>Ebat</td>";
        echo "<th>13,5x21</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Konusu </td>";
        echo "<th>Osmanlı Tarihi</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Tür </td>";
        echo "<th>Tarih</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Fiyat </td>";
        echo "<th>24.99 TL</td>";
        echo "</tr>";
        echo "</table>"; 
        ?>
        <br>
        <h2><font color="Red"><center>KAYI-I ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    <i>"Ey bağlarımın tatlı meyvesi olan Oğul!, Saltanatına mağrur olma. Unutma ki dünya Hazreti Süleyman'a kalmamıştır. Unutma ki dünya saltanatı geçicidir. Lakin büyük bir fırsattır. Allah yolunda hizmet ve Peygamberimiz Aleyhisselam'ın şefaatine mazhariyet için bu fırsatı iyi değerlendir! Dünyaya ahiret ölçüsüyle bakarsan; ebedi saadeti feda etmeye değmediğini göreceksin."</i>

<br>-Orhan Gazi<br>
Televizyon programları ile yediden yetmişe tarihi sevdiren Prof. Dr. Ahmet Şimşirgil; Osmanoğulları'nın serüvenini kitaplarla anlatmaya devam ediyor. Şimşirgil, tamamen ilmî kaynaklardan beslenerek ve her yaştan tarih severin kolaylıkla okuyup anlayabileceği bir üslupla hazırladığı KAYI serisiyle tarihimizi önyargısız ve objektif bir şekilde okuyucunun değerlendirmesine sunuyor.

Serinin ilk kitabı KAYI I: Ertuğrul'un Ocağı'yla yazar, Osmanlı İmparatorluğu'nun kuruluşunu, bir devlet hâline gelme merhalelerini, Ertuğrul Gazi, Osman Gazi, Orhan Gazi, I. Murad, Yıldırım Bayezid Han ve Çelebi Mehmed'in saltanat yıllarını dönemin en önemli kroniklerinden faydalanarak nefis bir üslupla değerlendiriyor. Ayrıca her padişahın bilinmeyen yönleri, kılıçtan keskin sözleri, şiirleri, hocaları, dostları/düşmanları ve imar faaliyetleri tek tek anlatılıyor.

Bu kitapta; adaleti, şefkati ve hoşgörüsüyle kalpleri kazanan; yiğitliği, cesareti ve mertliğiyle dosta güven, düşmana korku salan; dünya siyasetini yönlendiren; kültür ve medeniyet hamleleri ile göz kamaştıran Osmanlı'nın kuruluş hikâyesini bir tarih ziyafeti tadında okuyacaksınız.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi1" size="4">
            </div>
            <b>Adet : </b><input type="number" name="adet" min="1" value="1" size="4">
            <input type="submit" class="button" name="gonder" value="Satın Al">
        </form>
    </div>
        <div class="temizle"></div>
    </div>
    <div class="alt">
    <p>
            <a href="index.php">Kitaplar</a> | <a href="iletisim.php">İletişim</a><p>
            <p>
            © 2019 Tüm hakları saklıdır.| Tasarım: <a href="">Sude SARMA</a>
            </p>
            <div class="temizle"></div>
    </div>
</div>       
</body>
</html>