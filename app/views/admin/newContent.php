<?php echo require_once "header.php" ?>
            <!-- SECTIONS START -->
            <section class="admin-container">
                <section class="form-container">
                    <h1>Yeni Yazı</h1>
                    <div class="form-message-success">
                        İçerik başarıyla kaydedildi
                    </div>
                    <div class="form-message-error">
                        Bir sorun oluştu lütfen daha sonra tekrar deneyiniz
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label>Başlık</label>
                            <textarea></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="">
                                <option value="">Php</option>
                                <option value="">Javascript</option>
                                <option value="">Django</option>
                                <option value="">React</option>
                                <option value="">Ruby on Rails</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <textarea id="editor"></textarea>
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
