<div class="container">
    <!-- Outer Row -->
    <br>
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-5 col-md-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets'); ?>/img/admin_login.png" class="img-fluid" style="width: 250px;">
                                </div>
                                <div class="text-center">
                                    <br>
                                    <h1 class="h4 text-gray-900 mb-4"> <b>Login Page</b></h1>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <form action="<?= base_url('auth/proces_login'); ?>" method="POST" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" aria-describedby="username" required name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control  form-control-user" id="password" name="password" required placeholder="Password">
                                    </div>

                                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
                                    </input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>