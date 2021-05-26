<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı II: Cihan Devleti</title>
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
    <img src="Resimler/kay%C4%B12.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-II</font></h1><br>
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
        echo "<th>15.09.2010</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>360</td>";
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
        <h2><font color="Red"><center>KAYI-II ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    Sultan Mehmed alayla şehre girdi ve Ayasofya’ya geldi. Atından inerek mabedin içine girdi. Ayasofya’nın içinde bulunan patrik ve halk padişahın ayaklarına kapanarak ağlaşmaya başladılar. Fatih Sultan Mehmed elleriyle susmalarını işaret etti. Ortalığı sükûnet kaplayınca patriğe:
<i>“Ayağa kalk! Ben Sultan Mehmed sana ve arkadaşlarına ve bütün halka söylüyorum ki bugünden itibaren artık ne hayatınız ve ne de hürriyetiniz hususunda benim gazabımdan korkmayınız.”</i>
<br>-Fatih Sultan Mehmed<br>

Yediden yetmişe herkese tarihi sevdiren kıymetli ilim adamı Prof. Dr. Ahmet Şimşirgil’in kaleme aldığı KAYI serisinin ikinci kitabı KAYI II: Cihan Devleti’nde; Söğüt ve Domaniç’te başlayan ve adı Osmanlı olan devletin mimarlarının planlı, programlı ve disiplinli hareketleri; insani değerlere bağlı, inançlı ve temiz yaşayışlarıyla bir asra varmadan gerçek bir dünya gücüne doğru giden muazzam başarılarının devamını bulacaksınız.
Sultan Çelebi Mehmed’in Fetret Devri’nden çıkardığı devlete, oğlu II. Murad Han zindeliğini ve itibarını yeniden kazandıracak; Osmanlı’yı Rumeli’den söküp atmak üzere son bir hamle ile tekrar harekete geçen Haçlı ordularını 1444’te Varna’da ve 1448’de Kosova’da darmadağın edecek ve nihayet Fatih Sultan Mehmed’in 1453’te İstanbul’u fethiyle gazâ aşkı artık bir cihan hükümdarlığı fikrine yönelecektir.
Kalemle kılıcı hep yan yana kullanmış Osmanlı padişahlarından II. Murad ve Fatih Sultan Mehmed’in seferleri, özel yaşamları, hocaları, imar faaliyetleri, idari, insani ve dinî yönleri hepsi KAYI II: Cihan Devleti kitabında ve tarih ziyafeti tadında…
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi2" size="4">
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