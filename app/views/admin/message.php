<?php require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="message">
                    <h1><?php echo $this->messageData["contact_subject"]; ?></h1>
                    <div class="message-menu">
                        <div class="message-menu-item">
                            <span>Kimden:</span> <?php echo $this->messageData["contact_name"]; ?>
                        </div>
                        <div class="message-menu-item">
                            <span>Tarih:</span> <?php echo $this->messageData["contact_date"]; ?>
                        </div>
                    </div>
                    <p><?php echo $this->messageData["contact_message"]; ?></p>
                    <div class="admin-buttons">
                        <a href="mailto:<?php echo $this->messageData["contact_email"]; ?>">Cevapla</a>
                        <a href="<?php echo BASE_URL."adminoperation/deletemessage?message_id=".$this->messageData["contact_id"]; ?>">Sil</a>
                    </div>
                </section>
            </section>
            <!-- SECTIONS END -->
        </main>
    </div>

    <script src="<?php echo BASE_URL; ?>public/admin/js/menuController.js"></script>
</body>
</html>