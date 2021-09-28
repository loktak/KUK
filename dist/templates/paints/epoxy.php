<?php if ($page === 'index') : ?>
    <li class="assortment__list-elmt <?= ($paints === 'epoxy') ? 'php-open' : 'visually-hidden' ?>">
    <?php else : ?>
    <li class="assortment__list-elmt assortment__list-elmt--inner">
    <?php endif ?>

    <header class="assortment__elmt-header">
        <h3 class="assortment__elmt-tile">Эпоксидные порошковые краски</h3>
    </header>
    <div class="assortment__elmt-body">
        <p class="assortment__elmt-text">Используются для окраски изделий, эксплуатирующихся внутри
            помещений, особенно в случае, если
            требуется более высокая коррозионная стойкость и стойкость покрытия к воздействию
            химических
            реагентов.</p>
        <p class="assortment__elmt-text">Также некоторые декоративные эффекты могут быть достигнуты
            только с помощью таких материалов.</p>
    </div>
    <a class="assortment__price-link" href="#" onclick="showForm('Получить прайс-лист', 'Получить', 'Заявка на получение прайс-листа. <?=($page === 'index') ? 'c главной страницы' : 'со страницы «'. $title .'»' ?>. Блок — Эпоксидные порошковые краски'); return false;">Получить
        прайс-лист</a>
</li>