 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-user"></i> <?= $title ?></h1>
            </div>
            <div class="panel-body">
                <a class="btn btn-success" href="<?= base_url('Users/new') ?>"><i class="fa fa-plus"></i> New User</a>
                <br />
                <br />
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>-</th>
                    </thead>
                    <tbody>
                        <?php foreach($Users as $User) { ?>
                        <tr>
                            <td><?= $User->user_id ?></td>
                            <td><?= $User->name ?></td>
                            <td><?= $User->email ?></td>
                            <td><?= $User->avatar ?></td>
                            <td>
                                <a href="<?= base_url('Users/read/' . $User->user_id ) ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="<?= base_url('Users/delete/' . $User->user_id)  ?>" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>