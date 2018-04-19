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
                            
                            //$user = User::find_user_by_id(7);
                            $user->username = "wwoman";
                            $user->password = "amazon";
                            $user->first_name = "Princess";
                            $user->last_name = "Diana";
                            $user->save();
                            // $user->create();
                            //$user->update();
                            //$user->delete();

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