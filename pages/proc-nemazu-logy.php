<h1>Proč nemažu logy: Archeologie kódu a systém v chaosu</h1>

<h2>Na vysoké škole mě nepřipravili na to, co mě čeká, sami to nemohli tušit</h2>

<p>V každé učebnici čistého kódu se dočtete: „Nepoužívejte zakomentovaný kód. Odstraňujte logy. Od toho máte Git.“ Zní to krásně v teorii nového projektu na zelené louce. Ale v momentě, kdy vstoupíte do temných chodeb deset let starého legacy systému, který drží pohromadě kritický byznys, tyto poučky začínají praskat.</p>
<p>Já logy z produkce mažu, ale z kódu je nikdy nevyhazuji. Jsou to mé <b>značky na cestě</b>, které mi umožňují navigovat v digitální džungli s chirurgickou přesností.</p>

<h2>Zakomentovaný log: Moje pojistka pro budoucnost</h2>

<p>Můj přístup je prostý: Pokud jsem jednou potřeboval v určitém místě vidět hodnotu proměnné, je vysoká pravděpodobnost, že ji tam budu potřebovat znovu. Místo toho, abych při příštím incidentu znovu „vrtal do zdi“ a hledal správný bod pro sondu, prostě odkomentuji existující řádek.</p>
<p>V mém zdrojovém kódu běžně narazíte na: <code>// console.log(result) // #31.236.1</code></p>
<p>Tento řádek je pro mě cennější než tisíc řádků dokumentace. Říká mi přesně, kde jsem byl, co jsem sledoval a hlavně <b>proč</b>.</p>

<h2>Systém značek: Když kód vypráví svou historii</h2>

<p>Aby se ze zakomentovaných logů nestala jen další vrstva špagety-kódu, používám přísný hierarchický systém značek. Každý log je opatřen identifikátorem, který funguje jako GPS souřadnice v historii mých ticketů.</p>
<p>Formát <code>#Projekt.Ticket.Operace</code> mi umožňuje okamžitou orientaci:</p>

<ul>
    <li><b>#31</b>: Chci vidět vše, co se kdy měnilo v rámci projektu 31.</li>
    <li><b>#31.236</b>: Potřebuji izolovat všechny diagnostické body konkrétního ticketu.</li>
    <li><b>#31.236.1</b>: Jdu přímo k prvnímu kroku ověření v rámci daného úkolu.</li>
</ul>

<p>Tento systém mi dává něco, co mi <code>git log</code> nebo <code>git blame</code> nikdy nenabídne tak rychle: <b>Kontext v reálném čase přímo u zdroje.</b> Nemusím přepínat okna, nemusím lovit v historii commitů. Stačí mi fulltextové vyhledávání v IDE.</p><h3>Co když log slouží více pánům?</h3>
<p>Někdy je jedno místo v kódu klíčové pro více problémů. V takovém případě se z logu stává „nástěnka“ historie: <code>// console.log(result) // #31.236.1 #31.134.3 #35.12.1</code> Tímto způsobem hned vidím, že tento konkrétní výstup byl kritický pro tři různé úpravy v průběhu času. To je informace, která má při údržbě legacy systémů cenu zlata.</p>

<h2>Atomické kroky: Jeden test, jedna hodnota</h2>

<p>Největší chybou při logování a testování je tříštění pozornosti. Snažit se v jednom kroku sledovat pět proměnných je cesta k chybě. Moje pravidlo zní: <b>Jeden krok v ticketu = jedna sledovaná hodnota.</b></p>
<p>Nezáleží na tom, jestli má ticket třicet kroků. Pokud je každý z nich jednoznačný a vede k jedné konkrétní hodnotě v logu nebo v GUI, mám vyhráno.</p><ul><li><p0,0"><b0,0">Špatně:</b> Logovat celý objekt a doufat, že si v něm všimnu anomálie.</p></li><li><p1,0"><b1,0">Správně:</b> Vytvořit krok <code1,0">#31.236.1</code>, který mi vyplivne pouze <code1,0">true/false</code> pro jednu konkrétní validaci.</p></li></ul>
<p>Tento řemeslný přístup mi umožňuje udržet si čistou hlavu. Debugování pro mě není hádání, je to postupná eliminace nejistoty. Každý krok je pevným bodem, o který se můžu opřít, než udělám další.</p>

<h2>Závěr: Řemeslo vs. Dogma</h2>

<p>Někdo by mohl říct, že můj kód vypadá „špinavě“. Já říkám, že vypadá <b>připraveně</b>. Jako dílna tesaře, který má na stěně obkreslené obrysy nářadí, aby hned viděl, co mu chybí.</p>
<p>Můj cíl není vyhrát soutěž o nejkrásnější kód na GitHubu. Můj cíl je dodat klientovi stabilní systém a být schopen ho opravit dřív, než si stačí dopít kávu. Zakomentované logy s jasnou hierarchií jsou nástrojem, který mi to umožňuje.</p>

<h2>TL;DR:</h2>

<ul>
    <li><b>Logy v kódu nechávám:</b> Šetří to čas při budoucím zkoumání stejného místa.</li>
    <li><b>Hierarchické tagy:</b> Formát <code>#Projekt.Ticket.Krok</code> umožňuje bleskové vyhledávání souvislostí.</li>
    <li><b>Jedna hodnota na krok:</b> Debugování musí být atomické, aby se předešlo tříštění pozornosti.</li>
    <li><b>Kód jako mapa:</b> Zakomentované logy jsou záznamem o tom, jak systém skutečně dýchá.</li>
</ul>