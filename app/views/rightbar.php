    <aside class="right-bar">
        <section class="search-bar">
            <form action="" method="GET">
                <input type="search" name="s" placeholder="Ara...">
            </form>
        </section>
        <section class="vertical-menu">
            <h3 class="menu-title">Rastgele İçerikler</h3>
            <ul>
                <?php foreach($this->randomContents as $randomContent): ?>
                <li>
                    <a href="<?php echo BASE_URL."content/".$randomContent->content_url; ?>"><?php echo $randomContent->content_title ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="vertical-menu">
            <h3 class="menu-title">Son İçerikler</h3>
            <ul>
               <?php foreach($this->lastContents as $lastContent): ?>
                <li>
                    <a href="<?php echo BASE_URL."/content/".$lastContent->content_url; ?>"><?php echo $lastContent->content_title; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </aside>