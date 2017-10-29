<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url('Users/dashboard') ?>">Music Repository</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('name') ?> (<?= $this->session->userdata('role') ?>) <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url('Users/profile')  ?>"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('Users/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>

                        <?php if( $this->session->userdata('role') == "administrator" ){ ?>

                            <li>
                                <a href="<?= base_url("Users/dashboard") ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Categories') ?>"><i class="fa fa-th-large fa-fw"></i> Category</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Artists') ?>"><i class="fa fa-users fa-fw"></i> Artist</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Sounds') ?>"><i class="fa fa-music fa-fw"></i> Sound</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Users') ?>"><i class="fa fa-user fa-fw"></i> User</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Configurations') ?>"><i class="fa fa-cog fa-fw"></i> Configuration</a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>