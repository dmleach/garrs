<!DOCTYPE HTML>
<html>
    <head>
        <title>Archive - GaRRS</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="garrs.css" />
    </head>
    <body>
        <header>
            <img class="banner" alt="GaRRS Archive Banner showing books, newspapers, and magazines, and a microphone." src="../images/G_archive.jpg" />
        </header>
        <nav>
            <ul id="programming-menu" title="Daily Programming">
                <li><a href="">Atlanta weekdays</a></li>
                <li><a href="">Atlanta weekends</a></li>
                <li><a href="">Macon</a></li>
                <li><a href="">Savannah</a></li>
                <li><a href="">Augusta</a></li>
            </ul>
            <ul id="main-menu" title="Main Menu">
                <li><a href="">Home</a></li>
                <li><a href="">Book Summaries</a></li>
                <li><a href="">About GaRRS</a></li>
                <li><a href="">Staff</a></li>
            </ul>
        </nav>
        <main>
            <h1>Audio Archive</h1>
            <article class="special">
                Listen to a two-part series on <span class="program-title">Medicare
                Open Enrollment for 2016</span>
                <ul class="program-sublist">
                    <li><a class="program-title" href="">Part 1</a></li>
                    <li><a class="program-title" href="">Part 2</a></li>
                </ul>
            </article>
            <article class="warning">
                The <span class="program-title">GCSB September 2015 Town Hall
                Meeting</span> podcast has been moved to the
                <a href="">Special Editions</a> page
            </article>

<?php

require_once("HtmlGenerator.php");
$Generator = new HtmlGenerator;
echo $Generator->loadProgramDirectory("programs.yml");

?>

        </main>
        <footer>
            <article>
                GaRRS is a 501(c)(3) nonprofit, limited access radio station founded
                in 1980 to serve Georgia’s blind, visually impaired and print
                disabled communities by broadcasting the printed word. Volunteers
                record for broadcast local and national newspapers, a wide variety
                of magazines and periodicals, and the best in recent fiction and
                non-fiction, read cover-to-cover and unabridged.
            </article>
            <article>
                GaRRS' professional staff and volunteers offer 24-hour
                programming seven days a week to a listening audience comprised
                of more than 15,000 blind, visually-impaired and print-impaired
                Georgians of all ages.
            </article>
            <article>
                <h1>Contributions</h1>
                In Georgia, more than 800,000 cases of blindness and visual
                impairment have been reported. As these numbers increase, the
                need to have access to the printed word has never been greater.
                With community support, GaRRS will be able to continue this
                unique broadcast service, lifting the barriers of isolation from
                the lives of Georgia’s blind and print-impaired citizens. GaRRS
                is supported by government grants, universities, foundations,
                corporate gifts and by general donations from listeners and
                individuals like you. If you wish to join our efforts to keep
                Georgia’s blind, visually-impaired and print-impaired communities
                connected to the world of print, please consider making a tax
                deductible contribution. Visit our <a href="">donate page</a>
                or call us at (404) 685-2820 or (800) 672-6173.
                <br>
                Thank you.
            </article>
        </footer>
        <footer class="contact-info">
            <h1>Georgia Radio Reading Service, Inc. (GaRRS)</h1>
            <ul>
                <li>garrsinfo@gpb.org</li>
            </ul>
            <ul>
                <li>260 14th Street NW</li>
                <li>Atlanta, GA 30318</li>
                <li>(404) 685-2820</li>
                <li>(800) 672-6173 (toll free)</li>
            </ul>
            <ul>
                <li>182 Riley Avenue Suite F-1</li>
                <li>Macon, GA 31204</li>
                <li>(478) 477-5363</li>
            </ul>
        </footer>
    </body>
    <a href="archive.html">HTML version</a>
</html>
