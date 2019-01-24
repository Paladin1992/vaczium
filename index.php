<!DOCTYPE html>
<html>
<head>
    <title>Váczium Mérnöki Iroda Bt.</title>

    <meta charset="utf-8">
    <meta name="author" content="MaGe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    <!-- <link rel="shortcut icon" href="images/favicon.png"> -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="col-sm-offset-3 col-md-offset-3 col-lg-offset-3 header-wrapper">
            <div class="logo-container">
                <a href="index.php">
                    <img src="images/logo.png" height="60" alt="logo" title="Vaczium logo">
                </a>
            </div>

            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="btn-menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vac-navbar" aria-expanded="false">
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                    </div>
                
                    <div class="collapse navbar-collapse" id="vac-navbar">
                        <ul class="nav navbar-nav">
                            <li class="menu"><a href="#tervezes" tabindex="1">Tervezés</a></li>
                            <li class="menu"><a href="#energetika" tabindex="2">Épületenergetika és pályázatok</a></li>
                            <li class="menu"><a href="#rolunk" tabindex="3">Rólunk</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="main">
        <section name="tervezes">
            <h2>Tervezés</h2>

            <p>1995-ben két mérnök alapította betéti társaságunkat. 2013-ban a cég arculata letisztult, csak építész-tervezési és energetikai-szakértői munkák készülnek.</p>

            <p>Építészként nem házat, hanem otthont tervezünk. Ezért házaink személyre szabottak, nincs két egyforma. A tervezés során mi &ndash; Építtető és Tervező &ndash; is kicsit megismerjük, formáljuk egymást. A folyamat közös alkotássá válik, így a létrehozott épület kedves és szerethető.
Természetesen, amíg az elképzelésből megvalósítható dokumentum lesz, több szakember közreműködésére is szükség van. Így társtervezőkkel &ndash; gépész, statikus, elektromos &ndash; működünk közre munkánk során.</p>
            
            <p>A cég profilja: új családi házak tervezése, épületek felmérése, átalakítása és bővítése.</p>
        </section>

        <section name="energetika">
            <h2>Épületenergetika és pályázatok</h2>

            <p>Energetikai szakértőnk 2009-ben, az országban elsők között sikeresen végezte el az energetikai szakértői tanfolyamot. Mindezt nem szükségből, hanem elhivatottságból tette.</p>
            
            <p>Célunk, hogy az általunk tervezett új, illetve a hozzánk kerülő felújításra váró épületek gazdaságos, a mai kornak megfelelő energiahatékonyságúak legyenek, amelyet főleg az IGÉNY oldal csökkentésével szeretnénk elérni.
            Így az általunk javasolt technológiákkal az épületek bármilyen gépészeti rendszerrel, alacsony üzemeltetési költségen üzemeltethetők.</p>
        </section>

        <section name="referenciak">
            <h2>Referenciák</h2>

            <p>2012 óta több energetikai pályázatban működtünk közre (Otthon melege program, KEHOP, VEKOP, GINOP, TOP pályázatok), eddig 100%-os eredményességgel.</p>

            <p>Szakértőnk segítséget nyújt, ha épülete penészesedik, párásodik, ha nincs megelégedve a fűtés hatékonyságával, vagy fogyasztását szeretné csökkenteni.</p>
            
            <p>Csapatunk tagjai között felmérő, energetikus, pályázatíró és műszaki tervező is megtalálható.</p>
            
            <p>Energetikai tanúsítások, szakvélemények, pályázati anyagok: családi- és társasházak, ipari, kereskedelmi és oktatási épületek esetén.</p>
        </section>

        <section name="rolunk">
            <h2>Rólunk</h2>
        </section>
    </div>

    <footer>
        <?php
            $startYear = 2019;
            $currentYear = date("Y");
            echo '&copy; '.$startYear.($currentYear > $startYear ? '-'.$currentYear : '').' Minden jog fenntartva<br>';
            echo 'Weblap: MaGe';
        ?>
    </footer>

    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

<!--
    - Tervezés
	- Építészeti tervezés
	1995-ben két mérnök alapította betéti társaságunkat. 2013-ban a cég arculata letisztult, csak építész-tervezési és energetikai-szakértői munkák készülnek.

	Építészként nem házat, hanem otthont tervezünk. Ezért házaink személyre szabottak, nincs két egyforma. A tervezés során mi – Építtető és Tervező – is kicsit megismerjük, formáljuk egymást. A folyamat közös alkotássá válik, így a létrehozott épület kedves és szerethető. Természetesen, amíg az elképzelésből megvalósítható dokumentum lesz, több szakember közreműködésére is szükség van. Így társtervezőkkel – gépész, statikus, elektromos – működünk közre munkánk során.

	A cég profilja: új családi házak tervezése, épületek felmérése, átalakítása és bővítése.

	- Referencia (fotók)
	- Partnereink (nevek elérhetőségekkel)
- Épületenergetika és pályázatok
	Energetikai szakértőnk 2009-ben, az országban elsők között sikeresen végezte el az energetikai szakértői tanfolyamot. Mindezt nem szükségből, hanem elhivatottságból tette.

	Célunk, hogy az általunk tervezett új, illetve a hozzánk kerülő felújításra váró épületek gazdaságos, a mai kornak megfelelő energiahatékonyságúak legyenek, amelyet főleg az IGÉNY oldal csökkentésével szeretnénk elérni. Így az általunk javasolt technológiákkal az épületek bármilyen gépészeti rendszerrel, alacsony üzemeltetési költségen üzemeltethetők.
	
	2012 óta több energetikai pályázatban működtünk közre (Otthon melege program, KEHOP, VEKOP, GINOP, TOP pályázatok), eddig 100%-os eredményességgel.

	Szakértőnk segítséget nyújt, ha épülete penészesedik, párásodik, ha nincs megelégedve a fűtés hatékonyságával, vagy fogyasztását szeretné csökkenteni.

	Csapatunk tagjai között felmérő, energetikus, pályázatíró és műszaki tervező is megtalálható.

	Energetikai tanúsítások, szakvélemények, pályázati anyagok: családi- és társasházak, ipari, kereskedelmi és oktatási épületek esetén.

	- Referencia (fotók)
	- Partnereink (nevek elérhetőségekkel)
- Rólunk (fényképek elérhetőségekkel; név, végzettség, beosztás - 4-en egy sorba)
-->