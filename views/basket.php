<h2>Корзина</h2>
<?php if (!empty($basket)): ?>
<div class="box">

    <?php foreach($basket as $goods):?>
    <div class="goods">
            <a href="/?c=product&a=card&id=<?=$goods['prod_id']?>" class="goods_link">
            <img src="<?=IMG_SMALL . $goods['image']?>">
            <?=$goods['name']?>
            </a>
            Цена: <?=$goods['price']?>
            <a href="#">Удалить</a>
        </div>
    <?endforeach;?>  
    </div>
    <br>
    <h3>ИТОГО <?=$summ?> рублей</h3>
    <br>
    <?php else: ?>
    Корзина пуста
<?php endif; ?>
    <?php if(!is_string($message)): ?>
    Оформите заказ:
    <form action="?action=order" method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="phone" placeholder="Телефон">
        <input type="submit" value="Оформить заказ">
    </form>
    <?php else:?>
    <h2><?=$message?></h2>
    <?php endif;?>
