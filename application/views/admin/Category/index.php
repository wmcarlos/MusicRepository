 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-th-large"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <a class="btn btn-success" href="<?= base_url('Categories/new') ?>"><i class="fa fa-plus"></i> New Category</a>
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
                        <?php foreach($categories as $category) { ?>
                        <tr>
                            <td><?= $category->category_id ?></td>
                            <td><?= $category->name ?></td>
                            <td><?= $category->avatar ?></td>
                            <td>
                                <a href="<?= base_url('Categories/read/' . $category->category_id ) ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="<?= base_url('Categories/delete/' . $category->category_id)  ?>" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>