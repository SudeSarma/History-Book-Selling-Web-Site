<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı VII: Kutsal İttifaka Karşı</title>
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
    <img src="Resimler/kay%C4%B17.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-VII</font></h1><br>
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
        echo "<th>01.10.2015</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>296</td>";
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
        echo "<th>32.50 TL</td>";
        echo "</tr>";
        echo "</table>"; 
        ?>
        <br>
        <h2><font color="Red"><center>KAYI-VII ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    Prof. Dr. Ahmet Şimşirgil’in yediden yetmişe herkesin ilgi ve beğenisini kazanan KAYI serisi, 7. kitabıyla devam ediyor.
Kayı VII: Kutsal İttifaka Karşı’da II. Süleyman, II. Ahmed, II. Mustafa, III. Ahmed ve I. Mahmud Han dönemlerini okuyacak; Viyana bozgunundan sonra, önce Karlofça Antlaşması’na kadar süren bir ölüm kalım mücadelesine ve ardından toparlanma çabalarıyla birlikte Osmanlı’ya bu imkânı tanımak istemeyen Batılı devletlerin amansız saldırılarına şahit olacaksınız.

Fazıl Mustafa Paşa’dan Yeğen Osman Paşa’ya, Kadı Ali Paşa’dan Şeyhülislam Feyzullah Efendi’ye, Nevşehirli Damad İbrahim Paşa’dan İbrahim Müteferrika’ya, Humbaracı Ahmed Ağa’dan Baltacı Mehmed Paşa’ya Hacı Selim Giray’dan Bâkî’ye kadar birçok devlet ve ilim adamının faaliyetleri; Lâle Devri, Patrona Halil İsyanı, büyük İstanbul depremi, binlerce binanın yok olmasına sebep olan İstanbul yangınlarına kadar birçok olayı yine nefesinizi tutarak okuyacaksınız…
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi7" size="4">
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