<?php require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="shortcuts">
                    <div>
                        <a href="<?php echo BASE_URL; ?>admin/newcontent">Yeni Yazı</a>
                    </div>
                    <div>
                        <a href="<?php echo BASE_URL."admin/content/".$this->lastContentUrl; ?>">Son Yazım</a>
                    </div>
                </section>
                <section class="shortcuts">
                    <div>
                        <a href="<?php echo BASE_URL; ?>admin/messages">Mesajlar</a>
                    </div>
                    <div>
                        <a href="<?php echo BASE_URL; ?>admin/settings">Ayarlar</a>
                    </div>
                </section>
                <section class="big-section">
                    <h1>Öne Çıkan İçerikler</h1>
                    <?php if(isset($_GET["status"]) && $_GET["status"] == "true"): ?>
                        <div class="form-message-success">
                            İçerik başarıyla kaydedildi
                        </div>
                    <?php endif; ?>
                    <section class="big-contents">
                        <?php foreach($this->bigContentsData as $content): ?>
                        <div class="big-item">
                            <img src="<?php echo BASE_URL."public/images/highlights/".$content->content_img; ?>" alt="<?php echo $content->content_name; ?>">
                            <form action="<?php echo BASE_URL."adminoperation/updatehighlights" ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Resim (300*300px)</label>
                                    <input name="content_img" type="file">
                                </div>
                                <div class="form-group">
                                    <label>İçerik İsmi</label>
                                    <input name="content_name" type="text" value="<?php echo $content->content_name; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input name="content_url" type="text" value="<?php echo $content->content_url; ?>">
                                </div>
                                <input type="hidden" name="content_id" value="<?php echo $content->content_id; ?>">
                                <div class="form-button">
                                    <input type="submit" value="Kaydet">
                                </div>
                            </form>
                        </div>
                        <?php endforeach; ?>
                    </section>
                </section>
            </section>
            <!-- SECTIONS END -->
        </main>
    </div>

    <script src="<?php echo BASE_URL; ?>public/admin/js/menuController.js"></script>
</body>
</html>