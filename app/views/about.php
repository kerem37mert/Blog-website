<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="about">
                <h1><?php echo $this->aboutTitle; ?></h1>
                <p><?php echo $this->aboutContent; ?></p>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
    <?php require_once "footer.php"; ?>
<?php