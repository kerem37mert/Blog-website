<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="contact">
                <h1>Mesaj Gönder</h1>
                <form action="<?php echo BASE_URL ?>operation/sendmessage" method="POST">
                    <input type="text" name="subject" placeholder="Konu">
                    <input type="text" name="name" placeholder="Adınız">
                    <textarea name="message" placeholder="Mesajınız"></textarea>
                    <input type="email" name="email" placeholder="E-Posta">
                    <div style="text-align: center;">
                        <button type="submit">Gönder</button>
                    </div>
                    <?php if(isset($_GET["insert"]) && $_GET["insert"] == "success"): ?>
                    <div class="contact-success">Mesajınız başarıyla gönderildi.</div>
                    <?php elseif(isset($_GET["insert"]) && $_GET["insert"] == "false"): ?>
                    <div class="contact-false">Bir sorun oluştu lütfen daha sonra tekrar deneyiniz.</div>
                    <?php endif; ?>
                    <div class="contact-error"></div>
                </form>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
    <?php require_once "footer.php"; ?>