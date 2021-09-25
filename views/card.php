<h1 class="item_h1"><?=$good->name?></h1>
        <div class="item">
            <img src="<?=IMG_BIG . $good->image?>">
                <div class="item_descr">
                    <?=$good->description?>
                    <p> Цена <?=$good->price?> руб.</p>
                    <a href="/?action=buy&id=<?=$good->id?>">Купить</a>
                </div>
        </div>