<?php ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label> Email:</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" 
                                                placeholder="Email Anda">
                                        </div>
                                        <div class="form-group">
                                            <label> Nama:</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" 
                                                placeholder="Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label> Tanggal Lahir:</label>
                                            <input type="date" class="form-control form-control-user"
                                                id="ttl" 
                                                placeholder="Tanggal lahir Anda">
                                        </div>
                                        <div class="form-group">
                                            <label> Jenis Kelamin:</label><br>
                                            <input type="radio" id="ttl"> Laki-Laki
                                            <input type="radio" id="ttl"> Perempuan
                                        </div>
                                        <div class="form-group">
                                            <label> Password:</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </a>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        Sudah punya akun ?, <a class="small" href="<?php echo base_url();?>login">Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php ?>
