<?php ob_start(); ?>
<div class="container">
    <div class="alert alert-warning">
        <?php if (null !== $this->session->get('error')) {
            echo $this->session->showFlashMessage('error');
        } ?>
    </div>

    <form action="?page=client&action=read" method="POST">
        <div class="row">
            <div class="form-group col">
                <label>Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group col">
                <label>Mot de passe</label>
                <input type="text" class="form-control" name="password">
            </div>
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
    <a href="?page=client&action=create">S'inscrire</a>
</div>
<?php
$body = ob_get_clean();
require "template.php"
?>