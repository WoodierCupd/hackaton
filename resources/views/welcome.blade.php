@extends('layouts.base')
@section('content')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <h1 class="font-title">Schaakspelregels</h1>
    <h2 class="title">Het schaakbord</h2>
    <p class="font-family">Het eerste dat je nodig hebt om te kunnen schaken is een schaakbord. Je ziet een schaakbord in diagram (1), let even op dat het veld linksonder altijd een zwart veld is! Zoals je ziet is een schaakbord 8 velden lang en 8 velden breed, in totaal dus 64 velden. Alle velden doen bij schaken mee! Al die velden hebben een voornaam en een achternaam. In het diagram zie je rond het schaakbord letters en cijfers staan. Elk veld heeft als voornaam een letter en als achternaam een cijfer. Het veld linksonder heet bijvoorbeeld a1, en het veld rechtsboven h8. De 4 velden in het midden van het bord waar de stukken(pionnen) op staan (d4, d5, e4 en e5) noemen we het centrum. Deze velden zijn belangrijk omdat daar vaak gestreden wordt. In het schaken noemen we een horizontale lijn (met de cijfers) een rij (dus bijvoorbeeld de 2e rij), en de verticale lijn (met de letters) een lijn (dus bijvoorbeeld de c-lijn). Een schuine lijn noemen we een diagonaal. Nu we iets van het schaakbord weten gaan we eens naar de stukken kijken.</p>

    <h2 class="title">De schaakstukken</h2>
        <p class="font-family">Bij schaken heb je zes verschillende schaakstukken die allemaal een unieke en belangrijke functie hebben. Deze stukken kunnen bewegen naar een vrij veld, of stukken van de tegenstander slaan. Ze kunnen niet over andere schaakstukken heenspringen (uitzondering is het paard). Ik zal nu vertellen hoe de verschillende stukken mogen lopen en slaan.

    <h2 class="title">De koning</h2>
        De koning mag één veld in alle richtingen (vooruit, achteruit, links, rechts of schuin) lopen en slaan. Er is wel iets bijzonders met de koning. De koning mag nooit aangevallen (aanvallen is als je de volgende beurt het stuk dat je aanvalt kan slaan) staan. Dus als een stuk van de tegenstander je koning aanvalt, dan moet je met je koning weglopen of een stuk tussen je koning en de aanvaller zetten (of het aanvallende stuk slaan), zodat je koning niet meer aangevallen staat. Als de koning aangevallen staat en niet meer kan vluchten, dan sta je schaakmat en verlies je. Dit maakt de koning een kwetsbaar en belangrijk stuk. Je moet hem dus goed beschermen!
    <h2 class="title">De dame</h2>
        De dame (ook wel koningin) mag meerdere velden in alle richtingen (wel via een rechte lijn, dus horizontaal, verticaal, of diagonaal) lopen en slaan. Dit maakt de dame dus een erg sterk stuk. Je hebt er echter maar 1, dus wees er altijd zuinig op.
    <h2 class="title">De toren</h2>
        De toren mag meerdere velden vooruit, achteruit, links of rechts lopen en slaan. De toren mag dus alleen recht bewegen. Dit maakt de toren een sterk stuk, net iets sterker dan de loper en het paard die hier na komen.
    <h2 class="title">De loper</h2>
        De loper mag meerdere velden schuin bewegen en slaan. Hij loopt dus over diagonalen. Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, hetzelfde geldt voor een loper op een wit veld.
    <h2 class="title">Het paard</h2>
        Het paard is een interessant stuk. In tegenstelling tot andere stukken loopt hij niet, maar maakt hij een sprong. Hij kan dus over andere stukken heenspringen. Het paard springt altijd 1 veld recht en 1 veld schuin.
    <h2 class="title">De pion</h2>
        Pionnen kunnen alleen 1 stap vooruit bewegen. Hierop is 1 uitzondering: zoals je zometeen in de beginstelling zal zien beginnen de pionnen op de 2e (of voor zwart op de 7e) rij. De eerste keer dat je met de pion beweegt mag je ook 2 velden vooruit. Je kunt er dus voor kiezen je pion 1 veld vooruit te spelen naar de 3e rij, of 2 velden naar de 4e rij. Pionnen kunnen alleen schuin vooruit slaan. Ze kunnen dus enkel het veld links of rechts schuin voor hen slaan.
    <h2 class="title">De waarde van de schaakstukken</h2>
        De stukken hebben allemaal een waarde die je hieronder in de tabel ziet. Onthoudt wel dat deze waarde relatief is. Je kunt je namelijk wel voorstellen dat een toren die in een hoek ingebouwd staat niet zo sterk is als een toren die heel actief staat (dus naar veel andere velden 'kijkt'.
    <ul></ul>
        Stuk	Punten
        Dame	9
        Toren	5
        Loper	3
        Paard	3
        Pion	1
        Ik heb de koning niet in deze tabel staan. Wanneer je koning mat komt te staan heb je verloren, en je koning is dus eigenlijk oneindig veel waard.

    <h2 class="title">De beginstelling</h2>
        Bij schaken begin je altijd met dezelfde opstelling die je ziet in diagram (8). Je begint dus met 8 pionnen, 2 torens, 2 lopers, 2 paarden, een dame en een koning. Let nog even op dat het veld linksonder altijd een zwart veld is. Je ziet dat de stukken van zwart precies tegenovergesteld staan aan die van wit. Waar je nog even op moet letten zijn de positie van de koning en de dame. Een manier om deze goed te onthouden is te zeggen dat de dame altijd haar eigen kleur kiest (haar schoenen moeten namelijk wel bij haar jurk passen!). De witte dame begint dus op een wit veld en de zwarte dame op een zwart veld (je kan ook onthouden dat de dame altijd op de d-lijn begint). Beide manieren zijn handig om voor kinderen te onthouden.

    <h2 class="title">Aanvallen en verdedigen</h2>
        Schaken is het spel van aanvallen en verdedigen. Aanvallen betekent dat jouw stuk een stuk van de tegenstander kan slaan. Je tegenstander kan dan een ander stuk zo zetten dat hij dat stuk terug kan pakken. Als jij dan het stuk zou pakken kan je tegenstander het stuk terugpakken. Dat noem je verdedigen of ook wel dekken.

        aanval bij schakenverdedigen bij schaken

        In het linkerdiagram zie je dat de loper het paard aanvalt. In het rechterdiagram is het paard echter verdedigd door de pion (zwart speelt altijd van boven naar beneden in deze diagrammen). Als wit nu het paard zou pakken kan zwart de loper terug pakken.

        Aangezien in het voorbeeld de loper evenveel waard is als het paard, is dit een gelijke ruil. Als het paard nou een toren of een dame was geweest, was het goed voor wit om de toren of dame te pakken, ondanks dat deze verdedigd stond, een toren of dame is immers meer waard dan een loper! Andersom geldt natuurlijk ook dat als de loper een dame was geweest het niet slim is om deze te ruilen voor een paard. Je wilt dus alleen ruilen als het stuk meer waard is dan jouw stuk. Als de stukken evenveel waard zijn kan je wel ruilen, maar het hoeft niet. Wanneer het slim is om te ruilen of niet in zo'n geval leer je vanzelf.

        Als je tegenstander een stuk van jou aanvalt dat meer waard is dan zijn stuk, kan je bijvoorbeeld het stuk wegzetten, of een ander (minder waardevol) stuk tussen jouw stuk en de aanvaller zetten mits deze verdedigd is (anders geef je dat stuk gewoon weg).

    <h2 class="title">Schaak en schaakmat</h2>
    <h3 class="tussen-titel">Schaak</h3>
        Schaak is een belangrijk onderdeel en heeft alles met de koning te maken. We weten inmiddels wat aanvallen is. Een bijzonder geval is wanneer de koning aangevallen staat. We noemen dit schaak. Aangezien de koning niet schaak (dus aangevallen) mag staan, moet je dit voorkomen door bijvoorbeeld weg te lopen met de koning. In diagram (9) staat de koning schaak door de toren, dus de koning zal nu weg moeten lopen wil hij volgens de spelregels schaken.
    <h3 class="tussen-titel">Schaakmat</h3>
        Wanneer de koning schaak staat en hij kan niet meer vluchten of op een andere manier voorkomen dat hij schaak blijft staan heb je verloren, je staat dan schaakmat. Het doel van schaken is dus om te voorkomen dat je mat staat, en te proberen de tegenstander mat te zetten. Dit is de enige manier om te winnen (of je tegenstander kan opgeven wanneer hij geen enkele mogelijkheid meer ziet om nog te winnen en zelf uiteindelijk mat zal gaan). In diagram tien staat de koning schaakmat. Hij staat schaak en kan niet meer vluchten. Ook kan hij de dame niet slaan omdat deze verdedigd staat door het paard.
    <h2 class="title">Drie bijzondere spelregels</h2>
        Alle spelregels van schaken heb je nu geleerd, maar naast de gewone spelregels die je inmiddels kent, zijn er bij schaken nog drie bijzondere spelregels. Deze bijzondere zetten zijn best lastig om te leren, maar erg belangrijk en nuttig!
    <h2 class="title">Rokade</h2>
        De eerste spelregel is de rokade. Het is een zet met twee doelen. Je brengt de kwetsbare koning in veiligheid en je brengt de toren in het spel. Dit is de enige zet die twee stukken beweegt en hij gaat als volgt: je zet je koning twee velden naar links of rechts, en vervolgens plaats je de toren in de hoek direct over de koning heen naast de koning. In het ene geval zal de toren dus drie velden opschuiven (dit noemen we de lange rokade), en in het andere geval twee velden (dit is de korte rokade).
        <br><br>
        Er zijn nog wel wat spelregels waar de rokade aan moet voldoen:<br><br>
        <ul>
            <li>De koning mag niet schaak staan.</li>
            <li>De koning mag geen schaak komen te staan.</li>
            <li>De koning mag niet over een veld heengaan waarop hij schaak zou staan.</li>
            <li>Noch de koning noch de toren mogen al eens gespeeld hebben. (ze staan dus nog op de beginpositie zonder al bewogen te hebben).</li>
            <li>Tussen koning en toren mogen vanzelfsprekend geen andere stukken staan.</li>
        </ul><br>
        Wordt aan deze schaakregels voldaan, dan kan je kort of lang rokeren. Het resultaat hiervan zie je in diagram (2). Wit heeft hier kort gerokeerd, zwart heeft lang gerokeerd. Als wit een toren op a1 had (en de koning stond nog op e1) had hij echter ook lang kunnen rokeren, en evenzo had zwart ook kort kunnen rokeren met de koning op e8 en een toren op h8.

        De rokade is een erg belangrijke zet en zal in bijna iedere partij voorkomen. Het is meestal fijner om je koning aan de zijkant te hebben (waar hij veilig achter pionnen kan schuilen) en je torens in het midden (waar ze mee kunnen doen aan de slag in het centrum). Waar je nog even op moet letten bij de rokade is dat je jezelf aanleert om eerst de koning te zetten en dan pas de toren eroverheen en niet omgekeerd. In officiële partijen mag dit namelijk niet. Wanneer je de toren namelijk loslaat wordt dit als je zet gezien. Je mag dan niet meer de koning eroverheen plaatsen. Daarom moet je het andersom doen. Door eerst de koning twee plaatsen te zetten (wat normaal niet zou kunnen) is het duidelijk dat je gaat rokeren en zal er geen probleem ontstaan wanneer je vervolgens je toren eroverheen plaatst. Je kan het ook tegelijk doen.

    <h2 class="title">Promoveren</h2>
        Nu de tweede bijzondere zet. Deze heeft betrekking op de pion. We weten dat deze alleen vooruit beweegt, en schuin vooruit slaat. Hij zal dus altijd verder vooruit gaan en nooit terug. Wanneer de pion de overkant bereikt zou dit een probleem geven. Daarom mag je als je pion de overkant bereikt hem promoveren in een stuk naar keuze. Je kan kiezen uit een dame, toren, loper of paard. De keuze zal uiteraard bijna altijd op een dame vallen, maar er zijn uitzonderingen waar je liever een ander stuk zou hebben. Als je al een dame hebt maakt dat niks uit, je pakt gewoon nog een dame uit een ander schaakspel (in vriendschappelijke partijen kan je ook wel een toren op zijn kop als dame gebruiken, of zelfs een pion op de zijkant leggen mits deze niet weg rolt).

    <h2 class="title">En-passant</h2>
        De derde en laatste bijzondere zet heeft ook betrekking op de pion, en wel op het feit dat deze twee velden vooruit mag in het begin van zijn reis. En-passant betekent in het Frans zoiets als "in de voorbijgang". Wanneer een pion een veld aanvalt dat voorbijgegaan wordt door de eerste zet van een pion die twee velden vooruit gaat, dan mag de aanvallende pion de andere slaan, alsof hij slechts één veld naar voren is gegaan. Let er wel op dat dit direct de eerstvolgende zet dient te gebeuren. Je krijgt dus maar 1 keer de kans om dit te doen. Hieronder staat gelijk een voorbeeld waarin deze zet helemaal duidelijk wordt.

        1. e4 Wit zet de pion en probeert voorbij te gaan aan de zwarte pion. De zwarte pion kan nu in DEZE zet die pion pakken, anders verliest hij die mogelijkheid. 1... dxe3 2. dxe3 e5 Wit pakt nu de zwarte pion en passant. 3. fxe6 fxe6 4. g4 g5 5. h3 Nu kan zwart niet meer de pion en passent pakken, zijn kans is de vorige zet voorbijgegaan. 5... b5 6. axb6 axb6.

    <h2 class="title">Klaar om te schaken!</h2>
        Je kent nu alle spelregels van het schaken! Je weet iets van het bord en hoe de stukken bewegen. Je weet hoe je moet beginnen en wat aanvallen en verdedigen is. Je weet wat schaak en schaakmat is en je kent de drie bijzondere spelregels.

        In principe kan je nu dus schaken! Er is echter nog veel meer om te leren, en daarvoor vind je nog veel meer informatie en tips op deze site. Je kunt dus rustig verder deze site bekijken en alle verhaaltjes lezen, maar probeer ook eens gewoon te gaan spelen, zodat je de dingen die je hebt geleerd in de praktijk kan gaan doen, dan onthoudt je ze nog beter. Have fun!</p>
@endsection
