<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/registrations/registration-12/assets/css/registration-12.css">
</head>

<body>
    <!-- Registration 12 - Bootstrap Brain Component -->
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <h6 class="display-5 fw-bold text-center">Sign up</h6>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row gy-5 justify-content-center">
                        <div class="col-12 col-lg-5">
                            <form action="./signup-qry.php" method="POST" class="">
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                        <label for="email" class="form-label">Name</label>
                                            <input type="text" class="form-control border-0 border-bottom border-success rounded-0" name="name" placeholder="Enter Name..." required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                        <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control border-0 border-bottom border-success rounded-0" placeholder="name@example.com" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                        <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control border-0 border-bottom border-success rounded-0" name="password" id="password" value="" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                        <label  class="form-label">Mobile No</label>
                                            <input type="text" class="form-control border-0 border-bottom border-success rounded-0" name="mobile" placeholder="Enter Here..." required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                        <label  class="form-label">Address</label>
                                            <input type="text" class="form-control border-0 border-bottom border-success rounded-0" name="address" placeholder="Enter Here..." required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-lg btn-success rounded-2 fs-6" name="submit" type="submit">Sign up</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="">
                                            <h5 class="ms-5" type="submit">Already have an <a href="./login.php">Account</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>




                    </div>
                </div>
            </div>
</body>

</html>