        <div class="container">
            <div class="top">
                <h1 id="login-title">Cheap <span class="ampersand">&</span> Ease</h1>
                <h2 id="login-subtitle">You want it <u>Cheap</u><span class="ambersand"> & </span>We do it with <u>Ease</u></h2>
            </div>
            <div class="login-box">
                <div class="box-header">
                    <h2 id="box">Log In</h2>
                </div>
                <div id="logbox-input">
                    <form method="POST" action="http://students.stevens.edu/cne/main/validate_credentials" accept-charset="utf-8">
                        <label for="username" class="login-label">Username</label>
                        <br/>
                        <input type="text" name="username" autofocus placeholder="username">
                        <br/>
                        <label for="password" class="login-label">Password</label>
                        <br/>
                        <input type="password" name="password" placeholder="password">
                        <br/>
                        <button type="submit" id="login-button" onclick="window.location.href='dashboard.html'">Sign In</button>
                        <br/>
                    </form>
                </div>
               <div id="login-small-sect">
                <small class="log-small"><a class="login-link" href="forgot_password.html">Forgot your password? </a></small>
               </div>
            </div>
        </div>
        <!--
        <div class="login-alert fade">
            <p>Please ensure your login is correct.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        -->
