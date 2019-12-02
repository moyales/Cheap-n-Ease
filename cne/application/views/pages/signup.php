        <div class="container">
            <div class="signup-box">
                <div class="box-header">
                    <h2 id="box">Sign Up</h2>
                </div>
                <div class="signup-inputs" id="logbox-input">
                    <form method="POST" action="http://students.stevens.edu/cne/auth/create_member" accept-charset="utf-8">
                        <!--Style form to have labels next to inputs-->
                        <label for="first_name" class="login-label">First Name</label>
                        <br/>
                        <input type="text" name="first_name" autofocus placeholder="John">
                        <br/>
                        
                        <label for="last_name" class="login-label">Last Name</label>
                        <br/>
                        <input type="text" name="last_name" placeholder="Smith">
                        <br/>
                        
                        <label for="email_address" class="login-label">Email Address</label>
                        <br/>
                        <input type="text" name="email_address" placeholder="john.smith@stevens.edu">
                        <br/>
                        
                        <label for="username" class="login-label">Username</label>
                        <br/>
                        <input type="text" name="username" placeholder="jsmith">
                        <br/>

                        <label for="password" class="login-label">Password</label>
                        <br/>                 
                        <input type="password" name="password" placeholder="password">
                        <br/>

                        <label for="password" class="login-label">Confirm Password</label>
                        <br/>
                        <input type="password" name="password2" placeholder="Re-enter password">
                        <br/>

                        <button type="submit" id="signup-button" onclick="window.location.href='dashboard.html'">Create Account</button>
                    </form>
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
