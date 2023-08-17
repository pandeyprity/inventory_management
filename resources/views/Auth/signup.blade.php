<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <!-- Section: Design Block -->
        <section class="text-center text-lg-start">
            <style>
                .cascading-right {
                    margin-right: -50px;
                }

                @media (max-width: 991.98px) {
                    .cascading-right {
                        margin-right: 0;
                    }
                }

                label {
                    color: #333;
                }
            </style>

            <!-- Jumbotron -->
            <div class="container py-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card cascading-right"
                            style="background: linear-gradient(45deg, rgba(237, 119, 36, 0.85), rgba(219, 54, 58, 0.85)); backdrop-filter: blur(10px);">
                            <div class="card-body p-5 shadow-5 text-center text-white">
                                <h2 class="fw-bold mb-5">Sign up now</h2>
                                <form method="post" action="/user/signupuser">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="mobile_no">Mobile No</label>
                                        <input type="text" id="mobile_no" name="mobile_no" class="form-control"
                                            maxlength="10" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control" required />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            required />
                                    </div>

                                    <!-- Submit button -->
                                    <input type="submit" name="submit" value="Sign up" class="btn btn-light btn-lg">
                                </form>
                                <p class="mt-3">Already have an account? <a href="/" class="text-white">Login</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                            class="w-100 rounded-4 shadow-4" alt="" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </div>
</body>
<style>
    body {
        background-color: #eee;
    }

    .form-outline {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(5px);
    }

    .btn-light {
        background-color: rgba(255, 255, 255, 0.9);
    }
</style>

</html>
