<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="big-contents">
                <article class="big-content">
                    <img src="<?php echo BASE_URL ?>public/images/1.png" alt="">
                    <a class="big-content-link" href="">Git</a>
                </article>
                <article class="big-content">
                    <img src="<?php echo BASE_URL ?>public/images/1.png" alt="">
                    <a class="big-content-link" href="">Git</a>
                </article>
                <article class="big-content">
                    <img src="<?php echo BASE_URL ?>public/images/1.png" alt="">
                    <a class="big-content-link" href="">Git</a>
                </article>
            </section>
            <section class="home-contents">
                <?php foreach ($this->contentsData as $contentData): ?>
                <article class="home-content">
                    <a href="<?php echo BASE_URL."content/".$contentData->content_url; ?>"><?php echo $contentData->content_title ?></a>
                    <p><?php echo $contentData->content_desc ?></p>
                </article>
                <?php endforeach; ?>
            </section>
            <section class="more-content">
                <a href="<?php echo BASE_URL; ?>contents">Daha fazla</a>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
<?php require_once "footer.php"; ?>