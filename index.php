<?php include_once("helpers.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Váczium Mérnöki Iroda Bt.</title>

    <meta charset="utf-8">
    <meta name="author" content="MaGe">
    <meta keywords="Váczium, Váczium Bt., Váczium Mérnöki Iroda Bt., Váczium mérnökiroda, épületenergetika, épületenergetikai szakmérnök, épületenergetikai szakértő, épületenergetikai besorolás, épületenergetika pályázat, épületenergetikai tanúsítvány, épületenergetikai tanúsítás, családi ház, társasház, Vác, Somfai Beáta váczium, Szabó Katalin váczium">
    <meta description="A cég profilja: új családi házak tervezése, épületek felmérése, átalakítása és bővítése. Energetikai tanúsításokat, szakvéleményeket, pályázati anyagokat készítünk családi- és társasházak, ipari, kereskedelmi és oktatási épületekhez.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="shortcut icon" href="images/favicon2.ico">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="header-wrapper">
            <div class="logo-container">
                <img src="images/logo_white.png" height="60" alt="logo" title="Váczium logo">
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
                            <li class="menu"><a href="#kapcsolat" tabindex="4">Kapcsolat</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section name="tervezes">
            <div class="section-content">
                <h1>Tervezés</h1>

                <p>
                    Építészként nem házat, hanem otthont tervezünk.
                    Ezért házaink személyre szabottak, nincs két egyforma.
                    A tervezés során mi &ndash; Építtető és Tervező &ndash; is kicsit megismerjük, formáljuk egymást.
                    A folyamat közös alkotássá válik, így a létrehozott épület kedves és szerethető.
                </p>

                <p>
                    Természetesen, amíg az elképzelésből megvalósítható dokumentum lesz,
                    több szakember közreműködésére is szükség van.
                    Így társtervezőkkel &ndash; gépész, statikus, elektromos &ndash;
                    működünk közre munkánk során.
                </p>
            
                <p>
                    <strong>A cég profilja: új családi házak tervezése, épületek felmérése, átalakítása és bővítése.</strong>
                </p>
            </div>
        </section>

        <section name="energetika">
            <div class="section-content">
                <h1>Épületenergetika és pályázatok</h1>

                <p>
                    Energetikai szakértőnk 2009-ben, az országban elsők között sikeresen végezte el
                    az energetikai szakértői tanfolyamot.
                </p>

	            <p>
                    Célunk, hogy az általunk tervezett új, illetve a hozzánk kerülő felújításra váró
                    épületek gazdaságos, a mai kornak megfelelő energiahatékonyságúak legyenek,
                    amelyet főleg az IGÉNY oldal csökkentésével szeretnénk elérni.
                    Így az általunk javasolt technológiákkal az épületek bármilyen gépészeti rendszerrel,
                    alacsony üzemeltetési költségen üzemeltethetők.
                </p>
	
	            <p>
                    2012 óta több energetikai pályázatban működtünk közre
                    (Otthon melege program, KEHOP, VEKOP, GINOP, TOP pályázatok),
                    eddig 100%-os eredményességgel.
                </p>
                
                Szakértőnk segítséget nyújt, ha
                <ul>
                    <li>épülete <strong>penészesedik</strong>, <strong>párásodik</strong></li>
                    <li>nincs megelégedve a <strong>fűtés hatékonyság</strong>ával,</li>
                    <li>vagy <strong>fogyasztását szeretné csökkenteni</strong>.</li>
                </ul>
                                
                <p>
                    <strong>Energetikai tanúsításokat, szakvéleményeket, pályázati anyagokat készítünk</strong>
                    családi- és társasházak, ipari, kereskedelmi és oktatási épületekhez.
                </p>
            </div>
        </section>

        <section class="bg-deep">
            <div class="section-content">
                <h2>Referenciák</h2>

                <?php insert_gallery('energeticsCarousel'); ?>
            </div>
        </section>

        <section name="rolunk">
            <div class="section-content">
                <h1>Rólunk</h1>
                
                <p>
                    1995-ben két mérnök alapította betéti társaságunkat.
                    2013-ban a cég arculata letisztult,
                    csak építész-tervezési és energetikai-szakértői munkák készülnek.
                </p>

                <?php insert_employees(); ?>
            </div>
        </section>

        <section name="kapcsolat">
            <div class="section-content">
                <h1>Kapcsolat</h1>

                <div class="contact">
                    <div>
                        <div class="contact-icon-container">
                            <div class="glyphicon glyphicon-home contact-icon address"></div>
                        </div>
                        <div class="contact-text">2600 Vác, Lomb utca 5.</div>
                    </div>
                    <div>
                        <div class="contact-icon-container">
                            <div class="glyphicon glyphicon-earphone contact-icon phone"></div>
                        </div>
                        <div class="contact-text">+36 70 335 3939</div>
                    </div>
                    <div>
                        <div class="contact-icon-container">
                            <div class="glyphicon glyphicon-envelope contact-icon email"></div>
                        </div>
                        <div class="contact-text">vaczium@gmail.com</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="section-content">
            <div class="slogan">
                <div class="slogan-text">A legzöldebb energia az, amit nem használunk fel.</div>
            </div>

            <div class="bottom-info-container">
                <ul class="bottom-info clearfix">
                    <li>
                        <?php
                            $startYear = 2019;
                            $currentYear = date("Y");
                            $years = $startYear.($currentYear > $startYear ? '-'.$currentYear : '');
                            echo '&copy; '.$years.' Minden jog fenntartva';
                        ?>
                    </li>
                    <li>
                        <a href="other/adatvedelmi_nyilatkozat.pdf" target="_blank" class="light" title="Adatvédelmi nyilatkozat megtekintése (új lapon nyílik meg)">Adatvédelmi nyilatkozat</a>
                    </li>
                    <li>Weblap: MaGe</li>
                </ul>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>