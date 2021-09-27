<h1>Каталог</h1>
    <div class="box">
    <?php foreach($catalog as $goods):?>
        <div class="goods">
            <a href="/product/card/?id=<?=$goods['id']?>" class="goods_link">
            <img src="<?=IMG_SMALL . $goods['image']?>">
            <?=$goods['name']?>
            </a>
            Просмотров: <?=$goods['view']?>
            <p>price: <?=$goods['price']?></p>

            <button data-id="<?=$goods['id']?>" class="buy">Купить</button>

        </div>
    <?endforeach;?>
    </div>
<a href="/product/catalog/?page=<?=$page?>">Еще</a>

<script>
    let buttons = document.querySelectorAll('.buy');
    
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/add', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json;charset=utf-8'},
                        body: JSON.stringify({
                            id: id
                        })
                    });
                    const answer = await response.json();
                  
                    document.getElementById('count').innerText = answer.count;
                }
            )();
        })
    });
</script>