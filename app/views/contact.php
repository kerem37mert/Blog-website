<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="contact">
                <h1>Mesaj Gönder</h1>
                <form action="" method="POST">
                    <input type="text" name="subject" placeholder="Konu">
                    <input type="text" name="name" placeholder="Adınız">
                    <textarea name="messgae" placeholder="Mesajınız"></textarea>
                    <input type="email" name="email" placeholder="E-Posta">
                    <div style="text-align: center;">
                        <button type="submit">Gönder</button>
                    </div>
                    <div class="contact-error"></div>
                </form>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
    <?php require_once "footer.php"; ?>