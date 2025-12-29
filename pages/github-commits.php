<h1>Příspěvky na Github</h1>


<h2><a href="https://github.com/zbynekrybicka/gnerate/commit/28a62d62a9f380219ff91872ceb11734ff462224" target="_blank">ganderzz/gnerate &ndash; Generování kódu napříč soubory má velký potenciál</a>
    <div class="activity-date">29. 12. 2025</div>
</h2>

<ul>
    <li>Kdysi jsem chtěl vytvořit generátor kompletní aplikace v <b>React+Redux+PHP+MySQL</b> tím, že veškerou programovou logiku bych umístil do konfiguračního souboru.</li>
    <li>Generátor vezme data z něj a rozmístí je do příslušných souborů, přičemž některá data propíše do více souborů a programátorovi je tudíž stačí napsat pouze jednou.</li>
    <li>Byla to ochrana proti chybám a výrazné zrychlení psaní dokola se opakujícího kódu.</li>
    <li>Sice většinu práce, kterou takový generátor dělal, zvládne dnes průměrně vybavený jazykový model, když se dobře nastaví. Jedna věc ale zůstává. Tento generátor nic neodhaduje a je tudíž maximálně přesný.</li>
</ul>
<p>
    <a href="https://github.com/zbynekrybicka/gnerate/commit/28a62d62a9f380219ff91872ceb11734ff462224" target="_blank" class="read-more-link">Více...</a>
</p>

<hr/>


<h2><a href="https://github.com/zbynekrybicka/gnerate/commit/d6d22e61b8f075b8fe4b498e19c57ee39b09f08e" target="_blank">ganderzz/gnerate &ndash; Při IF lépe testovat funkci, která přímo vrací boolean</a>
    <div class="activity-date">28. 12. 2025</div>
</h2>

<ul>
    <li><code>str.indexOf(substr) > -1</code> je fakticky méně bezpčné, jelikož je větší pravděpodobnost, že programátor udělá chybu než při zápisu <code>str.includes(substr)</code>, přestože oba zápisy se v tomto případě chovají zcela identicky.</li>
</ul>
<p>
    <a href="https://github.com/zbynekrybicka/gnerate/commit/d6d22e61b8f075b8fe4b498e19c57ee39b09f08e" target="_blank" class="read-more-link">Více...</a>
</p>

<hr/>

<h2><a href="https://github.com/zbynekrybicka/Selection-js/commit/a174eb2c989dd405e393ca20e9b8c04fdb024400" target="_blank">prateekkalra/Selection-js &ndash; DRY je velmi častá chyba</a>
    <div class="activity-date">27. 12. 2025</div>
</h2>

<ul>
    <li><b>DRY &ndash; Don't Repeat Yourself</b> je velmi často porušovaná zásada, která může způsobit hodně problémů. Není sice vytesaná do kamene a její porušení nemusí znamenat zkázu, ale jedná se o typické pravidlo, které porušit můžeme, ale musíme k tomu mít silný důvod. V tomto případě důvod není <em>(51-52, 279-286)</em>.</li>
    <li>Bylo možné <b>ušetřit volání funkcí</b>, jejichž výstup se následně zahodí <em>(180-181)</em></li>
    <li><code>array.forEach</code> provádí <b>asynchronní volání, které může být problémem</b>, pokud očekáváme na konci volání hotový výsledek. Je lépe použít <code>for</code> cyklus + je zbytečné počítat počet položek v poli, když máme atribut length nebo jeho obdobu <em>(184-190)</em>.
    <li>Měníme-li dynamicky nějakou <b>definici v CSS</b> a chceme vrátit defaultní hodnotu, nastavíme prázdný řetězec, ne hodnotu, která odpovídá té defaultní, protože nemusíme s jistotou přesnou defaultní hodnotu znát a současně v různých prohlížečích může být různá. <em>(328)</em>
</ul>
<p>
    <a href="https://github.com/zbynekrybicka/Selection-js/commit/a174eb2c989dd405e393ca20e9b8c04fdb024400" target="_blank" class="read-more-link">Více...</a>
</p>
