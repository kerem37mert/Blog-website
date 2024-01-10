<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="content">
                <h1><?php echo $this->content_title; ?></h1>
                <p><?php echo $this->content_maincontent ?></p>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
<?php require_once "footer.php"; ?>