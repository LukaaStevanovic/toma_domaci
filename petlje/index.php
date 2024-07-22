<?php

    $stranice = ["Glavna" => "index.php", "O nama" => "about_us", "Kontakt"=> "contact.php"];
?>

<!doctype html>
<html lang="en">

    <body>
        <?php foreach ($stranice as $stranica => $adresa): ?>
                <a href="<?=$adresa?>"><?= $stranica?></a>
        <?php endforeach; ?>
    </body>

</html>
