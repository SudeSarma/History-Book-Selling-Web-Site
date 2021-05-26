<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayı III: Harameyn Hizmetinde</title>
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
    <img src="Resimler/kay%C4%B13.jpg">
    </div>
    <div class="orta-sag">
        <h1><font color="Red">KAYI-III</font></h1><br>
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
        echo "<th>02.04.2011</td>";
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
        <h2><font color="Red"><center>KAYI-III ÖZET</center></font></h2>
        <table border="1" width="500px">
            <tr>
                <th>
                    <i>"Yüce Allah beni atalarımın ocağına padişah yapınca, şeriki ve benzeri olmayan Hakk Teâlâ hazretlerine tazarru ve niyaz ile münacaatlar eyledim. Ey asuman u zeminin yaratıcısı ve ey ins ü cinin ve hayvanların rızık vericisi Kerim ve Rahim olan Rabbim, Harem-i hassın olan Beytullah’ın –ki o Kâbe-i saadet-penâhdır- bulunduğu Mekke-i Mükerreme ile iki cihan fahri habibin Muhammed Mustafa’nın mezarları, saadetlü merkad-i hümayunlarının olduğu Medine-i Münevvere’nin süpürgeciliğini bana nasip eyle!"</i>

       <br>-Yavuz Sultan Selim <br>

Prof. Dr. Ahmet Şimşirgil, Osmanlı Devleti’nin soluk soluğa ilerleyen serüvenine KAYI III: Haremeyn Hizmetinde ile devam ediyor.

Fatih Sultan Mehmed’in bir cihan devleti hâline getirdiği imparatorluk, onun ölümüyle başa geçen oğlu II. Bayezid devrinde iki büyük çekişmeye sahne olacaktır: Saltanatının başlangıcında kardeşi Cem Sultan’la mücadelesi, sonunda ise oğulları arasında baş gösteren taht kavgaları… Kardeş kavgalarının neden olduğu kaostan istifade eden Safeviler ise, Anadolu’yu bir yangın yerine çevirecek;Şahkulu Baba Tekeli ve Nur Ali Halife isyanlarında binlerce Anadolu insanı hayatını kaybedecektir.

İşte böyle bir zamanda saltanatı devralan Selim Han’ın birlik ve beraberliği yeniden sağlama mücadelesi vekısa zamanda gerçekleştirdiği akıl almaz fetihler KAYI III: Haremeyn Hizmetinde kitabında.

Bütün bunların yanında, II. Bayezid ve Yavuz Sultan Selim dönemindeki savaşlar, imar faaliyetleri ve adı geçen padişahların manevi ve özel yaşamlarına dair bilinmeyenler, keyifli bir tarih sohbeti tadındaki eserde okuru bekliyor.
                </th>
            </tr>
        </table>
        <form action="satinAlma.php" method="post">
            <div style="visibility:hidden">
                <input type="text" name="kadi" value="kayi3" size="4">
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