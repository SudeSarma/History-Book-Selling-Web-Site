<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı X: II. Abdülhamid Han</title>
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
    <img src="Resimler/kay%C4%B110.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-X</font></h1><br>
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
        echo "<th>01.03.2018</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>336</td>";
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
        <h2><font color="Red"><center>KAYI-X ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                   <i>Sen değil naaşın hükümdar olsa elyakdır bize<p>

Dönsün etsin taht-ı Osmaniye tabutun cülus<p></i>

-Ahmet Rasim<p>

II. Abdülhamid Han, saltanattan çekildikten sonra milleti tarafından en çok aranan ve özlenen hükümdardır. Zira onun saltanatta olduğu 33 sene ile sonraki 10 yıllık dönemi karşılaştırmak dahi mümkün değildir.

II. Abdülhamid Han, siyasi bir deha idi. 19. asrın sonlarına doğru neredeyse tarihten silinecek olan son muazzam Türk İmparatorluğu’nu, on sene içinde yeniden dünyada rol oynayan bir hale getirecekti.

O, yed-i tûla sahibi idi. Dünyanın hangi coğrafyasında olursa olsun Müslümanlar, İslam’ın halifesini yanında buluyorlardı.

O, Osmanlı ruhunun son temsilcisi idi. Ertuğrul ve Osman Gazilerin sahip olduğu hiç değişmeden devam eden Sünni inancı yaymakta büyük gayret sarf etti. İngilizlerin doğru inanç ve itikadı bozma çalışmalarına bir kale gibi karşı durdu.

O, merhamet ve şefkatin zirvesindeydi. Hayatına kastedenleri dahi affetti.

O, en mağdur padişah olarak tarihe geçecekti. Sadece ağır hakaretlere ve iftiralara maruz kalmadı. Kendi kesesinden yaptırdığı eserlerden ismi kaldırıldı. Tuğraları tahrip edildi. Resmen adı ve namı unutturulmak istendi.

O, bir asır boyunca anladığını zannedenlerin dahi anlayamadığı bir padişah oldu.

Osmanlı Tarihi’ni herkese sevdiren Prof. Dr. Ahmet Şimşirgil, Kayı serisinin X. Kitabında, o akıcı üslubu ile vefatının 100. sene-i devriyesinde II. Abdülhamid Han’ı okuyucularının takdirine arz ediyor.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi10" size="4">
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