<div class="container">
    <?php if($isError): displayErrors(); endif;?>
    <h1 class="align-center">formularz rejetrsacji uzytkownika</h1>
</div>
<div class="form">
    <form method="post">
        <div class="mb-4">
            <label class="form-label" for="name">Imie:</label>
            <input id="name" class="form-control" type="text" name="name" placeholder="Imię" value="<?php if(isset($_POST['name']) && $isError): echo $_POST['name']; endif; ?>" require>
        </div>
        <div class="mb-4">
            <label class="form-label" for="surname">Nazwisko:</label>
            <input id="surname"  class="form-control" type="text" name="surname" placeholder="Nazwisko" value="<?php if(isset($_POST['surname']) && $isError): echo $_POST['surname']; endif; ?>" require/>
        </div>
        <div class="mb-4">
            <label class="form-label" for="email">E-mail:</label>
            <input id="email"  class="form-control" type="email" name="email" placeholder="Adres E-mail" value="<?php if(isset($_POST['email']) && $isError): echo $_POST['email']; endif; ?>" require>
        </div>
        <div class="mb-4">
            <label class="form-label" for="password">Haslo:</label>
            <input id="password"  class="form-control" type="password" name="password" placeholder="Hasło" require />
        </div>                        
        <div class="mb-4">
            <label class="form-label" for="password2">Powtorz haslo:</label>
            <input id="password2"   class="form-control" type="password" name="password2" placeholder="Powtórz hasło" require />
        </div>
        <dvi class="mb-4 d-flex justify-content-end">
            <button class="btn btn-success" type="submit" name="submit">Wyślij</button>
        </div>
    </form>
</div>