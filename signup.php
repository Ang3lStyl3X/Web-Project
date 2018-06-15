<?php

    include_once 'header.php';

?>

<div class='body_main'>
    <div class='side'>

        <!-- Login Form -->

        <div class='login'>
            <form action='includes/login.inc.php' method='post' name='login_form' style='text-align:center;'>
                <b>Login:</b> <br>
                <input type='text' name='user' id='user' placeholder='User Name'> <br>
                <b>Password:</b> <br>
                <input type='password' name='pass' id='pass' placeholder='Password'> <br><br>
                <input type='submit' value='Login' name='submit'>
            </form> <br>
            <div style='text-align:center;'>
            Not Registered Yet? <br>
            <a href='signup.php'>Click here to register!</a>                
            </div>
        </div> 
    </div>
            

    <!-- Main Page Content -->

    <div class='main'>
        <h2>Registration</h2> <br>
        <div class='register'>
            <form action='' name='register_form' method='POST'>
                <input type='text' name='user' placeholder='User Name'> <br>
                <input type='password' name='pass' placeholder='Password'> <br>
                <button type='submit' name='regSubmit'>Register</button>
            </form>            
        </div>
    </div>
</div>

<?php

    include_once 'footer.php';

?>