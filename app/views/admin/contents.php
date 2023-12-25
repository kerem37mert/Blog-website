<?php require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="contents">
                    <h1>Yazılar</h1>
                    <?php if(isset($_GET["status"]) && $_GET["status"] == "true"): ?>
                        <div class="form-message-success">
                            İçerik silindi
                        </div>
                    <?php endif; ?>
                    <?php foreach($this->contentsData as $content): ?>
                    <article class="content-container">
                        <a href="<?php echo BASE_URL."admin/content/".$content->content_url; ?>"><?php echo $content->content_title; ?></a>
                        <p><?php echo $content->content_desc; ?></p>
                    </article>
                    <?php endforeach; ?>
                </section>
            </section>
            <!-- SECTIONS END -->
        </main>
    </div>

    <script src="<?php echo BASE_URL; ?>public/admin/js/menuController.js"></script>
</body>
</html>