<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı V: Kudret ve Azamet Yılları</title>
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
    <img src="Resimler/kay%C4%B15.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-V</font></h1><br>
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
        echo "<th>14.05.2013</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>344</td>";
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
        <h2><font color="Red"><center>KAYI-V ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                   <i>Paşa! Paşa! Sen bu Devlet-i Aliyye’yi henüz tanımamışsın. Allah aşkına şuna inan. Bu devlet öyle bir devlettir ki eğer isterse o donanmanın bütün demirlerini gümüşten, halatlarını ibrişimden ve yelkenlerini atlastan yapmakta asla güçlük çekmez. Hangi geminin gerekli alet ve yelkenini yetiştiremezsem gel bu minval üzere benden iste.</i>

<br><p>-Sokollu Mehmed Paşa<p>

Kendine has anlatım tarzı ve farklı bakış açısı ile yediden yetmişe herkese tarihi sevdiren Prof. Dr. Ahmet Şimşirgil, KAYI serisinin beşinci kitabı KAYI V: Kudret ve Azamet Yılları’nda II. Selim, III. Murad, III. Mehmed ve Sultan I. Ahmed devirlerini anlatıyor.

KAYI V: Kudret ve Azamet Yılları, Osmanlı Devleti’nde asırlardır devam eden siyasi gelenekte büyük bir değişimin yaşandığı yılları anlatıyor. Enderun’da yetişerek Kanuni döneminde sadarete kadar yükselen büyük devlet adamı Sokollu Mehmed Paşa’nın bu değişimin en büyük mimarıdır.Artık seferlerde padişahlar değil, güçlü serdarlar görülmeye başlanacaktır. Aynı zamanda yirmi beş yıl fasılasız devam eden savaşlar, bütün dünyada baş gösteren ekonomik zorluklar, paranın değerinin düşmesi, tımar sistemindeki aksamalar vs. büyük Celâlî fetretini de beraberinde getirecektir.

Kıbrıs’ın Fethi, İnebahtı mağlubiyeti, Şeyhülislam Ebussuud Efendi’nin vefatı, Selimiye Camii’nin inşası, İstanbul Rasathanesi’nin kurulması, Estergon’un fethi, Kanije’nin fethi, Celâlî İsyanları, Zitvatoruk Antlaşması, Sultanahmet Camii’nin imarı, padişahların ilim ve tasavvuf erbabı ile münasebetleri, özellikle I. Ahmed ile Aziz Mahmud Hüdâyî Hazretleri’nin muhabbeti; bu eserde öne çıkan birçok başlıktan sadece birkaçı…

Yine doyumsuz bir tarih ziyafeti sizleri bekliyor.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi5" size="4">
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