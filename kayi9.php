<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı IX: Sonun Başlangıcı</title>
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
    <img src="Resimler/kay%C4%B19.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-IX</font></h1><br>
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
        echo "<th>01.09.2017</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sayfa Sayısı </td>";
        echo "<th>288</td>";
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
        echo "<th>32.00 TL</td>";
        echo "</tr>";
        echo "</table>"; 
        ?>
        <br>
        <h2><font color="Red"><center>KAYI-IX ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    <i>“Cenab-ı Hakk’a şükürler olsun ki, bu kulunu büyük ecdadının erişemediği feth-i mübine mazhar kıldı. Sizleri de bu büyük hizmette bulundurdu. Allah hepinizden razı olsun. Sa’yiniz meşkûr olsun. Bundan böyle birlik ve beraberlikle memleket işlerini düzeltelim, halkın durumunu düzenleyelim.”</i>

<br>Yeniçeri Ocağı’nın kapatılması üzerine<br>

<p>Sultan II. Mahmud’un yaptığı konuşmadan…<p>

Sultan II. Mahmud, içkiden mi vefat etti? Ona kim, neden “Gâvur Padişah” dedi?

Rum Patrikhanesi’ndeki “intikam kapısı”nın hâlâ açık olmasının sırrı neydi?

Tepedelenli Ali Paşa neden idam ettirildi?

Kavalalı Mehmed Ali Paşa meselesinin iç yüzü neydi?

Tanzimat Fermanı’nın mimarı Mustafa Reşid Paşa’nın İngilizlerle ilişkileri ne boyuttaydı?

Sultan Abdülmecid Navarin Baskını’nı nasıl karşıladı?

Mekke ve Medine’ye en büyük hizmetleri yapan padişah kimdi?

İlk Avrupa seyahati hangi padişah zamanında gerçekleşti ve bu seyahat sırasında neler yaşandı?

Abdülaziz Han’ın ölümü intihar mıydı, katl mi?

Sultan V. Murad’ın tahta geçirilmesi bir Mason darbesi miydi?

Çerkes Hasan, Hüseyin Avni Paşa’yı neden öldürdü?

Kayı boyunun hikâyesi Prof. Dr. Ahmet Şimşirgil’in eşsiz üslubuyla devam ediyor. Şimşirgil, KAYI IX: Sonun Başlangıcı kitabıyla okuru Osmanlı İmparatorluğu’nun bıçak sırtında geçirdiği yıllara doğru yolculuğa çıkarıyor. Sultan II. Mahmud’un merkezî otoriteyi yeniden tesis etme çabalarını, Sultan Abdülmecid’in ıslahatlarla imparatorluğu ihya etme gayretlerini, Sultan Abdülaziz’le yeniden şahlanan millî duruşu ve Sultan V. Murad dönemindeki gerçekleri okuyucuya ulaştırıyor.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi9" size="4">
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