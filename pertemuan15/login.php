<?php
include './components/header.php';
?>

<body class="bg-gradient-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 py-3">
                                <div class="text-center h3">Login</div>
                                <div class="px-5 py-2">
                                    <form class="user" method="post" action="process/login_process.php">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="email" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>