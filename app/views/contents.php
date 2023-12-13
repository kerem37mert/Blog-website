<?php require_once "header.php"; ?>
    <main>
        <section class="contents">
            <section class="all-contents">
                <?php foreach($this->contentsData as $content): ?>
                <article class="content-item">
                    <a href="<?php echo BASE_URL."content/".$content->content_url; ?>"><?php echo $content->content_title; ?></a>
                    <p><?php echo $content->content_desc; ?></p>
                </article>
                <?php endforeach; ?>
            </section>
            <section class="pagination">
                <?php if($this->page != 1 && $this->page !=2): ?>
                <a class="item" href="<?php echo BASE_URL."contents?page=1"; ?>">İlk</a>
                <?php endif; ?>
                <?php if($this->page != 1): ?>
                    <a class="item" href="<?php echo BASE_URL."contents?page=".$this->page-1; ?>"><</a>
                <?php endif; ?>
                <?php if($this->page != 1): ?>
                    <a class="item" href="<?php echo BASE_URL."contents?page=".$this->page-1; ?>"><?php echo $this->page-1 ?></a>
                <?php endif; ?>
                <?php if($this->totalPage != 1): ?>
                    <a class="item active" href="javascript:void(0);"><?php echo $this->page ?></a>
                <?php endif; ?>
                <?php if($this->page != $this->totalPage): ?>
                    <a class="item" href="<?php echo BASE_URL."contents?page=".$this->page+1; ?>"><?php echo $this->page+1 ?></a>
                <?php endif; ?>
                <?php if($this->page != $this->totalPage): ?>
                    <a class="item" href="<?php echo BASE_URL."contents?page=".$this->page+1; ?>">></a>
                <?php endif; ?>
                <?php if($this->page != $this->totalPage && $this->page != $this->totalPage-1): ?>
                    <a class="item" href="<?php echo BASE_URL."contents?page=".$this->totalPage; ?>">Son</a>
                <?php endif; ?>
            </section>
        </section>
        <!-- Right Bar Start -->
        <?php require_once "rightbar.php"; ?>
        <!-- Right Bar END -->
    </main>
    <?php require_once "footer.php"; ?>