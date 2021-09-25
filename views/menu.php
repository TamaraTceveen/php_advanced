<? if ($isAuth): ?>
Добро пожаловать <?=$username?>! <a href="/auth/logout/">[Exit]</a>
<? else: ?>
<form action="/auth/login/" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="text" name="pass" placeholder="password">
    <input type="submit" name="submit" value="Enter">
</form>
<? endif; ?><br>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/basket">Корзина(<span id="count"><?=$count?></span>)</a><br>