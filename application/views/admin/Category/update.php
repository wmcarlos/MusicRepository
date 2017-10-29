 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-th-large"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('Categories/update/' . $category->category_id,['autocomplete' => 'off']) ?>
                    <div class="form-group">
                        <?= form_label("Name: ") ?>
                        <?= form_input(array("name" => "name", "id" => "name", "class" => "form-control", "value" => $category->name)) ?>
                    </div>
                    <?= form_button(["name" => "btn_save", "id" => "btn_save", "type" => "submit", "content" => "<i class='fa fa-floppy-o'></i> Save", "class" => "btn btn-success"]) ?>
                    <a class="btn btn-danger" href="<?= base_url("Categories") ?>"><i class="fa fa-times"></i> Cancelar</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>