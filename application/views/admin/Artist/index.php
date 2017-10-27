 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-users"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <a class="btn btn-success" href="<?= base_url('Artists/new') ?>"><i class="fa fa-plus"></i> New Artist</a>
                <br />
                <br />
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Avatar</th>
                        <th>-</th>
                    </thead>
                    <tbody>
                        <?php foreach($Artists as $Artist) { ?>
                        <tr>
                            <td><?= $Artist->artist_id ?></td>
                            <td><?= $Artist->name ?></td>
                            <td><?= $Artist->avatar ?></td>
                            <td>
                                <a href="<?= base_url('Artists/read/' . $Artist->artist_id ) ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="<?= base_url('Artists/delete/' . $Artist->artist_id)  ?>" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>