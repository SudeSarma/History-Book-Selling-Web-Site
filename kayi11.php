<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı XI: Elveda</title>
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
    <img src="Resimler/kay%C4%B111.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-XI</font></h1><br>
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
        echo "<th>01.10.2019</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>352</td>";
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
        <h2><font color="Red"><center>KAYI-XI ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    “Facialara ve olaylara kalkan olamadım ise de paratoner vazifesi gördüm. Bütün musibetleri üzerime çektim. Kendimi feda ederek vatanı kurtarmaya çalıştım.” <br>

Sultan Vahideddin<br>

Söğüt’te coşkuyla başlayan Kayı boyunun 6 asırlık hikâyesi İstanbul’da hüzünle sona eriyor… Prof. Dr. Ahmet Şimşirgil, KAYI XI: Elveda kitabıyla okuru Osmanlı İmparatorluğu’nun son nefesini verdiği en zor yıllara götürüyor.<br>

• Afrika’daki son Osmanlı toprağı Trablusgarp’ın elden çıkışındaki gafletler nelerdi?<br>

• Balkanlarda tek kurşun atılmadan terk edilen dört asırlık yurtlar nerelerdi?<br>

• Osmanlı Devleti’ni I. Cihan Harbi’ne kimler, nasıl soktular?<br>

•Türk tarihinin en hazin harekâtı Sarıkamış’ta neler yaşandı?<br>

• Araplar Osmanlı’ya ihanet etti mi?<br>

• Filistin toprakları nasıl elden çıktı?<br>

• Çanakkale ve Medine’de verilen destansı mücadele…<br>

• İngiliz ve Siyonistlerin Osmanlı’yı parçalamak adına kurdukları büyük oyun…<br>

• Vahideddin Han ülkeyi kurtarabilme adına nasıl bir mücadele verdi?<br>

• Mustafa Kemal’le araları neden açılmıştı?<br>

• Vahideddin Han, hain miydi? Vatanı satmış mıydı? Neden yurt dışına çıkmak zorunda kaldı?<br>

• 623 yıllık kudretli tarihin en acı skandalı nasıl yaşandı?<br>

Ve daha birçok sorunun cevabı Prof. Dr. Ahmet Şimşirgil’in kaleminden KAYI XI: Elveda kitabında…<br>
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi11" size="4">
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