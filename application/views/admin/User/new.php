 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-user"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('Users/create', ['autocomplete' => 'off']) ?>
                    <div class="form-group">
                        <?= form_label("Name: ") ?>
                        <?= form_input(array("name" => "name", "id" => "name", "class" => "form-control")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Email: ") ?>
                        <?= form_input(array("name" => "email", "id" => "email", "class" => "form-control")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Password: ") ?>
                        <?= form_input(array("name" => "password", "id" => "password", "class" => "form-control", "type" => "password")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Avatar") ?>
                        <?= form_upload(array("type" => "file", "name" => "avatar")) ?>
                    </div>
                    <?= form_button(["name" => "btn_save", "id" => "btn_save", "type" => "submit", "content" => "<i class='fa fa-floppy-o'></i> Save", "class" => "btn btn-success"]) ?>
                    <a class="btn btn-danger" href="<?= base_url("Users") ?>"><i class="fa fa-times"></i> Cancelar</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>