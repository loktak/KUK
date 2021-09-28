<?php if ($page === 'index') : ?>
    <li class="assortment__list-elmt <?= ($paints === 'metallic-effect') ? '' : 'visually-hidden php-open' ?>">
    <?php else : ?>
    <li class="assortment__list-elmt assortment__list-elmt--inner">
    <?php endif ?>

    <header class="assortment__elmt-header">
        <h3 class="assortment__elmt-tile">Порошковые краски с эффектом «металлик»</h3>
    </header>
    <div class="assortment__elmt-body">
        <p class="assortment__elmt-text">Краски с металлическими пигментами или пигментами на основе слюды.
            Возможно получить покрытия «под хром», «под золото», «под бронзу», «под анодирование»
            и другие эффекты.</p>
        <p class="assortment__elmt-text">«Металликами» окрашивают изделия для создания высокодекоративных покрытий.</p>
        <ul class="assortment__inner-list">
            <li class="assortment__inner-elmt">
                мебель, двери, фурнитура
            </li>
            <li class="assortment__inner-elmt">
                решетки, обрамления, кронштейны
            </li>
            <li class="assortment__inner-elmt">
                архитектурные элементы
            </li>
            <li class="assortment__inner-elmt">
                интерьерные элементы
            </li>
            <li class="assortment__inner-elmt">
                диски автомобильных колес
            </li>
        </ul>
    </div>


    <a class="assortment__price-link" href="#" onclick="showForm('Получить прайс-лист', 'Получить', 'Заявка на получение прайс-листа. <?=($page === 'index') ? 'c главной страницы' : 'со страницы «'. $title .'»' ?>. Блок&#160;&#8209;&#160;Порошковые краски с эффектом «металлик»'); return false;">Получить
        прайс-лист</a>
</li>