<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-cog"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('Configurations/update', ['autocomplete' => 'off']) ?>
                    <div class="form-group">
                        <?= form_label("Title Site: ") ?>
                        <?= form_input(array("name" => "name", "id" => "name", "class" => "form-control", "value" => $Configuration->name)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Logo") ?>
                        <?= form_upload(array("type" => "file", "name" => "logo")) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Show Logo: ") ?>
                        <?php $showLogo = ($Configuration->show_logo == "Y") ? TRUE : FALSE; ?>
                        <div class="radio">
                            <label><?= form_radio(['type' => 'radio','name' => 'show_logo'],'N',TRUE) ?> No</label>
                            <label><?= form_radio(['type' => 'radio', 'name' => 'show_logo'],'Y', $showLogo) ?> Yes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= form_label("Contact: ") ?>
                        <?= form_textarea(['name' => 'contact', 'id' => 'contact', 'value' => $Configuration->contact]) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Terms and Conditions: ") ?>
                        <?= form_textarea(['name' => 'terms_and_conditions', 'id' => 'terms_and_conditions', 'value' => $Configuration->terms_and_conditions]) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Facebook Link: ") ?>
                        <?= form_input(array("name" => "facebook_link", "id" => "facebook_link", "class" => "form-control", "value" => $Configuration->facebook_link)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Twitter Link: ") ?>
                        <?= form_input(array("name" => "twitter_link", "id" => "twitter_link", "class" => "form-control","value" => $Configuration->twitter_link)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Google Plus Link: ") ?>
                        <?= form_input(array("name" => "google_plus_link", "id" => "google_plus_link", "class" => "form-control", "value" => $Configuration->google_plus_link)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Instagram Link: ") ?>
                        <?= form_input(array("name" => "instagram_link", "id" => "instagram_link", "class" => "form-control", "value" => $Configuration->instagram_link)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Google Play Link: ") ?>
                        <?= form_input(array("name" => "google_play_link", "id" => "google_play_link", "class" => "form-control", "value" => $Configuration->google_play_link)) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Apple Store Link: ") ?>
                        <?= form_input(array("name" => "apple_store_link", "id" => "apple_store_link", "class" => "form-control", "value" => $Configuration->apple_store_link)) ?>
                    </div>
                    <?= form_button(["name" => "btn_save", "id" => "btn_save", "type" => "submit", "content" => "<i class='fa fa-floppy-o'></i> Save", "class" => "btn btn-success"]) ?>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>