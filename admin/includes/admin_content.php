            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        
                            $user = new User();
                            // $user->username = "example_username";
                            // $user->password = "example_password";
                            // $user->first_name = "John";
                            // $user->last_name = "Doe";
                            
                            // $user->create();
                            
                            //$user = User::find_user_by_id(4);
                            $user->username = "ck123";
                            $user->password = "martha";
                            $user->first_name = "Clark";
                            $user->last_name = "Kent";
                            // $user->save();
                            $user->create();

                        ?>
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>