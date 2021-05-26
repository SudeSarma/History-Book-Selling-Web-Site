<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı VI: İmparatorluğun Zirvesi ve Dönüş</title>
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
    <img src="Resimler/kay%C4%B16.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-VI</font></h1><br>
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
        echo "<th>29.12.2014</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>368</td>";
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
        echo "<th>35.00 TL</td>";
        echo "</tr>";
        echo "</table>"; 
        ?>
        <br>
        <h2><font color="Red"><center>KAYI-VI ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    <i>On yedinciasrın son yirmi yılına girildiğinde Osmanlı Devleti gücünün ve kudretinin zirvesindeydi, dünya siyasetinde etkin bir şekilde hükmünü icra ediyordu. Dünyada yenemeyecekleri hiçbir devlet yoktu.</i>

Prof. Dr. Ahmet Şimşirgil, adaletiyle kalpleri kazanan; yiğitliği, cesareti ve mertliğiyle dosta güven, düşmana korku salan; üç çağa damgasını vurmuş, üç kıtaya yayılmış Devlet-i Aliyye-i Osmaniye’nin hikâyesine KAYI VI: İmparatorluğun Zirvesi ve Dönüş kitabıyla devam ediyor. Bu eserde, I. Mustafa’dan II. Osman’a, IV. Murad’dan IV. Mehmed Han’a kadar birçok padişahın; Köprülü Mehmed Paşa’dan Köprülü Fazıl Ahmed Paşa’ya; Tarhuncu Ahmed Paşa’dan Merzifonlu Kara Mustafa Paşa’ya kadar birçok devlet adamının; Halime Valide Sultan’dan Mahfiruz Hatice Sultan’a, Hatice Turhan Sultan’dan Kösem Sultan’a kadar birçok valide sultanın nasıl yaşadığını, neler yaptıklarını, imparatorluğu idame ettirmek gayesiyle ne gibi siyasi yollar izlediklerini, imar faaliyetlerini ve şahsiyetlerini bulacaksınız.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi6" size="4">
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