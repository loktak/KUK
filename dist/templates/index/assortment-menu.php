<h2 class="assortment__title block-title <?= ($page !== 'index') ? 'vissually-hidden' : '' ?>"><?= $title ?></h2>
<ul class="assortment__navigation-menu">
    <li class="assortment__navigation-elmt">
        <a href="" class="assortment__navigation-link <?= ($paints === 'epoxy-polyester') ? 'assortment__navigation-link--current php-current-link' : '' ?>" onclick="openPaintSlide(0); document.location='#assortment-list';  return false;">Эпоксидно-полиэфирные порошковые краски</a>
    </li>
    <li class="assortment__navigation-elmt">
        <a href="" class="assortment__navigation-link <?= ($paints === 'epoxy') ? 'assortment__navigation-link--current php-current-link' : '' ?>" onclick="openPaintSlide(1); document.location='#assortment-list'; return false;">Эпоксидные порошковые краски</a>
    </li> 
    <li class="assortment__navigation-elmt">
        <a href="" class="assortment__navigation-link <?= ($paints === 'polyester') ? 'assortment__navigation-link--current php-current-link' : '' ?>" onclick="openPaintSlide(2); document.location='#assortment-list'; return false;">Полиэфирные
            порошковые краски</a>
    </li>
    <li class="assortment__navigation-elmt">
        <a href="" class="assortment__navigation-link <?= ($paints === 'metallic-effect') ? 'assortment__navigation-link--current php-current-link' : '' ?>" onclick="openPaintSlide(3); document.location='#assortment-list'; return false;">Порошковые краски с эффектом «металлик»</a>
    </li>
    <li class="assortment__navigation-elmt">
        <a href="" class="assortment__navigation-link <?= ($paints === 'polyurethane') ? 'assortment__navigation-link--current php-current-link' : '' ?>" onclick="openPaintSlide(4); document.location='#assortment-list';  return false;">Полиуретановые порошковые краски и лаки</a>
    </li>
</ul>

