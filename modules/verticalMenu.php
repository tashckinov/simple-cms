<nav id="menuVertical">
    <ul>
        <?php
        require_once "config.php";
        $sql = "SELECT * FROM `l_menu`";

        $items = array();

        $result = $db->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $items[] = $row;
        }

        foreach ($items as $item) {
            $id = $item['id'];
            $menuname = $item['name'];
            $href = $item['href'];
//            echo "$id";


            $sql = "SELECT COUNT(*) FROM `l_menu_sub` WHERE `sub_id`=$id";
            $result = $db->query($sql);
            $row = mysqli_fetch_row($result);
            $total = $row[0]; // всего записей
//            echo $total;
            if ($total == 0) {
                echo "<li><a href='$href'>$menuname</a></li>";
            } else {
                $sql = "SELECT * FROM `l_menu_sub` WHERE `sub_id`=$id";
                $result = $db->query($sql);
                echo "<li><a>$menuname</a><ul>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $subname = $row['name'];
                    $href = $row['href'];
                    echo "<li><a href='$href'>$subname</a></li>";
                }
                echo "</ul></li>";
            }

        }
        ?>
    </ul>
    <a href="https://minsport.donland.ru">
        <img src="http://rostovedu.ru/news2018/3х6м%201.jpg" alt="">
    </a>
    <a href="http://politek1.ucoz.ru/new_style/fail/1sambekskie_vysoty.pdf">
        <img src="http://sambek-museum.ru/wp-content/uploads/2016/08/og_image-1-768x403.jpg" alt="">
    </a>
    <img src="http://politek1.ucoz.ru/new_style/telefon_doveriya.png" alt="">
    <a href="http://politek1.ucoz.ru/2013/document/loc_akt/bezopas_marshrut.pdf">
        <img src="http://politek1.ucoz.ru/new_style/plan111.jpg" alt="">
    </a>
    <img src="http://politek1.ucoz.ru/avatar/bezopasnost.png" alt="">
    <a href="https://sh-open.ris61edu.ru/auth/login-page">
        <img src="http://politek1.ucoz.ru/new_style/ais.png" alt="">
    </a>
    <a href="http://rosatomschool.ru">
        <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=192x1024:format=png/path/s99b67e6035b6b384/image/i19f4556f6f78129e/version/1475411051/image.png"
             alt="">
    </a>
    <a href="http://teacher19.ru/itogi-ii-vserossiieskogo-konkursa-obrazovatelnix-saietov-po-versii-imop-evolyuciya.html">
        <img src="http://teacher19.ru/docs/2winall.png" alt="">
    </a>
</nav>