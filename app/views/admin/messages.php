<?php require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="messages">
                    <h1>Gelen Kutusu</h1>
                    <?php if(isset($_GET["status"]) && $_GET["status"] == "true"): ?>
                        <div class="form-message-success">
                            Mesaj silindi
                        </div>
                    <?php endif; ?>
                    <?php if(empty($this->messagesData)): ?>
                        <div class="messages-container">
                            <span class="m-err">Hiç mesajın yok :(</span>
                        </div>
                    <?php else: ?>
                    <?php foreach ($this->messagesData as $message): ?>
                    <div class="messages-container">
                        <a href="<?php echo BASE_URL."admin/message/".$message->contact_id; ?>">
                            <span>Konu: <?php echo $message->contact_subject; ?></span>
                            <span>Tarih: <?php echo $message->contact_date; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </section>
            </section>
            <!-- SECTIONS END -->
        </main>
    </div>

    <script src="<?php echo BASE_URL; ?>public/admin/js/menuController.js"></script>
</body>
</html>