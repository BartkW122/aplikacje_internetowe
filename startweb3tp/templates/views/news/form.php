<?php
    $formAction = "index.php?page=news&action=";
    $formAction .= isset($_GET['id']) ? 'edit&id=' . $_GET['id'] : 'add';
   /* if (isset($dbStatus['status']))
    {
        showMessage($dbStatus['status'], $dbStatus['msg']);
    }
    */
?>
<div class="container">
    <?php if ($isError): displayErrors(); endif; ?>
    <h1 class="align-center">Formularz dodawania użytkownika</h1>
    <div class="form">
        <form action="<?php echo $formAction; ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-4">
                <label class="form-label" for="plik">Obrazek</label>
                <input id="plik" class="form-control" type="file" name="plik" placeholder="Plik" value="<?php if(isset($form['plik'])): echo $form['plik'];  endif;?>" require>
            </div>

            <div class="mb-4">
                <label class="form-label" for="name">tytuł</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Tytuł" value="<?php if(isset($form['name'])): echo $form['name'];  endif;?>" require>
            </div>

            <div class="mb-4">
                <label class="form-label" for="autor">Autor</label>
                <input class="form-control" type="text" name="autor" placeholder="Autor" value="<?php if(isset($form['autor'])): echo $form['autor'];  endif;?>" require/>
            </div>
           
            <div class="mb-4">
                <label class="form-label" for="tresc">Treść</label>
                <input id="tresc" class="tresc" type="textarea" name="tresc" <?php if(isset($form['tresc'])): echo $form['tresc'];  endif; ?> />
            </div>    

            <div class="mb-4">
                <div class="form-check">
                    <label class="form-check-label" for="checkActive">Aktywność</label>
                    <input id="checkActive" class="form-check-input" type="checkbox" name="active" <?php if(isset($form['active']) && $form['active'] == 1): echo 'checked'; endif; ?> />
                </div> 
            </div>

            <div class="mb-4 d-flex justify-content-end">
                <a class="btn btn-warning" href="<?php echo BASE_URL; ?>">Powrót</a>&nbsp;&nbsp;
                <button class="btn btn-success" type="submit" name="submit">Wyślij</button>
            </div>

        </form>
    </div>    
</div>