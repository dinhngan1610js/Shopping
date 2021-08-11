<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login</title>

    <body>
    <section id="register">
<!--        <button onclick="goBack()"><i class="fas fa-arrow-circle-left"></i></button>-->
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form">
                        <button onclick="location.href='home.php'" class="btn solid" style="background-color: #ff00ff;" type="button">Home</button>
                        <h2 class="title">Sign in</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" />
                        </div>
                        <input type="submit" value="Login" class="btn solid" style="background-color: #ff00ff;"/>
<!--                        <p class="social-text">Or Sign in with social platforms</p>-->
<!--                        <div class="social-media">-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-facebook-f"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-twitter"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-google"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-linkedin-in"></i>-->
<!--                            </a>-->
<!--                        </div>-->
                    </form>
                    <form action="register.php" class="sign-up-form" method="post" enctype="multipart/form-data" id="reg-form">
                        <button onclick="location.href='home.php'" class="btn solid" style="background-color: #ff00ff;" type="button">Home</button>
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" required name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" required name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-check-circle"></i>
                            <input type="password" placeholder="Confirm Password" />
                        </div>
                        <input type="submit" class="btn" value="Sign up" style="background-color: #ff00ff;"/>
<!--                        <p class="social-text">Or Sign up with social platforms</p>-->
<!--                        <div class="social-media">-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-facebook-f"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-twitter"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-google"></i>-->
<!--                            </a>-->
<!--                            <a href="#" class="social-icon">-->
<!--                                <i class="fab fa-linkedin-in"></i>-->
<!--                            </a>-->
<!--                        </div>-->
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here ?</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                            ex ratione. Aliquid!
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="assets/login.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us ?</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                            laboriosam ad deleniti.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Sign in
                        </button>
                    </div>
                    <img src="assets/register.svg" class="image" alt="" />
                </div>
            </div>
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });

    $('close').click(function (){
        document.location.href='home.php'+$(this).attributes('id');
    });
    </script>
</body>

</html>


