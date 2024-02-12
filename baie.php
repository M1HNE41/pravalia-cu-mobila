<!DOCTYPE html>
<html>
<body>
<?php include 'struct.php'; ?>
<div style="clear:both;"> </div>
<center>
	<h1>
	<b>Dormitor</b>
</h1>
</center>

<p>
Magazinul nostru va oferă o gamă extinsă de mobilă pentru dormitor, paturi continentale,cearșafuri cu elastic, antialergice, dulapuri, noptiere şi dispune de un sortiment bogat care să se potrivească modului în care dormi, totul la preţuri convenabile.
</p>
<hr color="grey"  width="auto" >
<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor1.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor2.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor3.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor4.jpg">
  
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<hr color="black"  width="1900px" >
<br>
<br>
<center>
<h3 >PATURI ȘI CADRE DE PAT REZISTENTE</h3>
</center>
<hr color="black"  width="absolute" >
<p>Vezi gama noastră variată de cadre de pat și paturi pentru dormitor, cu design scandinav, din lemn masiv sau tapițate. Alege un pat modern și rezistent pentru dormitorul tău. Alege o ramă de pat potrivită pentru dormitorul tău și te vei putea bucura de o piesă de mobilier elegantă și practică, care să fie rezistentă în timp. De la rame de pat simple, duble, paturi matrimoniale, paturi King, dormeze, paturi tip divan, până la alegerea diverselor materiale, cum ar fi un cadru metalic, din lemn sau un pat tapițat. Alege stilul potrivit care să se potrivească nevoilor tale.
</p>

<?php
echo '<div class="flex flex-wrap justify-center ">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        generateCard("https://jysk.ro/sites/jysk.ro/files/category_top_banner/S367090-JEGIND-JONSTRUP-3670143-HALMSTAD.jpg", "Cuvertura", "920", "cuvertura moale", "100x100cm", "textil"); // replace with actual data
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
<center>
<h3 >Cuverturi</h3>
</center>
<hr color="black"  width="auto" >

<p>Cuverturile fac patul și întregul dormitor să arate bine. Cel mai evident beneficiu al acestora este că înfrumusețează aspectul dormitorului, făcându-l să pară mai ordonat decât dacă ar fi avut doar lenjeria de pat la vedere. Unii oameni compară un pat nefăcut cu vasele nespălate lăsate în chiuvetă peste noapte.
Cuvertura asigură un aspect consistent pentru dormitorul tău de care te poți bucura în fiecare zi. Poți schimba lenjeria de pat ori de câte ori dorești și poți alege dintre diferite culori și modele, însă o cuvertură de pat va asigura mereu același aspect îngrijit.</p>

<?php
echo '<div class="flex flex-wrap justify-center">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        generateCard("https://jysk.ro/sites/jysk.ro/files/category_top_banner/S367090-JEGIND-JONSTRUP-3670143-HALMSTAD.jpg", "Cuvertura", "920", "cuvertura moale", "100x100cm", "textil"); // replace with actual data
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
</div>
<center>
	<bold>
	<h3> Cearșafuri </h3>
	<bold>
</center>
<hr color="black"  width="auto" >
<p>Cearșafurile sunt o soluție simplă de a oferi dormitorului tău un aspect nou cu un buget mic. Disponibile într-o varietate de tipuri de fire, niveluri de calitate și culori, este o idee bună să te familiarizezi cu numeroasele opțiuni de cearșafuri pe care ți le oferim. Alege un cearșaf confortabil cu elastic, un cearsaf plic sau unul cu strat absorbant, deoarece știm cu toții cât de bine este să te simți într-un pat cu cearsafuri curate. La noi vei găsi o gamă variată de cearșafuri de cea mai bună calitate, în mărimi, dimensiuni și materiale variate. Alege un cearșaf de pat de calitate și vei dormi mai bine și mai sănătos.</p>

<?php
echo '<div class="flex flex-wrap justify-center">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        generateCard("https://jysk.ro/sites/jysk.ro/files/category_top_banner/S367090-JEGIND-JONSTRUP-3670143-HALMSTAD.jpg", "Cuvertura", "920", "cuvertura moale", "100x100cm", "textil"); // replace with actual data
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
<center>
	<bold>
		<h3> Dulapuri din lemn masiv </h3>
	</bold>	
</center>
<?php
echo '<div class="flex flex-wrap justify-center">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        generateCard("https://jysk.ro/sites/jysk.ro/files/category_top_banner/S367090-JEGIND-JONSTRUP-3670143-HALMSTAD.jpg", "Cuvertura", "920", "cuvertura moale", "100x100cm", "textil"); // replace with actual data
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
<center>
	<bold>
		<h3> Noptiere </h3>
	</bold>
</center>
<hr color="black"  width="auto" >
<p>Indiferent dacă o folosești ca suport pentru veioza de citit sau ca să îți păstrezi cartea și ochelarii peste noapte, o noptieră este o piesă de mobilier pentru dormitor indispensabilă! Alege dintr-o gamă largă de seturi de dormitoare în care piesele se completează, noptiere albe sau din lemn masiv și dulăpioare pentru a adăuga un plus de estetică designului interior al dormitorului. Vezi gama noastră variată de noptiere pentru dormitor. Alege o noptieră din lemn masiv, cu design scandinav, cu unul sau mai multe sertare.</p>

<?php
echo '<div class="flex flex-wrap justify-center">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        generateCard("https://jysk.ro/sites/jysk.ro/files/category_top_banner/S367090-JEGIND-JONSTRUP-3670143-HALMSTAD.jpg", "Cuvertura", "920", "cuvertura moale", "100x100cm", "textil"); // replace with actual data
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>

<?php include 'footer.php'; ?>

</body>

</body>
</html>