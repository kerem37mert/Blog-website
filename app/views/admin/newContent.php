<?php echo require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="form-container">
                    <h1>Yeni Yazı</h1>
                    <?php if(isset($_GET["status"]) && $_GET["status"] == "true"): ?>
                    <div class="form-message-success">
                        İçerik başarıyla kaydedildi
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo BASE_URL ?>adminoperation/addcontent" method="POST">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="content_title" required>
                        </div>
                        <div class="form-group">
                            <label>Açıklama</label>
                            <textarea name="content_desc" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="content_maincontent" id="editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input name="content_url" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <input name="content_keywords" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Yazar</label>
                            <input name="content_author" type="text" required>
                        </div>
                        <div class="form-button">
                            <input type="submit" value="Kaydet">
                        </div>
                    </form>
                </section>
            </section>
            <!-- SECTIONS END -->
        </main>
    </div>

    <script src="js/menuController.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>
