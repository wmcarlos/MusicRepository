<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Music Repository - <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?= base_url('assets/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/local/css/sb-admin-2.css') ?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?= form_open("Users/auth",["role" => "form", "autocomplete" => "off"]) ?>
                            <fieldset>
                                <div class="form-group">
                                    <?= form_input(["name" => "email", "placeholder" => "E-mail", "type" => "email", "class" => "form-control", "autofocus" => "autofocus"]) ?>
                                </div>
                                <div class="form-group">
                                    <?= form_input(["name" => "password", "placeholder" => "Password", "type" => "password", "class" => "form-control"]) ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?= form_checkbox(['name' => 'remember', 'value' => 'remember']) ?> Remember Me
                                    </label>
                                </div>
                                <?= form_button(['name' => 'btn_login', 'type' => 'submit', 'content' => 'Login', 'class' => 'btn btn-lg btn-success btn-block']) ?>
                            </fieldset>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/local/js/sb-admin-2.js') ?>"></script>
</body>
</html>