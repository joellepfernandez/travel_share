            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        
                            //$user = new User();
                            //$user = User::find_user_by_id(7);
                            $users = User::find_all();
                            foreach($users as $user){
                                echo $user->username;
                            }
                            //$user->username = "wwoman";
                            //$user->password = "amazon";
                            //$user->first_name = "Princess";
                            //$user->last_name = "Diana";
                            //$user->save();
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