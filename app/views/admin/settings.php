<?php require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="form-container">
                    <h1>Site Ayarları</h1>
                    <?php if(isset($_GET["status"]) && $_GET["status"] == "true"): ?>
                    <div class="form-message-success">
                        Ayarlar başarıyla kaydedildi
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo BASE_URL ?>adminoperation/updatesettings" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Site Başlığı</label>
                            <input type="text" name="webinfo_title" value="<?php echo $this->settingsData["webinfo_title"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Site Açıklaması</label>
                            <textarea name="webinfo_description" required><?php echo $this->settingsData["webinfo_description"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Site İkonu</label>
                            <input type="file" name="webinfo_favicon">
                        </div>
                        <div class="form-group">
                            <label>Site Anahtar Kelimeleri</label>
                            <input type="text" name="webinfo_keywords" value="<?php echo $this->settingsData["webinfo_keywords"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Site Sahibi</label>
                            <input type="text" name="webinfo_owner" value="<?php echo $this->settingsData["webinfo_owner"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Site İsmi</label>
                            <input type="text" name="webinfo_sitename" value="<?php echo $this->settingsData["webinfo_sitename"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Github Linki</label>
                            <input name="webinfo_github" type="text" value="<?php echo $this->settingsData["webinfo_github"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Linkedin Linki</label>
                            <input name="webinfo_linkedin" type="text" value="<?php echo $this->settingsData["webinfo_linkedin"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>X Linki</label>
                            <input name="webinfo_x" type="text" value="<?php echo $this->settingsData["webinfo_x"]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Instagram Linki</label>
                            <input name="webinfo_instagram" type="text" value="<?php echo $this->settingsData["webinfo_instagram"]; ?>" required>
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
    <script src="<?php echo BASE_URL; ?>public/admin/js/menuController.js"></script>
</body>
</html>
