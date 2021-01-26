<?php
session_start();
require_once "../php/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BP | Datenschutzerklärung</title>
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link href="../assets/styles/footer.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
</head>
<style>
    body {
        position: absolute;
        margin: 0px;
    }

    section {
        padding-left: 100px;
        padding-top: 50px;
        padding-bottom: 50px;
        padding-right: 250px;


    }

    footer {
        bottom: 0;
    }

    h1, h2 {
        color: #5B5FE3;
    }

    .ue1 {
        letter-spacing: 5px;
        font-size: 40px;
        font-family: acumin-pro, sans-serif;
        font-weight: 200;
        font-style: normal;
    }

    p {
        font-family: acumin-pro, sans-serif;
        font-weight: 200;
        font-style: normal;
        letter-spacing: 1px;
        padding-left: 50px;
    }

    a {
        color: black;
    }

    .img {
        width: 100%;
        height: 300px;
        opacity: 0.9;
    }

    span {
        color: #5B5FE3;
        font-size: 20px;
    }

    .small {
        font-size: 15px;
        font-family: acumin-pro, sans-serif;
        font-weight: 100;
        font-style: italic;
    }

    .logoimp {
        width: 250px;
        padding-left: 50px;
    }

    .info {

        font-size: 18px;
    }

    .info1 {

        font-size: 15px;
    }

    .externallink {
        width: 15px;
    }

    .nounderli {
        text-decoration: none;
    }

    .email {
        font-size: 15px;
    }

    h2 {
        padding-left: 50px;
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 1px;
    }

    ul {
        font-family: acumin-pro, sans-serif;
        font-weight: 200;
        font-style: normal;
        letter-spacing: 1px;
        padding-left: 100px;
    }

    .ue3 {
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 1px;
        color: #5B5FE3;
        padding-left: 50px;
    }
</style>

<body>
<header>
    <div class="wr">
        <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
        <nav>
            <a href="../index.php">Home</a>
            <?php echo((get_signed_in_user_id() !== -1) ? '<a href="../login/abmelden.html">Abmelden</a>' : '<a href="../login/login.php">Anmelden</a>'); ?>
            <a href="../upload/index.php">Upload</a>
            <a href="../profil/index.php"> <img class="user" src="../assets/images/user.png" alt="user">
            </a>
        </nav>
    </div>
</header>
<img class="img" src="../assets/images/rechte.png" alt="rechte">
<section>

    <h1 class="ue1">Impressum</h1>
    <img class="logoimp" src="../assets/images/logo_imp.png" alt="logoimp">
    <p class="info">Projekt der <a class="nounderli" href="https://www.htl.rennweg.at/" title="HTL-Rennweg">HTL-Rennweg
            <img class="externallink"
                 src="https://icon-library.net//images/icon-external-link/icon-external-link-16.jpg" width="350"/></a>
    </p>
    <p class="info1">Höhere Technische Bundeslehranstalt</p>

    <p>Rennweg 89b<br> 1030 Wien<br> Österreich</p>


    <p class="email"><span>&#x2709</span><a href="mailto:7046@htl.rennweg.at">Dietrich Kops</a></p>
    <p class="email"><span>&#x2709</span><a href="mailto:7047@htl.rennweg.at">Johanna Kronfuß</a></p>
    <p class="email"><span>&#x2709</span><a href="mailto:7055@htl.rennweg.at">Nils Schneider-Sturm</a></p>
    <p class="email"><span>&#x2709</span><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Sartori</a></p><br>
    <p class="small">Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63
        Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.</p>
    <h2 id="eu-streitschlichtung" class="adsimple-121400314">EU-Streitschlichtung</h2>
    <p>Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten wir Sie über
        die
        Online-Streitbeilegungsplattform (OS-Plattform) informieren.<br/>
        Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europäischen
        Kommission
        unter <a decorated="" class="adsimple-121400314"
                 href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE" target="_blank"
                 rel="noopener noreferrer">http://ec.europa.eu/odr?tid=121400314</a> zu richten. Die dafür notwendigen
        Kontaktdaten finden Sie oberhalb in unserem Impressum.</p>
    <p>Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an
        Streitbeilegungsverfahren
        vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
    <h2 id="haftung-fuer-inhalte-dieser-webseite" class="adsimple-121400314">Haftung für Inhalte dieser Webseite</h2>
    <p>Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle Informationen
        bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Webseite
        übernehmen,
        speziell für jene die seitens Dritter bereitgestellt wurden.</p>
    <p>Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitten wir Sie uns umgehend zu kontaktieren,
        Sie
        finden die Kontaktdaten im Impressum.</p>
    <h2 id="haftung-links-webseite" class="adsimple-121400314">Haftung für Links auf dieser Webseite</h2>
    <p>Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind. Haftung für
        verlinkte Websites besteht laut <a decorated="" class="adsimple-121400314"
                                           href="https://www.ris.bka.gv.at/Dokument.wxe?Abfrage=Bundesnormen&Dokumentnummer=NOR40025813&tid=121400314"
                                           target="_blank" rel="noopener noreferrer">§ 17 ECG</a> für uns nicht, da wir
        keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht
        aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten bekannt werden.</p>
    <p>Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitten wir Sie uns zu kontaktieren, Sie finden die
        Kontaktdaten im Impressum.</p>
    <br>
    <br>
    <br>
    <br>
    <h1 class="ue1">Datenschutzerklärung</h1>
    <h2 id="datenschutz" class="adsimple-121400314">Datenschutz</h2>
    <p>Wir haben diese Datenschutzerklärung (Fassung 01.01.1970-121400314) verfasst, um Ihnen gemäß der Vorgaben der <a
                href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=121400314"
                target="_blank"
                rel="noopener noreferrer">Datenschutz-Grundverordnung (EU) 2016/679</a> zu erklären, welche
        Informationen
        wir
        sammeln, wie wir Daten verwenden und welche Entscheidungsmöglichkeiten Sie als Besucher dieser Webseite haben.
    </p>
    <p>Leider liegt es in der Natur der Sache, dass diese Erklärungen sehr technisch klingen, wir haben uns bei der
        Erstellung jedoch bemüht die wichtigsten Dinge so einfach und klar wie möglich zu beschreiben.</p>
    <h2 >Automatische Datenspeicherung</h2>
    <p>Wenn Sie heutzutage Webseiten besuchen, werden gewisse Informationen automatisch erstellt und gespeichert, so
        auch
        auf dieser Webseite.</p>
    <p>Wenn Sie unsere Webseite so wie jetzt gerade besuchen, speichert unser Webserver (Computer auf dem diese Webseite
        gespeichert ist) automatisch Daten wie</p>
    <ul>
        <li>die Adresse (URL) der aufgerufenen Webseite</li>
        <li>Browser und Browserversion</li>
        <li>das verwendete Betriebssystem</li>
        <li>die Adresse (URL) der zuvor besuchten Seite (Referrer URL)</li>
        <li>den Hostname und die IP-Adresse des Geräts von welchem aus zugegriffen wird</li>
        <li>Datum und Uhrzeit</li>
    </ul>

    <p>in Dateien (Webserver-Logfiles).</p>
    <p>In der Regel werden Webserver-Logfiles zwei Wochen gespeichert und danach automatisch gelöscht. Wir geben diese
        Daten
        nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim Vorliegen von rechtswidrigem Verhalten
        eingesehen werden.</p>
    <h2>Cookies</h2>
    <p>Unsere Webseite verwendet HTTP-Cookies, um nutzerspezifische Daten zu speichern.<br/>
        Im Folgenden erklären wir, was Cookies sind und warum Sie genutzt werden, damit Sie die folgende
        Datenschutzerklärung besser verstehen.</p>
    <h2 class="ue3">Was genau sind Cookies?</h2>
    <p>Immer wenn Sie durch das Internet surfen, verwenden Sie einen Browser. Bekannte Browser sind beispielsweise
        Chrome,
        Safari, Firefox, Internet Explorer und Microsoft Edge. Die meisten Webseiten speichern kleine Text-Dateien in
        Ihrem
        Browser. Diese Dateien nennt man Cookies.</p>
    <p>Eines ist nicht von der Hand zu weisen: Cookies sind echt nützliche Helferlein. Fast alle Webseiten verwenden
        Cookies. Genauer gesprochen sind es HTTP-Cookies, da es auch noch andere Cookies für andere Anwendungsbereiche
        gibt.
        HTTP-Cookies sind kleine Dateien, die von unserer Webseite auf Ihrem Computer gespeichert werden. Diese
        Cookie-Dateien werden automatisch im Cookie-Ordner, quasi dem “Hirn” Ihres Browsers, untergebracht. Ein Cookie
        besteht aus einem Namen und einem Wert. Bei der Definition eines Cookies müssen zusätzlich ein oder mehrere
        Attribute angegeben werden.</p>
    <p>Cookies speichern gewisse Nutzerdaten von Ihnen, wie beispielsweise Sprache oder persönliche Seiteneinstellungen.
        Wenn Sie unsere Seite wieder aufrufen, übermittelt Ihr Browser die „userbezogenen“ Informationen an unsere Seite
        zurück. Dank der Cookies weiß unsere Webseite, wer Sie sind und bietet Ihnen die Einstellung, die Sie gewohnt
        sind.
        In einigen Browsern hat jedes Cookie eine eigene Datei, in anderen wie beispielsweise Firefox sind alle Cookies
        in
        einer einzigen Datei gespeichert.</p>
    <p>Es gibt sowohl Erstanbieter Cookies als auch Drittanbieter-Cookies. Erstanbieter-Cookies werden direkt von
        unserer
        Seite erstellt, Drittanbieter-Cookies werden von Partner-Webseiten (z.B. Google Analytics) erstellt. Jedes
        Cookie
        ist individuell zu bewerten, da jedes Cookie andere Daten speichert. Auch die Ablaufzeit eines Cookies variiert
        von
        ein paar Minuten bis hin zu ein paar Jahren. Cookies sind keine Software-Programme und enthalten keine Viren,
        Trojaner oder andere „Schädlinge“. Cookies können auch nicht auf Informationen Ihres PCs zugreifen.</p>
    <p>So können zum Beispiel Cookie-Daten aussehen:</p>
    <p>
        <strong>Name:</strong> _ga<br/>
        <strong>Wert:</strong> GA1.2.1326744211.152121400314-9<br/>
        <strong>Verwendungszweck:</strong> Unterscheidung der Webseitenbesucher<br/>
        <strong>Ablaufdatum:</strong> nach 2 Jahren</p>
    <p>Diese Mindestgrößen sollte ein Browser unterstützen können:</p>
    <ul>
        <li>Mindestens 4096 Bytes pro Cookie</li>
        <li>Mindestens 50 Cookies pro Domain</li>
        <li>Mindestens 3000 Cookies insgesamt</li>
    </ul>
    <h3 class="ue3">Welche Arten von Cookies gibt es?</h3>
    <p>Die Frage welche Cookies wir im Speziellen verwenden, hängt von den verwendeten Diensten ab und wird in den
        folgenden
        Abschnitten der Datenschutzerklärung geklärt. An dieser Stelle möchten wir kurz auf die verschiedenen Arten von
        HTTP-Cookies eingehen.</p>
    <p>Man kann 4 Arten von Cookies unterscheiden:</p>
    <p>
        <strong>Unerlässliche Cookies<br/>
        </strong>Diese Cookies sind nötig, um grundlegende Funktionen der Webseite sicherzustellen. Zum Beispiel braucht
        es
        diese Cookies, wenn ein User ein Produkt in den Warenkorb legt, dann auf anderen Seiten weitersurft und später
        erst
        zur Kasse geht. Durch diese Cookies wird der Warenkorb nicht gelöscht, selbst wenn der User sein Browserfenster
        schließt.</p>
    <p>
        <strong>Zweckmäßige Cookies<br/>
        </strong>Diese Cookies sammeln Infos über das Userverhalten und ob der User etwaige Fehlermeldungen bekommt.
        Zudem
        werden mithilfe dieser Cookies auch die Ladezeit und das Verhalten der Webseite bei verschiedenen Browsern
        gemessen.
    </p>
    <p>
        <strong>Zielorientierte Cookies<br/>
        </strong>Diese Cookies sorgen für eine bessere Nutzerfreundlichkeit. Beispielsweise werden eingegebene
        Standorte,
        Schriftgrößen oder Formulardaten gespeichert.</p>
    <p>
        <strong>Werbe-Cookies<br/>
        </strong>Diese Cookies werden auch Targeting-Cookies genannt. Sie dienen dazu dem User individuell angepasste
        Werbung zu liefern. Das kann sehr praktisch, aber auch sehr nervig sein.</p>
    <p>Üblicherweise werden Sie beim erstmaligen Besuch einer Webseite gefragt, welche dieser Cookiearten Sie zulassen
        möchten. Und natürlich wird diese Entscheidung auch in einem Cookie gespeichert.</p>
    <h3 class="ue3">Wie kann ich Cookies löschen?</h3>
    <p>Wie und ob Sie Cookies verwenden wollen, entscheiden Sie selbst. Unabhängig von welchem Service oder welcher
        Webseite
        die Cookies stammen, haben Sie immer die Möglichkeit Cookies zu löschen, zu deaktivieren oder nur teilweise
        zuzulassen. Zum Beispiel können Sie Cookies von Drittanbietern blockieren, aber alle anderen Cookies
        zulassen.</p>
    <p>Wenn Sie feststellen möchten, welche Cookies in Ihrem Browser gespeichert wurden, wenn Sie Cookie-Einstellungen
        ändern oder löschen wollen, können Sie dies in Ihren Browser-Einstellungen finden:</p>
    <p>
        <a href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
                rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
                target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
    </p>
    <p>
        <a href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
                target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314"
                target="_blank"
                rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>
    <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer
        informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie
        das
        Cookie erlauben oder nicht. Die Vorgangsweise ist je nach Browser verschieden. Am besten Sie suchen die
        Anleitung in
        Google mit dem Suchbegriff “Cookies löschen Chrome” oder “Cookies deaktivieren Chrome” im Falle eines Chrome
        Browsers.</p>
    <h2 class="ue3">Wie sieht es mit meinem Datenschutz aus?</h2>
    <p>Seit 2009 gibt es die sogenannten „Cookie-Richtlinien“. Darin ist festgehalten, dass das Speichern von Cookies
        eine
        Einwilligung von Ihnen verlangt. Innerhalb der EU-Länder gibt es allerdings noch sehr unterschiedliche
        Reaktionen
        auf diese Richtlinien. In Österreich erfolgte aber die Umsetzung dieser Richtlinie in § 96 Abs. 3 des
        Telekommunikationsgesetzes (TKG).</p>
    <p>Wenn Sie mehr über Cookies wissen möchten und technische Dokumentationen nicht scheuen, empfehlen wir <a
                href="https://tools.ietf.org/html/rfc6265"
                target="_blank"
                rel="nofollow noopener noreferrer">https://tools.ietf.org/html/rfc6265</a>,
        dem Request for Comments der Internet Engineering Task Force (IETF) namens “HTTP State Management Mechanism”.
    </p>
    <h2 class="ue3">Speicherung persönlicher Daten</h2>
    <p>Persönliche Daten, die Sie uns auf dieser Website elektronisch übermitteln, wie zum Beispiel Name,
        E-Mail-Adresse,
        Adresse oder andere persönlichen Angaben im Rahmen der Übermittlung eines Formulars oder Kommentaren im Blog,
        werden
        von uns gemeinsam mit dem Zeitpunkt und der IP-Adresse nur zum jeweils angegebenen Zweck verwendet, sicher
        verwahrt
        und nicht an Dritte weitergegeben.</p>
    <p>Wir nutzen Ihre persönlichen Daten somit nur für die Kommunikation mit jenen Besuchern, die Kontakt ausdrücklich
        wünschen und für die Abwicklung der auf dieser Webseite angebotenen Dienstleistungen und Produkte. Wir geben
        Ihre
        persönlichen Daten ohne Zustimmung nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim
        Vorliegen
        von rechtswidrigem Verhalten eingesehen werden.</p>
    <p>Wenn Sie uns persönliche Daten per E-Mail schicken – somit abseits dieser Webseite – können wir keine sichere
        Übertragung und den Schutz Ihrer Daten garantieren. Wir empfehlen Ihnen, vertrauliche Daten niemals
        unverschlüsselt
        per E-Mail zu übermitteln.</p>
    <h2 class="ue3">Rechte laut Datenschutzgrundverordnung</h2>
    <p>Ihnen stehen laut den Bestimmungen der DSGVO und des österreichischen <a href="https://www.ris.bka.gv.at/GeltendeFassung.wxe?Abfrage=Bundesnormen&Gesetzesnummer=10001597&tid=121400314"
                                                                                target="_blank"
                                                                                rel="noopener noreferrer">Datenschutzgesetzes
            (DSG)</a> grundsätzlich die folgende Rechte zu:</p>
    <ul >
        <li>Recht auf Berichtigung (Artikel 16 DSGVO)</li>
        <li >Recht auf Löschung („Recht auf Vergessenwerden“) (Artikel 17 DSGVO)</li>
        <li >Recht auf Einschränkung der Verarbeitung (Artikel 18 DSGVO)</li>
        <li >Recht auf Benachrichtigung – Mitteilungspflicht im Zusammenhang mit der
            Berichtigung
            oder Löschung personenbezogener Daten oder der Einschränkung der Verarbeitung (Artikel 19 DSGVO)
        </li>
        <li >Recht auf Datenübertragbarkeit (Artikel 20 DSGVO)</li>
        <li >Widerspruchsrecht (Artikel 21 DSGVO)</li>
        <li>Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung —
            einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden (Artikel 22 DSGVO)
        </li>
    </ul>
    <p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre
        datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie sich bei der
        Aufsichtsbehörde
        beschweren, welche in Österreich die Datenschutzbehörde ist, deren Webseite Sie unter <a decorated=""
                                                                                                 class="adsimple-121400314"
                                                                                                 href="https://www.dsb.gv.at/?tid=121400314">https://www.dsb.gv.at/</a>
        finden.</p>
    <h2 class="ue3">Auswertung des Besucherverhaltens</h2>
    <p>In der folgenden Datenschutzerklärung informieren wir Sie darüber, ob und wie wir Daten Ihres Besuchs dieser
        Website
        auswerten. Die Auswertung der gesammelten Daten erfolgt in der Regel anonym und wir können von Ihrem Verhalten
        auf
        dieser Website nicht auf Ihre Person schließen.</p>
    <p>Mehr über Möglichkeiten dieser Auswertung der Besuchsdaten zu widersprechen erfahren Sie in der folgenden
        Datenschutzerklärung.</p>
    <h2 class="ue3">TLS-Verschlüsselung mit https</h2>
    <p>Wir verwenden https um Daten abhörsicher im Internet zu übertragen (Datenschutz durch Technikgestaltung <a
                href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&from=DE&tid=121400314"
                target="_blank" rel="noopener noreferrer">Artikel 25 Absatz 1 DSGVO</a>). Durch den Einsatz von TLS
        (Transport
        Layer Security), einem Verschlüsselungsprotokoll zur sicheren Datenübertragung im Internet können wir den Schutz
        vertraulicher Daten sicherstellen. Sie erkennen die Benutzung dieser Absicherung der Datenübertragung am kleinen
        Schlosssymbol links oben im Browser und der Verwendung des Schemas https (anstatt http) als Teil unserer
        Internetadresse.</p>

    <h2 class="ue3">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h2>
    <p>Nach dem Datenschutzrecht der Europäischen Union haben Sie das Recht, Auskunft über Ihre Daten zu erhalten, sie
        zu
        aktualisieren, zu löschen oder einzuschränken. Mithilfe des Browser-Add-ons zur Deaktivierung von Google
        Analytics-JavaScript (ga.js, analytics.js, dc.js) verhindern Sie, dass Google Analytics Ihre Daten verwendet.
        Das
        Browser-Add-on können Sie unter <a href="https://tools.google.com/dlpage/gaoptout?hl=de" target="_blank"
                                           rel="noopener noreferrer">https://tools.google.com/dlpage/gaoptout?hl=de</a>
        runterladen und installieren. Beachten Sie bitte, dass durch dieses Add-on nur die Datenerhebung durch Google
        Analytics deaktiviert wird.</p>
    <p>Falls Sie grundsätzlich Cookies (unabhängig von Google Analytics) deaktivieren, löschen oder verwalten wollen,
        gibt
        es für jeden Browser eine eigene Anleitung:</p>
    <p>
        <a href="https://support.google.com/chrome/answer/95647?tid=121400314"
           target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
    </p>
    <p>
        <a
           href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=121400314" target="_blank"
           rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
    </p>
    <p>
        <a
           href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=121400314"
           target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf
            Ihrem
            Computer abgelegt haben</a>
    </p>
    <p>
        <a
           href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=121400314"
           target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
    </p>
    <p>
        <a
           href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=121400314" target="_blank"
           rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
    </p>

    <h2 class="ue3">Einwilligung&nbsp;gem&auml;&szlig; DSGVO zur Ver&ouml;ffentlichung von Personenfotos &bdquo;externer
        Personen&ldquo; zu werblichen Zwecken</h2>

    <p>m&ouml;chten wir, Best Picture, gerne Personenfotos zum Zwecke der werblichen Au&szlig;endarstellung unseres
        Unternehmens und ver&ouml;ffentlichen. </p>
    <p>Mit Ihrer Einwilligung erlauben Sie uns, Ihre Fotos zur werblichen Au&szlig;endarstellung unseres Unternehmens
        anzufertigen und zu ver&ouml;ffentlichen. Werbliche Au&szlig;endarstellung umfasst insbesondere die Ver&ouml;ffentlichungen
        zur Veranstaltungsbewerbung, zur Illustration unserer Veranstaltungsangebote. (Hier k&ouml;nnen Sie weitere
        Zwecke nennen)</p>
    <p>Die Ver&ouml;ffentlichungen d&uuml;rfen erfolgen (Unzutreffendes ist zu streichen):</p>
    <ul>
        <li>auf den Internetseiten unseres Unternehmens https://bestpictureproject.ml/ (hier alle Webpr&auml;senzen, auf
            denen das
            Bild zu sehen sein soll, benennen)
        </li>
        <li>in unseren Druckmedien wie Flyer, Werbe- und Informationsbrosch&uuml;ren, Jahres- und Gesch&auml;ftsberichten</li>
        <li>Weitergabe zum Zweck der &Ouml;ffentlichkeitsarbeit an Stellen wie Agenturen, Redaktionen oder freie
            Publizistinnen und Publizisten (diese m&uuml;ssen hier benannt werden)
        </li>

        <li>in unseren Social Media Accounts der Netzwerke (genaue Benennung der Netzwerke und der Accounts
            erforderlich!)
        </li>
    </ul>
    <p><strong>Das m&uuml;ssen Sie wissen</strong></p>

    <p>Ich habe zur Kenntnis genommen, dass Informationen im Internet weltweit zug&auml;nglich sind, mit Suchmaschinen
        gefunden und mit anderen Informationen verkn&uuml;pft werden k&ouml;nnen, woraus sich unter Umst&auml;nden Pers&ouml;nlichkeitsprofile
        &uuml;ber mich erstellen lassen. Mir ist bewusst, dass ins Internet gestellte Informationen einschlie&szlig;lich
        Fotos problemlos kopiert und weiterverbreitet werden k&ouml;nnen und dass es spezialisierte Archivierungsdienste
        gibt, deren Ziel es ist, den Zustand bestimmter Internetseiten dauerhaft zu dokumentieren.</p>
    <p>&nbsp;</p>
    <p>Dieses kann dazu f&uuml;hren, dass im Internet ver&ouml;ffentlichte Informationen auch nach ihrer L&ouml;schung
        auf der Ursprungsseite weiterhin andernorts aufzufinden sind.</p>
    <p>Soweit Sie in <strong>Social Media Ver&ouml;ffentlichungen</strong> einwilligen, m&uuml;ssen Sie wissen: Soziale
        Netzwerke&nbsp; &bdquo;vermehren&ldquo; Inhalte, ohne dass wir auf die Anzahl der Verbreitungshandlungen</p>
    <p>durch Nutzer Einfluss haben. Durch Kommentierungen und anschlie&szlig;endes Teilen unserer &nbsp;&nbsp;</p>
    <p>Ursprungsver&ouml;ffentlichung besteht die theoretische M&ouml;glichkeit, dass abgebildete Personen</p>
    <p>ung&uuml;nstig kommentiert werden. &nbsp;&nbsp;</p>
    <p>Beim &nbsp;Einstellen in bestimmte Social Media &nbsp;Angebote (z. B. Facebook) kann nicht sichergestellt werden,
        dass eine vollst&auml;ndige L&ouml;schung der Fotos m&ouml;glich ist.</p>
    <p>Ich habe zur Kenntnis genommen, dass eine L&ouml;schung der Bilder aus dem Internetauftritt unseres Unternehmens
        bis zu maximal&nbsp; drei Werktage nach Eingang meines Widerrufs dauern kann.</p>

    <p><strong>Ihr Widerrufsrecht</strong></p>
    <p>Mir ist bekannt, dass ich diese Einwilligungserkl&auml;rung jederzeit mit&nbsp; Wirkung f&uuml;r die Zukunft
        widerrufen kann. Der Widerruf bewirkt, dass ver&ouml;ffentlichte Fotos aus dem Internetauftritt entfernt werden
        und keine weiteren Fotos eingestellt werden. Bei Druckerzeugnissen bewirkt Ihr Widerruf, dass wir in Neuauflagen
        der bereits gedruckten Erzeugnisse Ihr Foto nicht mehr ver&ouml;ffentlichen werden.</p>

    <p>Als Betroffener einer Datenverarbeitung Ihrer personenbezogenen Daten haben Sie gem&auml;&szlig; Art. 13 DSGVO
        umfangreiche Rechte. Die vollst&auml;ndigen Informationen finden Sie unter
        www.domain-der-organisation/ihre-rechte-art-13-dsgvo.de</p>
    <p>&nbsp;</p>
    <h2 class="ue3">Einwilligungserkl&auml;rung der Sorgeberechtigten zur werblichen Bildver&ouml;ffentlichung</h2>

    <p>m&ouml;chten wir, Best Picture, gerne Personenfotos zum Zwecke der Au&szlig;endarstellung unseres Unternehmens
        ver&ouml;ffentlichen. </p>
    <p>Mit Ihrer Einwilligung erlauben Sie uns Fotos Ihres Kindes zur werblichen Au&szlig;endarstellung unseres
        Unternehmens anzufertigen und zu ver&ouml;ffentlichen. Werbliche Au&szlig;endarstellung umfasst insbesondere die
        Ver&ouml;ffentlichungen zur Veranstaltungsbewerbung, zur Illustration unserer Veranstaltungsangebote und
        Veranstaltungsaktivit&auml;ten. (Hier k&ouml;nnen Sie weitere Zwecke nennen)</p>

    <p>Die Ver&ouml;ffentlichungen d&uuml;rfen erfolgen (Unzutreffendes ist zu streichen):</p>

    <ul>
        <li>auf den Internetseiten unseres Unternehmens https://bestpictureproject.ml/ (hier alle Webpr&auml;senzen, auf
            denen das
            Bild zu sehen sein soll, benennen)
        </li>
        <li>in unseren Druckmedien wie Flyer, Werbe- und Informationsbrosch&uuml;ren, Jahres- und Gesch&auml;ftsberichten</li>
        <li>Weitergabe zum Zweck der &Ouml;ffentlichkeitsarbeit an Stellen wie Agenturen, Redaktionen oder freie
            Publizistinnen und Publizisten (diese m&uuml;ssen hier benannt werden)
        </li>
        <li>in unseren Social Media Accounts der Netzwerke (genaue Benennung der Netzwerke und der Accounts
            erforderlich!)
        </li>
    </ul>
    <p><strong>Das m&uuml;ssen Sie wissen:</strong></p>
    <p>Informationen im Internet sind weltweit zug&auml;nglich und k&ouml;nnen mit Suchmaschinen gefunden und mit
        anderen Informationen verkn&uuml;pft &nbsp;werden, woraus sich unter Umst&auml;nden Pers&ouml;nlichkeitsprofile
        &uuml;ber Ihr Kind erstellen lassen. Uns ist als Sorgeberechtigte bewusst, dass &nbsp;in das Internet gestellte
        Informationen einschlie&szlig;lich Fotos problemlos kopiert und weiterverbreitet werden k&ouml;nnen und &nbsp;dass
        es &nbsp;spezialisierte Archivierungsdienste gibt, deren Ziel es ist, den Zustand bestimmter
        Internetseiten dauerhaft zu dokumentieren. Dies kann dazu f&uuml;hren, dass im Internet ver&ouml;ffentlichte
        Informationen auch nach ihrer L&ouml;schung auf der Ursprungsseite weiterhin andernorts aufzufinden sind.</p>
    <p>&nbsp;</p>
    <p>Soweit Sie in <strong>Social Media Ver&ouml;ffentlichungen</strong> einwilligen, m&uuml;ssen Sie als
        Sorgeberechtigte</p>
    <p>wissen:</p>
    <p>Soziale Netzwerke&nbsp; &bdquo;vermehren&ldquo; Inhalte, ohne dass wir auf die Anzahl der</p>
    <p>Verbreitungshandlungen durch Nutzer Einfluss haben. Durch Kommentierungen und</p>
    <p>anschlie&szlig;endes Teilen unserer Ursprungsver&ouml;ffentlichung mit dem Foto Ihres Kindes</p>
    <p>besteht die theoretische M&ouml;glichkeit, dass unsere Ursprungsver&ouml;ffentlichung ung&uuml;nstig</p>
    <p>kommentiert wird.&nbsp;&nbsp;</p>
    <p>Uns ist bekannt, dass wir diese Einwilligungserkl&auml;rung <strong>jederzeit mit&nbsp; Wirkung f&uuml;r die
            Zukunft widerrufen</strong> k&ouml;nnen. Der Widerruf bewirkt, dass ver&ouml;ffentlichte Fotos Ihres Kindes
        aus dem Internetauftritt entfernt werden und keine weiteren Fotos eingestellt werden.</p>
  
    <p>Beim &nbsp;Einstellen in bestimmte <strong>Social Media Angebote</strong> (z. B. Facebook) kann nicht
        sichergestellt werden, dass eine vollst&auml;ndige L&ouml;schung der Fotos m&ouml;glich ist.</p>
    <p>Wir haben zur Kenntnis genommen, dass eine L&ouml;schung der Bilder aus dem <strong>Internetauftritt </strong>(Websites)
        unseres Unternehmens bis zu maximal drei Werktage nach Eingang unseres Widerrufs dauern kann. Bei <strong>Druckerzeugnissen</strong>
        bewirkt Ihr Widerruf, dass wir in Neuauflagen der bereits gedruckten Erzeugnisse Ihr Foto nicht mehr ver&ouml;ffentlichen
        werden.</p>

    <p>Unsere Online-Fotodatenbank mit der Internet-Adresse https://bestpictureproject.ml/ unserer Abteilung der Presse-
        und &Ouml;ffentlichkeitsarbeit
        stellt Ihnen Fotomaterial honorarfrei zur Ver&ouml;ffentlichung zur Verf&uuml;gung. Dieses geschieht mittels
        einer Website, &uuml;ber die die Datenbank erreichbar ist. Neben einer Recherchefunktion steht Ihnen als
        registriertem Besucher ein Downloadbereich f&uuml;r hoch aufgel&ouml;ste Fotos zur Verf&uuml;gung. Mit dem
        Herunterladen von Fotos als eingeloggter Nutzer, erwerben Sie entsprechend unserer AGB Nutzungsrechte an dem
        jeweiligen Foto.</p>
    <p>Wir informieren Sie als Nutzer unserer Datenbank nachfolgend, welche Daten wir wann, auf welche Art, in welchem
        Umfang und auf welcher Rechtsgrundlage verarbeiten und wie dabei der Schutz Ihrer personenbezogenen Daten
        sichergestellt wird. Weiter informieren wir Sie, welche Rechte Ihnen als Betroffener gesetzlich zustehen.</p>
    <p>Insbesondere steht Ihnen ein Widerspruchrecht gegen die Verarbeitung Ihrer personenbezogenen Daten zu. Wir werden
        in den einzelnen Abschnitten der Erkl&auml;rungen jeweils gesondert darauf hinweisen.</p>
    <p>&nbsp;</p>
    <h2>Name und Kontaktdaten des Verantwortlichen</h2>
    <p>Wir, Best Picture, sind als Verantwortlicher im Sinne der DSGVO und des Bundesdatenschutzgesetzes (BDSG) sowie
        sonstiger datenschutzrechtlicher Bestimmungen f&uuml;r unsere Online-Datenbank unter der Adresse
        https://bestpictureproject.ml/ und
        die damit verbundenen Datenverarbeitungen zu bezeichnen. Umfassende Angaben zu unserem Unternehmen sind im
        Impressum &nbsp;zu finden.</p>

    <h2>Empf&auml;nger der Daten</h2>
    <p>Da wir keine externen Dienstleister zum Betrieb und zur Wartung des Portals besch&auml;ftigen, sind wir,
        BestPicutre, alleiniger Empf&auml;nger Ihrer Daten.</p>

    <h2>Erl&auml;uterungen zu den einzelnen Datenverarbeitungen</h2>
    <p>Sie haben im Rahmen unseres Internetauftrittes die M&ouml;glichkeit Fotos zur honorarfreien Nutzung
        herunterzuladen und entsprechend unserer AGB zu nutzen. Nutzen Sie den Service unseres datenbankgest&uuml;tzten
        Bildportals, verarbeiten wir Ihre personenbezogenen Daten an vier Stellen der Nutzung. Diese sind</p>
    <ul>
        <li>Nutzung zum Betrachten der Inhalte des Bildportals als rein informatorische Nutzung</li>
        <li>Nutzung der Recherche-Funktion &bdquo;Suchen&ldquo;</li>
        <li>Registrieren zum Erstellung eines Nutzer-Accounts</li>
        <li>Aktionen, die im eingeloggten Zustand vorgenommen werden</li>
    </ul>
    <p>Nachfolgend unter Punkt 1 bis 4 erfahren Sie hierzu genaueres.</p>
    <br>
        <h2> Informatorische Nutzung des Bildportals</h2>
    <p>Mit dem Aufruf unseres Fotoportals zur reinen Betrachtung des Bildangebotes ist technisch bedingt die
        Verarbeitung von Besucherinformationen verbunden. Welche Ihrer Daten dabei erhoben und gespeichert werden,
        erfahren Sie nachfolgend.</p>
    <p>&nbsp;</p>
    <p><strong>Beschreibung und Umfang der Datenverarbeitung</strong></p>
    <p>Bei jedem Aufruf unserer Website durch Sie, erfassen wir Daten und Informationen vom System Ihres Ger&auml;ts und
        speichern diese in sogenannten Server-Log-Files. Folgende Daten werden automatisch durch Ihren Browser bei einem
        Aufruf unserer Website &uuml;bertragen:</p>
    <ul>
            <li>IP-Adresse des anfragenden Rechners</li>
            <li>Datum und Uhrzeit des Zugriffs</li>
            <li>Name und URL der abgerufenen Datei</li>
            <li>URL oder Provider, von der / von dem aus die Datei angefordert wurde</li>
            <li>Verwendeter Browser einschlie&szlig;lich Daten zu den verwendeten Einstellungen der Oberfl&auml;chendarstellung
                (Schriftgr&ouml;&szlig;e, Schriftart, verwendete Farben etc.) sowie das Betriebssystem Ihres Rechners
            </li>
            <li>Zugriffsstatus des Web-Servers (Datei &uuml;bertragen, Datei nicht gefunden, Kommando nicht ausgef&uuml;hrt,
                etc.)
            </li>
    </ul>
    <p>&nbsp;</p>
    <p><strong>Zweck der Datenverarbeitung</strong></p>
    <p>Diese Datenverarbeitungen dienen der Abrufbarkeit unserer Website von Ihrem Ger&auml;t sowie der technisch
        korrekten Wiedergabe unserer Website in Ihrem jeweiligen Browser. Weiterhin dienen uns diese Daten zur
        Optimierung unserer Website und zur Gew&auml;hrleistung der Sicherheit unserer informationstechnischen Systeme
        (z. B. zur Angriffserkennung).</p>
    <p><strong>Rechtsgrundlage f&uuml;r die Datenverarbeitung</strong></p>
    <p>Rechtsgrundlage f&uuml;r die Verarbeitung ist Art. 6 Abs. 1 Buchstabe f DSGVO. Wir haben ein berechtigtes
        Interesse daran, die Kommunikation zwischen unserem Server und Ihrem Endger&auml;t zu erm&ouml;glichen. Dieses
        ist insbesondere ohne die Verarbeitung Ihrer IP-Adresse technisch nicht m&ouml;glich. Weiter haben wir ein
        berechtigtes Interesse daran, Ihnen eine f&uuml;r Ihren Browser optimierte Website zur Verf&uuml;gung zu
        stellen. Damit verbunden ist die Speicherung von Session Cookies auf Ihrem Endger&auml;t. Ein Session Cookie
        speichert Informationen, die Onlineaktivit&auml;ten einer einzelnen Browser-Sitzung zuordnen. Der Session Cookie
        wird in der Regel beim Schlie&szlig;en des Browsers wieder gel&ouml;scht.</p>
    <p><strong>Speicherdauer</strong></p>
    <p>Die Speicherung der&nbsp;Daten (insbesondere der IP-Adressen) bei uns, Best Picture, ist notwendig, weil sie f&uuml;r
        die Abwehr von Hackerangriffen und zum Schutz des Systems bei St&ouml;rungen technisch erforderlich ist. Nach
        dem Ablauf von 7 Tagen werden IP-Adressen von uns gel&ouml;scht.</p>
    <p><strong>Widerspruchsrecht</strong></p>
    <p>Ihnen steht ein Widerspruchsrecht gem&auml;&szlig; Art. 21 DSGVO zu: Sie k&ouml;nnen das Setzen von Cookies
        einschr&auml;nken und auch ganz verhindern, sowie die automatische L&ouml;schung von Cookies bei der Schlie&szlig;ung
        des Browserfensters veranlassen. Es ist jedoch m&ouml;glich, dass die Funktionalit&auml;t der Website damit
        nicht mehr voll gew&auml;hrleistet ist.</p>


    <p><strong>Datenverarbeitungen bei Recherche im Bildbestand &uuml;ber unsere &bdquo;Suchen-Funktion&ldquo;</strong></p>


    <p>Sobald Sie eine Foto-Suchanfrage mit der Eingabe von Suchbegriffen starten ohne dabei mit Ihrem Benutzerdaten
        eingeloggt zu sein, wird diese Eingabe eines Suchbegriffs in unserer Datenbank gespeichert. Eine Zusammenf&uuml;hrung
        von Suchanfragen und weiteren Daten, insbesondere Ihrer IP-Adresse, findet nicht statt. Damit ist gew&auml;hrleistet,
        dass Ihre Suchanfragen als nicht registrierter Besucher anonym bleiben.</p>
    <p><strong>Rechtsgrundlage f&uuml;r die Datenverarbeitung</strong></p>
    <p>Rechtsgrundlage f&uuml;r die anonyme Erfassung von Suchanfragen nicht registrierter Besucher ist Art. 6 Abs. 1
        Buchst. f DSGVO (&bdquo;berechtigtes Interesse&ldquo;). Wir haben ein berechtigtes Interesse zu erfahren, welche
        Fotos gesucht werden. So k&ouml;nnen wir unser Foto-Angebot auf die Foto-Anfragen ausrichten.</p>
    <p>&nbsp;</p>
    <p><strong>Speicherdauer der Begriffe der Suchanfragen</strong></p>
    <p>Die Liste der Suchanfragen wird in der Regel monatlich gel&ouml;scht.</p>
    <p>&nbsp;</p>
    <h2>Registrierung zur Berechtigung zum Download der Fotos</h2>
    <p>Um Fotos herunterzuladen und diese dann entsprechend unserer AGB nutzen zu k&ouml;nnen, k&ouml;nnen Sie sich mit
        dem Namen Ihrer Organisation und Ihrer E-Mail Adresse registrieren. Nach einer Freischaltung durch uns steht
        Ihnen die Downloadfunktion f&uuml;r hochaufgel&ouml;ste Fotos zur Verf&uuml;gung. Ihre Registrierungsdaten
        werden bei uns, Best Picture, gespeichert.</p>
    <p><strong>Beschreibung und Umfang der Datenverarbeitungen</strong></p>
    <p>Wenn Sie sich mit dem Anmeldeformular registrieren, speichern wir folgende Daten</p>
    <ul>
        <li>Ihre Organisation bzw. das Unternehmen, f&uuml;r das Sie t&auml;tig sind</li>
        <li>Ihren Namen</li>
        <li>Ihre E-Mail Adresse</li>
        <li>Datum der Registrierung</li>
        <li>Datum der Best&auml;tigung der Registrierung</li>
    </ul>
    <p><strong>Zweck der Datenverarbeitung</strong></p>
    <p>Die Registrierung erfolgt auf Ihre Anfrage mittels Absenden des Registrierungsformulars. Nach einer Freischaltung
        k&ouml;nnen Sie Fotos hochaufgel&ouml;st herunterladen und im Rahmen unserer AGB nutzen. Zweck einer
        Registrierung ist, dass wir, Best Picture, hochaufl&ouml;sende Fotos nur einem bestimmten f&uuml;r uns
        identifizierbaren Personenkreis als Vertragspartner im Rahmen der Lizenzierung entsprechend unserer AGB zur Verf&uuml;gung
        stellen wollen. Diese Daten dienen allein der Durchf&uuml;hrung und &Uuml;berwachung von Lizenzierungen und sie
        werden in keinem anderen Zusammenhang genutzt.</p>
    <p><strong>Rechtsgrundlage der Datenverarbeitung</strong></p>
    <p>Die Speicherung Ihrer Registrierungsdaten erfolgt auf der Rechtsgrundlage Art. 6 Abs. 1 Buchst. b DSGVO
        (Vertrag). Die Registrierung ist zur Einr&auml;umung von Nutzungsrechten gegen&uuml;ber bestimmten Personen
        &uuml;ber eine Downloadfunktion erforderlich.&nbsp;</p>
    <p><strong>Speicherdauer </strong></p>
    <p>Sie haben die M&ouml;glichkeit Ihren Account zu l&ouml;schen. Sollten Sie keine Downloads get&auml;tigt haben,
        werden wir Ihre Anmeldedaten vollst&auml;ndig l&ouml;schen.</p>
    <p>Haben Sie bereits Downloads unter Ihren Registrierungsdaten get&auml;tigt und damit Lizenzen erworben, bleibt die
        Zuordnung Ihrer Downloads zu Ihren Daten der Registrierung solange gespeichert, wie dieses zur Durchf&uuml;hrung
        von Vertr&auml;gen zur Einr&auml;umung von Nutzungsrechten erforderlich ist. Gem&auml;&szlig; unserer AGB k&ouml;nnen
        Sie das jeweilige Foto ab dem</p>
    <p>&nbsp;</p>
    <p>Zeitpunkt des Downloads f&uuml;r eine unbestimmte Dauer f&uuml;r Ihre Ver&ouml;ffentlichungen nutzen. Eine L&ouml;schung
        der Lizenzierungsinformationen unter Zuordnung Ihrer Daten, die Sie zur Registrierung angegeben haben, erfolgt
        dann, wenn Sie uns mitteilen, dass Sie das betreffende Foto nicht mehr verwenden und Sie die jeweilige Lizenz
        damit k&uuml;ndigen. Hierzu reicht eine formlose Mitteilung per E-Mail. Die L&ouml;schung der
        Lizenzinformationen erfolgt dann innerhalb von 7 Werktagen nach Zugang Ihrer K&uuml;ndigung der
        Lizenzvereinbarung.</p>
    <p>&nbsp;</p>
    <h2>Datenverarbeitungen als angemeldeter Nutzer</h2>
    <p>Wenn Sie sich als registrierter Nutzer eingeloggt haben, sind Ihre Aktionen f&uuml;r uns sichtbar. Das bedeutet,
        wir k&ouml;nnen Ihrem Account (Ihren Anmeldedaten, Punkt 3) zuordnen, welche Bilder Sie suchen, anschauen und
        herunterladen. Weiter k&ouml;nnen wir feststellen, zu welchem Datum und zu welcher Zeit Sie sich eingeloggt
        haben und welche Suchanfragen Sie an die Datenbank eingegeben haben.&nbsp;</p>
    <p><strong>Beschreibung und Umfang der Datenverarbeitungen</strong></p>
    <ul>
        <li>Downloads von bestimmten Inhalten (Dateiname, URL der Datei und Ihre Aktionen)</li>
        <li>Datum des Downloads (Tag, Monat, Jahr)</li>
        <li>Datum und Uhrzeit des letzten Logins</li>
        <li>Suchanfragen</li>
        <li>Vormerkungen von Fotos im &bdquo;Leuchtkasten&ldquo;</li>
    </ul>
    <p><strong>Zweck der Datenverarbeitungen</strong></p>
    <p>Die Datenverarbeitungen erfolgen, damit wir wissen, wen wir bei erfolgten Downloads zur Nutzung unserer Fotos
        lizenziert haben und wer damit unser Vertragspartner ist. Des Weiteren m&ouml;chten wir die ordnungsgem&auml;&szlig;e
        Nutzung unserer Datenbank &uuml;berwachen und damit Missbrauch und Hacker-Angriffe verhindern.</p>
    <p><strong>Rechtsgrundlagen der Datenverarbeitungen</strong></p>
    <p>Die Zuordnung von Downloads zu Ihren Registrierungsdaten und dem Datum des Downloads geschieht, damit wir Ihnen
        als unserem Vertragspartner im Rahmen unserer AGB Nutzungsrechte an den von Ihnen ausgesuchten und
        heruntergeladenen Fotos einr&auml;umen k&ouml;nnen. Rechtsgrundlage hierf&uuml;r Art. 6 Abs. 1 Buchst. b DSGVO
        (Vertrag).</p>
    <p>Die Erhebung und Speicherung Ihrer IP-Adresse mit Ihren Login-Zeiten erfolgt im Rahmen der &Uuml;berwachung
        unserer Datenbank gegen Missbrauch und Hacker-Angriffe. Die Speicherung Ihrer&nbsp;IP-Adresse ist erforderlich,
        weil sie f&uuml;r die Abwehr von Hackerangriffen und zum Schutz des Systems bei St&ouml;rungen technisch
        notwendig sein kann. Rechtsgrundlage hierf&uuml;r ist Art. 6 Abs. 1 Buchst. f DSGVO (&bdquo;berechtigtes
        Interesse&ldquo;).</p>
    <p><strong>Speicherdauer und L&ouml;schungen von Nutzerdaten </strong></p>
    <p>Haben Sie bereits Downloads unter Ihren Registrierungsdaten get&auml;tigt und damit Lizenzen erworben, bleibt die
        Zuordnung Ihrer Downloads zu Ihren Daten der Registrierung und dem Downloaddatum (Tag, Monat, Jahr) solange
        gespeichert, wie dieses zur Durchf&uuml;hrung von Vertr&auml;gen zur Einr&auml;umung von Nutzungsrechten
        erforderlich ist. Gem&auml;&szlig; unserer AGB k&ouml;nnen Sie das jeweilige Foto ab dem Zeitpunkt des Downloads
        f&uuml;r eine unbestimmte Dauer f&uuml;r Ihre Ver&ouml;ffentlichungen nutzen. Eine L&ouml;schung der
        Lizenzierungsinformationen unter Zuordnung Ihrer Daten, die Sie zur Registrierung angegeben haben, erfolgt dann,
        wenn Sie uns mitteilen, dass Sie das betreffende Foto nicht mehr verwenden und Sie die jeweilige Lizenz damit k&uuml;ndigen.
        Hierzu reicht eine formlose Mitteilung per E-Mail. Die L&ouml;schung der Lizenzinformationen erfolgt innerhalb
        von 7 Werktagen nach Zugang Ihrer K&uuml;ndigung der Lizenzvereinbarung.</p>
    <p>Die L&ouml;schung Ihrer gespeicherten Aktionen durch die Nutzung von Suchfunktionen, Bildvormerkungen (&bdquo;Leuchtkasten&ldquo;)
        erfolgt automatisch mit dem Ausloggen.&nbsp;&nbsp;</p>
    <p>IP-Adressen mit Speicherung von Datum und Uhrzeit des letzten Logins werden nach Ablauf von 7 Tagen von uns gel&ouml;scht.</p>

    <h2>Nutzungsbedingungen</h2>
    <p>

        Diese Allgemeinen Geschäftsbedingungen ("AGB") gelten für die Website BestPicture (die "Website"), sowie für zugehörige Software, Mobile Apps und weitere im Zusammenhang mit BestPicture stehenden Websites (zusammengefasst der "Service"). Die AGB regeln das Verhältnis zwischen uns, den Betreibern der Website ("Wir" oder "BestPicture") und dem Nutzer ("Du" oder "Nutzer"), aber auch das Verhältnis der Nutzer untereinander.

        "Inhalt(e)" beschreibt hierin Bilder, Videos und Audio-Dateien, die unter der BestPicture Lizenz zur Verfügung stehen. Der Begriff "Bild(er)" umfasst Fotos, Vektorgrafiken, Zeichnungen und Illustrationen. "Video(s)" steht für bewegte Bilder, Animationen, Filmmaterial und andere audiovisuelle Inhalte. Audio-Dateien umfasst Soundeffekte, weitere Klänge, Musikdateien und Ähnliches.

        BestPicture kann diese Bedingungen jederzeit und ohne Ankündigung anpassen. Das Datum der letzten Änderung ist am Anfang dieser Seite genannt. Durch den weiteren Einsatz geben die Nutzer ihr Einverständnis zu den vorgenommenen Änderungen.
        Voraussetzungen und Anmeldung

        Du darfst den Service nur nutzen, wenn Du in Bezug auf diese AGB einen rechtlich bindenden Vertrag mit BestPicture eingehen kannst. Wenn Du unter 16 Jahre alt bist, darfst Du BestPicture nur mit Zustimmung Deiner Eltern, Deines Erziehungsberechtigten oder Deines Lehrer nutzen. Registrierungsdaten und weitere Informationen, die Du über den Service mitteilst, unterliegen unseren Datenschutzrichtlinien.
        Nutzung des Service

        Data Mining, Scraping und anderweitiger Einsatz von Programmen zur automatischen Datenerfassung und/oder Extraktion digitaler Daten ist strengstens untersagt. Die Technologie und Software, die dem Service zugrunde liegt, ist Eigentum von BestPicture und unseren Lizenzgebern, verbundenen Unternehmen und Partnern. Eine Lizenz hierfür wird nicht gewärt. Die Software darf weder im Ganzen noch in Teilen kopiert, wiederverwertet, nachkonstruiert und/oder dekompiliert werden - es sei denn BestPicture erteilt dazu die Genehmigung.

        Das Massenkopieren von Inhalten ist strikt untersagt sofern keine explizite Erlaubnis durch BestPicture erteilt wurde. Dies betrifft alle Inhalte auf BestPicture, inklusive der unter der BestPicture Lizenz veröffentlichten Bilder, Videos und Audio-Dateien. Die Zusammenstellung der Inhalte ist als kollektives Werk entsprechend internationaler Konventionen und Gesetze zum geistigen Eigentum urheberrechtlich geschützt.

        BestPicture Lizenz – Nutzung der Inhalte

        Inhalte auf BestPicture werden unter der BestPicture Lizenz mit den folgenden Bedingungen zur Verfügung gestellt. Durch die BestPicture Lizenz erhältst Du ein unwiderrufliches, weltweites, nicht exklusives und gebührenfreies Recht, die Inhalte für kommerzielle und nicht kommerzielle Zwecke zu verwenden, herunterzuladen, zu kopieren und zu verändern. Eine Nennung des Künstlers/Urhebers bzw. von BestPicture ist nicht erforderlich, wir wissen jedoch eine freiwillige Quellenangabe zu schätzen.

        Die BestPicture-Lizenz gestattet nicht:

        den Verkauf oder Vertrieb von Inhalten in digitaler Form, insbesondere als Stockfotos oder digitale Wallpaper;
        den Verkauf oder Vertrieb von Inhalten z.B. als Poster, Digitaldrucke, Musiktitel oder physische Produkte, ohne zusätzliche Elemente hinzuzufügen oder anderweitig einen Mehrwert zu schaffen;
        die Darstellung von identifizierbaren Personen auf beleidigende, pornografische, obszöne, unmoralische, diffamierende oder verleumderische Weise; oder
        die Suggestion, dass abgebildete Personen, Marken, Organisationen, etc. bestimmte Produkte oder Dienstleistungen befürworten oder billigen, es sei denn es wurde eine Genehmigung dazu erteilt.

        Beachte bitte, dass alle Inhalte auf BestPicture zwar für kommerzielle und nicht-kommerzielle Zwecke frei verwendbar sind, dargestellte Elemente in den Inhalten, wie identifizierbare Personen, Logos und Marken, jedoch zusätzlichen Urheberrechten, Eigentumsrechten, Personenrechten, Markenrechten usw. unterliegen können. Die Zustimmung eines Dritten oder die Lizenz dieser Rechte können insbesondere für kommerzielle Anwendungen erforderlich sein. BestPicture garantiert nicht, dass solche Zustimmungen oder Lizenzen eingeholt wurden, und lehnt ausdrücklich jegliche Haftung in dieser Hinsicht ab.
        Hochladen von Inhalten

        Durch das Hochladen von Inhalten auf die Website gewährst Du BestPicture ein unwiderrufliches, weltweites, nicht-exklusives und gebührenfreies Recht, die Inhalte für kommerzielle als auch für nicht-kommerzielle Zwecke zu verwenden, herunterzuladen, zu kopieren oder zu verändern. Dies beinhaltet auch das Recht von BestPicture, die Inhalte unter der BestPicture Lizenz - oder einer anderen von BestPicture angebotenen Lizenz - weiterzugeben.

        Du bist für Deine hochgeladenen Inhalte selbst verantwortlich und garantierst,

        dass Du alle Rechte an den Inhalten besitzt, die Du auf der Website hochlädst, und dass die Inhalte nicht gegen das Urheberrecht, Eigentumsrecht, Markenrecht oder andere anwendbare Rechte Dritter verstoßen; und
        dass Du alle Rechte am Inhalt, die für eine weltweite, kostenlose, unwiderrufliche und zeitlich unbegrenzte Nutzung erforderlich sind, besitzt und diese - sofern gesetzlich möglich - abtrittst und/oder weitergibst. Hierzu gehören insbesondere gültige Modelverträge, Fotografiererlaubnis, sowie weitere Lizenzen und Rechte Dritter.

        Obwohl BestPicture strikt darauf achtet, dass hochgeladene Inhalte nicht missbraucht bzw. entgegen unserer Nutzungsbedingungen eingesetzt werden, können wir dies leider nicht garantieren und im gegebenen Falle auch nicht zur Verantwortung gezogen werden.

        Wir behalten uns das Recht vor, jeden Inhalt auf BestPicture jederzeit zu löschen. Dies trifft insbesondere auf defekte Dateien, auf Inhalte von minderer Qualität sowie auf rechtlich Problematisches zu.

    </p>

</section>

<footer>
    <p id="contact">Contact</p><br>
    <div class="emails">
        <p><a href="mailto:7046@htl.rennweg.at">Dietrich Kops</a></p>
        <p>●</p>
        <p><a href="mailto:7047@htl.rennweg.at">Johanna Kronfuß</a></p>
        <p>●</p>
        <p><a href="mailto:7055@htl.rennweg.at">Nils Schneider-Sturm</a></p>
        <p>●</p>
        <p><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Sartori</a></p>
    </div>
    <img class="logofooter" src="../assets/images/Logo.png" alt="logo"><br>
</footer>

</body>
</html>