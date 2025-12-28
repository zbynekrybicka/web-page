<h1>Příspěvky na Github</h1>

<h2><a href="https://github.com/ganderzz/gnerate/commit/d6d22e61b8f075b8fe4b498e19c57ee39b09f08e" target="_blank">ganderzz/gnerate</a>
    <div class="activity-date">28. 12. 2025</div>
</h2>

<ul>
    <li><code>str.indexOf(substr) > -1</code> je fakticky méně bezpčné, jelikož je větší pravděpodobnost, že programátor udělá chybu než při zápisu <code>str.includes(substr)</code>, přestože oba zápisy se v tomto případě chovají zcela identicky.</li>
</ul>
<p>
    <a href="https://github.com/ganderzz/gnerate/commit/d6d22e61b8f075b8fe4b498e19c57ee39b09f08e" target="_blank" class="read-more-link">Více...</a>
</p>

<hr/>

<h2><a href="https://github.com/zbynekrybicka/Selection-js/commit/a174eb2c989dd405e393ca20e9b8c04fdb024400" target="_blank">prateekkalra/Selection-js &ndash; DRY je velmi častá chyba</a>
    <div class="activity-date">27. 12. 2025</div>
</h2>

<ul>
    <li>DRY &ndash; Don't Repeat Yourself je velmi často porušovaná zásada, která může způsobit hodně problémů. Není sice vytesaná do kamene a její porušení nemusí znamenat zkázu, ale jedná se o typické pravidlo, které porušit můžeme, ale musíme k tomu mít silný důvod. V tomto případě důvod není <em>(51-52, 279-286)</em>.</li>
    <li>Bylo možné ušetřit volání funkcí, jejichž výstup se následně zahodí <em>(180-181)</em></li>
    <li><code>array.forEach</code> provádí asynchronní volání, které může být problémem, pokud očekáváme na konci volání hotový výsledek. Je lépe použít <code>for</code> cyklus + je zbytečné počítat počet položek v poli, když máme atribut length nebo jeho obdobu <em>(184-190)</em>.
    <li>Měníme-li dynamicky nějakou definici v CSS a chceme vrátit defaultní hodnotu, nastavíme prázdný řetězec, ne hodnotu, která odpovídá té defaultní, protože nemusíme s jistotou přesnou defaultní hodnotu znát a současně v různých prohlížečích může být různá. <em>(328)</em>
<p>
    <a href="https://github.com/zbynekrybicka/Selection-js/commit/a174eb2c989dd405e393ca20e9b8c04fdb024400" target="_blank" class="read-more-link">Více...</a>
</p>
