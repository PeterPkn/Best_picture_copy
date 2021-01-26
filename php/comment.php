<?php
    require_once "mysql_manager.php";
    require_once "user.php";

    /*
     * Übeprüft ob Kommentar Wörter aus Blacklist enthält, ruft saveComment() auf
     */
    function filterComment($photo_id, $comment) {
        //$blacklist = file_get_contents('./cursewordlist2.txt');
        $blacklist = '/Affenarsch|Affenkotstück|Affenmensch|Allmachtsdackel|Ameisenficker|Analbaron|Analraupe|Analzone|anorektische Fettsau|Armee schwanzloser Primaten|Arschbratze|Arschforscher|Arschfotzengesicht|Arschgesicht|Arschhaarbartfratze|Arschkeks|Arschkopf|Arschlocke|Ashley|Aso|Atomspast|Auspuffbumser|Bachel|Badkapp|bangen|Berber|Besen|Birkenstockfotzenkopf|Birl|Blödfisch|Blödmusiker|Bodendompteuse|Brunskuh|Buckelhur|Bumsnuss|Buschmensch|Butterkuh|Cholerator|Computerflüsterer|Dauerlutscher|Dollbohrer|Donnerfotze|Doofmannsgehilfe|Doppeldepp|Dreilochnutte|Du Ast!|Dumm-Rasseler|Dünnschissgurgler|Eibemme|Eichelarschkopf|Fitch|Flachgeist|Flattermuschi|Flodder|Fontanellenfick|Fotze|Fotzklotz|Gargamel|Gaylon|Gebärfrau|Geburtsfehlermiss|geistiger Tiefflieger|Gesichtseintopf|Gesichtsgünter|Gesichtsmorph|Gnarf|Gnogel|Grasdackel|Gratler|Großhirnkastrat|H2O-Kopf|Hack ab!|Hackfresse|Halbaffe|Halma|Hannefatzke|hartzig|Hausschuhgesicht|HDV|hirnamputierter Rhinozerusarsch|Hodenbussard|Hodenkopf|Hodenschrubbler|Hohlbratze|hohle Fritte|Honk|Hosenlottle|Hosentaschen Godzilla|HRSN|Huru|Hutze|Hübi|ins Hirn scheißen|Intelligenzverweigerer|Kackbatzen|Kackstuhl|Kanisterkopf|Klapskalli|Klitzmorchel|Klufenmichel|Knallarsch|Knecht Huso|Kotlutscher|Kotzkannenfressbrett|Kotzkrücke|Krapfengesicht|Kuttenluder|Larve|Lattenheinrich|Lattenschreck|Lällebäbbl|Liam|Loser|mangelbegent|Missi|Mongo|Mr. Grotte|Muschischeps|Nafti|Napfwurst|Nougatnutte|Nuddebumber|Ogerlurch|Orgasmusbremse|oshig|Otzenfrosch|Paragrafenschubse|Partyopfer|Paselacke|Peniskopf|Penisprothesenträger|Pfeifenheini|Pferdefresse|Pfingstochse|pickelgesichtiger Spritzbock|Pimmel|Pimmelfresse|Pimmelkopf|Pimmelpapagei|Pisskajole|Plempe|Pleppo|Pottmolch|Rotzpupsi|Sackfotze|Schlampe|Schlabberlappen|schleimscheißender Bambusaffe|Schmalzgrab|Schmalztitte|Schmongo|Schmönkchen|Schmudel|schnarchzapfiger Rüsselsack|Schüttler|Senfgurke|Sheamus|Simbel|Slut|Spaltenspengler|Spammailautor|Spastard|spastophil|Späner|Spoastie|Spongebob|Sponk|Staubbeutel|Steroidbeule|Steroidmutant|Swarowski-Möse|Tapetengerippe|Topmoppel|Tüffel|Unwerk|Vollaffe|vollgepisste Strumpfhose|vollgeschissene Menschenhülle|Vollmongo|Vongo|Wachsfresse|Waldwichtel|Wichsbazille|Wichsfisch|Wikidiot|Wulfer|wulffen|Zahnspangenbettler|zoologisches Abfallprodukt|aasgeier|abspritzer|sdfds|ackerfresse|affenarsch|affenhirn|affenkotze|afterlecker|aktivex.info|almosenarsch|amazing|am-sperma-riecher|anal|analadmiral|analbesamer|analbohrer|analdrill|analentjungferer|analerotiker|analfetischist|analförster|anal-frosch|analnegerdildo|analratte|analritter|aok-chopper|armleuchter|arsch|arschaufreißer|arschbackenschänder|arschbesamer|ärsche|arschentjungferer|arschficker|arschgeburt|arschgefickte gummifotze|arschgeige|arschgesicht|arschhaarfetischist|arschhaarrasierer|arschhöhlenforscher|arschkrampe|arschkratzer|arschlecker|arschloch|arschlöcher|arschmade|arschratte|arschzapfen|arsebandit|arsehole|arsejockey|arselicker|arsenuts|arsewipe|assel|assfuck|assfucking|assgrabber|asshol|asshole|asshole|assi|assrammer|assreamer|asswipe|astlochficker|auspufflutscher|bad motherfucker|badass|badenutte|bananenstecker|bastard|bastard|bauernschlampe|beating the meat|beef curtains|beef flaps|behindis|bekloppter|muttergeficktes|beklopter|bettnässer|bettpisser|bettspaltenficker|biatch|bimbo|bitch|bitches|bitchnutte|bitsch|bizzach|blechfotze|blödmann|blogspoint|blow job|bohnenfresser|boob|boobes|boobie|boobies|boobs|booby|boy love|breasts|brechfurz|bückfleisch|bückstück|bückvieh|buggery|bullensohn|bullshit|bummsen|bumsen|bumsklumpen|buschnutte|busty|butt pirate|buttfuc|buttfuck|buttfucker|buttfucking|carpet muncher|carpet munchers|carpetlicker|carpetlickers|chausohn|clitsuck|clitsucker|clitsucking|cock|cock sucker|cockpouch|cracka|crap|craper|crapers|crapping|craps|cunt|cunt|cunts|dachlattengesicht|dackelficker|dickhead|dicklicker|diplomarschloch|doofi|douglette|drecksack|drecksau|dreckschlitz|dreckschüppengesicht|drecksfotze|drecksmösendagmar|drecksnigger|drecksnutte|dreckspack|dreckstürke|dreckvotze|dumbo|dummschwätzer|dumpfbacke|dünnpfifftrinker|eichellecker|eierkopf|eierlutscher|eiswürfelpisser|ejaculate|entenfisterer|epilepi|epilepis|epileppis|fagette|fagitt|fäkalerotiker|faltenficker|fatass|ferkelficker|ferkel-ficker|fettarsch|fettsack|fettsau|feuchtwichser|fick|fick*|fickarsch|fickdreck|ficken|ficker|fickfehler|fickfetzen|fickfresse|fickfrosch|fickfucker|fickgelegenheit|fickgesicht|fickmatratze|ficknudel|ficksau|fickschlitz|fickschnitte|fickschnitzel|fingerfuck|fingerfucking|fisch-stinkender hodenfresser|fistfuck|fistfucking|flachtitte|flussfotze|fotze|fotzenforscher|fotzenfresse|fotzenknecht|fotzenkruste|fotzenkuchen|fotzenlecker|fotzenlöckchen|fotzenpisser|fotzenschmuser|fotzhobel|frisösenficker|frisösenfotze|fritzfink|froschfotze|froschfotzenficker|froschfotzenleder|fucked|fucker|fucker|fucking|fuckup|fudgepacker|futtgesicht|gay lord|geilriemen|gesichtsfotze|göring|großmaul|gummifotzenficker|gummipuppenbumser|gummisklave|hackfresse|hafensau|hartgeldhure|heil hitler|hi hoper|hinterlader|hirni|hitler|hodenbeißer|hodensohn|homo|hosenpisser|hosenscheißer|hühnerficker|huhrensohn|hundeficker|hundesohn|hurenlecker|hurenpeter|hurensohn|hurentocher|idiot|idioten|itakker|ittaker|jack off|jackass|jackshit|jerk off|jizz|judensau|kackarsch|kacke|kacken|kackfass|kackfresse|kacknoob|kaktusficker|kanacke|kanake|kanaken|kanaldeckelbefruchter|kartoffelficker|kinderficken|kinderficker|kinderporno|kitzler fresser|klapposkop|klolecker|klötenlutscher|knoblauchfresser|konzentrationslager|kotgeburt|kotnascher|kümmeltürke|kümmeltürken|lackaffe|lebensunwert|lesbian|lurchi|lustbolzen|lutscher|magerschwanz|manwhore|masturbate|meat puppet|missgeburt|mißgeburt|mistsau|miststück|mitternachtsficker|mohrenkopf|mokkastübchenveredler|mongo|möse|mösenficker|mösenlecker|mösenputzer|möter|mother fucker|mother fucking|motherfucker|muschilecker|muschischlitz|mutterficker|nazi|nazis|neger|nigga|nigger|niggerlover|niggers|niggerschlampe|nignog|nippelsauger|nutte|nuttensohn|nuttenstecher|nuttentochter|ochsenpimmel|ölauge|oral sex|penis licker|penis licking|penis sucker|penis sucking|penis|peniskopf|penislecker|penislutscher|penissalat|penner|pferdearsch|phentermine|pimmel|pimmelkopf|pimmellutscher|pimmelpirat|pimmelprinz|pimmelschimmel|pimmelvinni|pindick|piss off|piss|pissbirne|pissbotte|pisse|pisser|pissetrinker|pissfisch|pissflitsche|pissnelke|polacke|polacken|poop|popellfresser|popostecker|popunterlage|porn|porno|pornografie|pornoprengel|pottsau|prärieficker|prick|quiff|randsteinwichser|rasierte votzen|rimjob|rindsriemen|ritzenfummler|rollbrooden|roseten putzer|roseten schlemmer|rosettenhengst|rosettenkönig|rosettenlecker|rosettentester|sackfalter|sackgesicht|sacklutscher|sackratte|saftarsch|sakfalter|schamhaarlecker|schamhaarschädel|schandmaul|scheisse|scheisser|scheissgesicht|scheisshaufen|scheißhaufen|schlammfotze|schlampe|schleimmöse|schlitzpisser|schmalspurficker|schmeue|schmuckbert|schnuddelfresser|schnurbeltatz|schrumpelfotze|schwanzlurch|schwanzlutscher|schweinepriester|schweineschwanzlutscher|schwuchtel|schwutte|sex|shiter|shiting|shitlist|shitomatic|shits|shitty|shlong|shut the fuckup|sieg heil|sitzpisser|skullfuck|skullfucker|skullfucking|slut|smegmafresser|spack|spacko|spaghettifresser|spastard|spasti|spastis|spermafresse|spermarutsche|spritzer|stinkschlitz|stricher|suck my cock|suck my dick|threesome|tittenficker|tittenspritzer|titties|titty|tunte|untermensch|vagina|vergasen|viagra|volldepp|volldeppen|vollhorst|vollidiot|vollpfosten|vollspack|vollspacken|vollspasti|vorhaut|votze|votzenkopf|wanker|wankers|weichei|whoar|whore|wichsbart|wichsbirne|wichser|wichsfrosch|wichsgriffel|wichsvorlage|wickspickel|wixa|wixen|wixer|wixxer|wixxxer|wixxxxer|wurstsemmelfresser|yankee|zappler|zyclon|zyklon/i';

        if(!preg_match($blacklist, $comment)) {
            $comment = htmlspecialchars($comment, ENT_QUOTES);
            saveComment($photo_id, $comment);
            return [
                'success' => true,
                'comment' => $comment
            ];
        }
        else {
            return [
                'success' => false
            ];
        }
    }

    /*
     * Speichert geschriebenen Kommentar in Datenbank
     */
    function saveComment($photo_id, $comment) {
        if(get_signed_in_user()!=-1) {
            $sql = get_bp_mysql_object()->prepare("insert into comment (photo_id, user_id, text) values (:photo_id, :user_id, :comment)");
            $sql->execute(array(
                ":photo_id" => $photo_id,
                ":user_id" => get_signed_in_user_id(),
                ":comment" => $comment
            ));
        }
    }

    /*
     * Liefert Array [Vorname Nachname] => Kommentar
     */
    function getComments($photo_id) {
        $s = get_bp_mysql_object()->prepare("select concat(vorname, ' ', nachname) Name, text
        from photo p
        join comment c on p.photo_id = c.photo_id
        join user u on u.user_id = c.user_id
        where p.photo_id = :photo_id
        ");
        $s->execute(array(":photo_id" => $photo_id));
        return $s->fetchAll();
        #return array_combine($obj["Name"], $obj["text"]);
    }
