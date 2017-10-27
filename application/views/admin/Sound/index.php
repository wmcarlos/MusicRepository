 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-music"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <a class="btn btn-success" href="<?= base_url('Sounds/new') ?>"><i class="fa fa-plus"></i> New Sound</a>
                <br />
                <br />
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Size</th>
                        <th>-</th>
                    </thead>
                    <tbody>
                        <?php foreach($Sounds as $Sound) { ?>
                        <tr>
                            <td><?= $Sound->Sound_id ?></td>
                            <td><?= $Sound->category_id ?></td>
                            <td><?= $Sound->title ?></td>
                            <td><?= $Sound->duration ?></td>
                            <td><?= $Sound->size ?></td>
                            <td>
                                <a href="<?= base_url('Sounds/read/' . $Sound->Sound_id ) ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="<?= base_url('Sounds/delete/' . $Sound->Sound_id)  ?>" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>