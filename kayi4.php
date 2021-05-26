<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı IV: Ufukların Padişahı</title>
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
    <img src="Resimler/kay%C4%B14.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-IV</font></h1><br>
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
        echo "<th>22.11.2012</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>392</td>";
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
        echo "<th>37.50 TL</td>";
        echo "</tr>";
        echo "</table>"; 
        ?>
        <br>
        <h2><font color="Red"><center>KAYI-IV ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    Mülk ü dünya kimseye bâkî değil, akıbet berbad olur<br>
Ey Muhibbî, şöyle farz et kim Süleyman olmuşuz<br>

Kanunî Sultan Süleyman<br>

O, dinin sultanıdır!<br>

Din sarayı, sancaklarının ve süngüsünün direk olmasıyla sağlamlaşmıştır.<br>

O, savaşın sultanıdır!<br>

Ne tarafa yönelse fetih ve zafer onunla birliktedir. Yabancı ülkeler sancağının dinlenme alanıdır.<br>

O, güzel ahlakın sultanıdır!<br>

Cömertlik, cesaret, olgunluk gibi tüm iyiliklerin kaynağıdır.<br>

O, imarın sultanıdır!<br>

Gücünün ve hâkimiyetinin âbidesi Süleymaniye; zarafetin ve estetiğin tasavvur harikasıdır.<br>

O, adaletin sultanıdır!<br>

Devletinin baharının dünyayı aydınlatmaya başlamasıyla birlikte, gül bile dikenden cevr ü cefa görmemiştir.<br>

O, şiirin sultanıdır!<br>

Kendi ifadesiyle: “Her ne gazel ki söyleye hep âşıkânedir.”<br>

O, aşkın sultanıdır!<br>

Kahramanlar kılıç şakırtılarından haz duyarlar. O, gerçek aşkına Sigetvar önlerinde top sesleri ve tevhid naraları arasında kavuştu.<br>

Yetiştirdiği onlarca tarihçiyle, yaptığı televizyon programlarıyla yediden yetmişe herkese tarihi sevdiren Prof. Dr. Ahmet Şimşirgil, KAYI IV: Ufukların Padişahı Kanuni kitabıyla; yedi iklim padişahı Kanuni Sultan Süleyman’ı her yönüyle anlatıyor<br>
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi4" size="4">
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