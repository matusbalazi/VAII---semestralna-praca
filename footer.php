    <div class="modal hidden login">
        <button class="close-modal">&times;</button>
        <h1>LOGIN</h1>
        <form action="#" method="POST" class="login-form">
            <input type="text" name="nicname" placeholder="Nickname" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="btn-login" class="btn-login">Login</button>
        </form>
        <br>
        <p>or you can <a href="#">register</a> now!</p>
    </div>

    <div class="modal hidden register">
        <button class="close-modal">&times;</button>
        <h1>REGISTER</h1>
        <form action="send_register.php" method="POST" class="register-form">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="nickname" placeholder="Nickname" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm-password" placeholder="Confirm Password" required>
            <button type="submit" name="btn-register" class="btn-login">Register</button>
        </form>
    </div>

    <div class="footer">
        <div class="container">
            <div class="copyright">
                <p>&copy; Developed by 3D Printing Nerds</p>
            </div>
            <div class="socials">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="overlay hidden"></div>

    <script src="js/headerscroll.js"></script>
    <script src="js/modalwindow.js"></script>
</body>