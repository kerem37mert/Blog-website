<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="big-contents">
                <?php foreach($this->highlightsData as $hData): ?>
                <article class="big-content">
                    <img src="<?php echo BASE_URL ?>public/images/highlights/<?php echo $hData->content_img; ?>" alt="<?php echo $hData->content_name; ?>">
                    <a class="big-content-link" href="<?php echo $hData->content_url; ?>">Git</a>
                </article>
                <?php endforeach; ?>
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