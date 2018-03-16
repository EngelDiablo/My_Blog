<h1 class="mt-5">Добавить новую статью</h1>

        <form action=" /web/create.php" method="post">
            <label for="name-field">Название:</label></br>
            <input type="text" name="login" id="name-field"  aria-describedby="titleHelp" placeholder="Введите название..."></br>

            <label for="comment-field">Содержание:</label></br>
            <textarea name="comment" id="comment-field" rows="10" cols="150" placeholder="Содержание..."></textarea></br>

            <script type="text/javascript">
				document.write('<input type="submit" class="submit" onclick="return save(\'preview\');" name="preview" value="Предпросмотр" id="preview" />');
				</script>
				<input type="submit" class="submit" onclick="return save('draft_save');" name="draft_save" style="width:170px" value="Сохранить черновик" id="draft_save" title="Сохранить черновик" /></br>