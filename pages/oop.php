<h1>OOP je nástroj, ne modla: Pohled z programátorské dílny</h1>

<p>V mé dílně vládne realita. Jako programátor, který se raději vrtá v deset let starém legacy kódu, než aby teoretizoval u kulatého stolu o čistotě architektury, se na Object-Oriented Programming (OOP) dívám optikou řemeslníka. OOP není náboženství, je to nástroj. A jako každý nástroj, i tento bývá často používán špatně – buď ze zvyku, nebo z nepochopení jeho skutečné podstaty.</p>

<p>Pokud má být náš kód trvanlivý a prediktabilní, musíme se zbavit dogmat a přiznat si krutou pravdu o tom, co v OOP skutečně funguje a co je jen technický dluh v líbivém balení.</p>

<h2>Třída plná static metod je jen převlečená procedura</h2>

<p>Často narážím na třídy, které jsou doslova „vytapetované“ klíčovým slovem <code>static</code>. Přiznejme si to: taková třída je v OOP světě naprosto zbytečná. Není to objekt. Je to jen krabice na nářadí, kde je všechno přilepené ke dnu. </p>

<p>V momentě, kdy z objektu vymažete stav a instanci, vracíte se k procedurálnímu programování, ale s neohrabanou syntaxí navíc. Pokud nepotřebujete instanci, nepotřebujete ani třídu. Takový kód se špatně testuje, špatně mockuje a v podstatě popírá celou myšlenku objektového modelu. Je to jen líný způsob, jak seskupit funkce, které k sobě často ani nepatří. Nebojte se vytvářet samostatné procedury a funkce. To je původní a nejpřirozenější způsob programování už od dob Assembleru.</p>

<h2>Kompozice je přirozenější než dědičnost</h2>

<p>Dědičnost je v učebnicích glorifikována, ale v mé praxi je to často cesta do pekel. Vytváří rigidní hierarchie, které se při první změně požadavků zhroutí jako dům z písku. Kompozice je mnohem blíž skutečnému řemeslu. </p>

<p>Tesař nevyrábí židli tak, že „zdědí“ vlastnosti dřeva. On vezme nohy, sedák a opěradlo a složí je dohromady. To je princip „has-a“ místo „is-a“. Kompozice nám dává svobodu měnit komponenty za pochodu, aniž bychom rozbili celý rodokmen tříd. Je to flexibilní, srozumitelné a především – v produkci se to mnohem lépe udržuje.</p>

<h2>Dědičnost jako verze, ne jako batoh</h2>

<p>Když už se rozhodneme pro dědičnost, měli bychom ji vnímat správně. Podle mě dědičnost není jen „rozšíření“ o pár dalších funkcí. Je to v podstatě novější, specializovaná verze původního konceptu. </p>

<p>Chcete-li použít již existující funkcionalitu, ale současně v ní něco změnit, zděděním třídy můžete vytvořit novou verzi oné třídy a následně používat tuto novou verzi. Neohrozíte tak použití stávajících instancí původní třídy, které jsou v kódu zadrátované hodně hluboko a je to jeden ze způsobů, jak se vyrovnat se zpětnou kompatibilitou.</p>

<h2>Polymorfismus: Jediný důvod, proč OOP existuje</h2>

<p>Teď budu trochu radikální, ale stojím si za tím: Polymorfismus je jediný skutečný důvod, proč používat OOP. Všechno ostatní – zapouzdření, abstrakce – se dá v rozumné míře vyřešit i v jiných paradigmatech. </p>

<p>Ale schopnost vzít různé objekty a zacházet s nimi jednotně skrze společné rozhraní, to je ten „Svatý grál“. Právě polymorfismus nám umožňuje psát kód, který je rozšiřitelný bez toho, abychom museli sahat do jeho jádra. Pokud váš objektový model nevyužívá polymorfismus k eliminaci nekonečných <code>if</code> a <code>switch</code> konstrukcí, pak jen zbytečně komplikujete data structures.</p>

<h2>Past jménem přetěžování metod</h2>

<p>Objektový model založený na mnohonásobném přetížení (overloading) metod považuji za chybu v návrhu. Je to jako mít v dílně pět kladiv, která vypadají úplně stejně, ale každé zatlouká jiný typ hřebíku podle toho, jak ho uchopíte.</p>

<p>Vývojář pak musí neustále hádat, která verze metody se vlastně zavolá. Vytváří to kognitivní zátěž a prostor pro chyby, které se hledají velmi špatně. Mnohem čistší je mít metody s jasným, unikátním názvem, které přesně popisují, co dělají. Explicitní je vždy lepší než implicitní.</p>

<h2>Výhody a nevýhody OOP v kostce</h2>

<p>Abychom byli fér, podívejme se na OOP bez emocí:</p>

<h3>Výhody:</h3>

<ul>
<li><strong>Modularita:</strong> Pokud je systém dobře navržen (skrze kompozici), dají se jeho části snadno vyměňovat.</li>
<li><strong>Udržitelnost u komplexních systémů:</strong> U velkých projektů pomáhá polymorfismus udržet chaos na uzdě.</li>
<li><strong>Modelování domény:</strong> Objekty mohou dobře mapovat reálné byznysové entity.</li>
</ul>

<h3>Nevýhody:</h3>

<ul>
<li><strong>Boilerplate:</strong> OOP vyžaduje spoustu „kódu kolem“, než se dostanete k samotné logice.</li>
<li><strong>Výkonnostní režie:</strong> Abstrakce a dynamický dispatch něco stojí (i když v moderním byznysu je čas vývojáře často dražší než čas CPU).</li>
<li><strong>Problém „Gorila a banán“:</strong> Chcete banán, ale dostanete ho i s gorilou, která ho drží, a celou džunglí k tomu (typický problém špatné dědičnosti).</li>
</ul>

<h2>Závěr</h2>

<p>Jsem řemeslník, ne designér na vernisáži. Mým cílem je dodat funkční produkt, který přežije i mého nástupce. OOP je skvělý sluha, pokud si uvědomíme, že jeho síla je v polymorfismu a kompozici, nikoliv v nekonečných hierarchiích a statických pomocnících. Používejte objekty tam, kde dávají smysl, a tam, kde ne, se nebojte být pragmatičtí. Jinak se ukáže, že je to taky hodně zlý pán. Skutečná profesionalita totiž není v následování příruček, ale v doručování hodnoty.</p>
