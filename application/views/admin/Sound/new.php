 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-music"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('Sounds/create', ['autocomplete' => 'off']) ?>
                    <div class="form-group">
                        <?= form_label("Category: ") ?>
                        <?= form_dropdown('category_id',$categories,'',['id' => 'category_id', 'class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Title: ") ?>
                        <?= form_input(array("name" => "title", "id" => "title", "class" => "form-control")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Artists: ") ?>
                        <?= form_dropdown('artists[]',$artists,'',['id' => 'artists_id', 'class' => 'form-control chosen-select', 'data-placeholder' => 'Select the Artists', 'multiple' => 'multiple']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Source Type: ") ?>
                        <div class="radio">
                            <label><?= form_radio(['type' => 'radio', 'name' => 'source_type'],'remote',true) ?> Remote</label>
                            <label><?= form_radio(['type' => 'radio','name' => 'source_type'],'local') ?> Local</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= form_label("Url: ") ?>
                        <?= form_input(array("name" => "url", "id" => "url", "class" => "form-control")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Letter: ") ?>
                        <?= form_textarea(['name' => 'letter', 'id' => 'summernote']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Duration: ") ?>
                        <?= form_input(array("name" => "duration", "id" => "duration", "class" => "form-control")) ?>
                    </div>
                    <?= form_button(["name" => "btn_save", "id" => "btn_save", "type" => "submit", "content" => "<i class='fa fa-floppy-o'></i> Save", "class" => "btn btn-success"]) ?>
                    <a class="btn btn-danger" href="<?= base_url("Sounds") ?>"><i class="fa fa-times"></i> Cancelar</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>