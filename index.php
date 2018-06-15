<?php
    include_once 'header.php';
    date_default_timezone_set('Asia/Jerusalem');
?>

<div class='body_main'>
    <div class='side'>
        <!-- Login Form -->
        <div class='login'>
            <?php
            
            if (isset($_SESSION['user'])) {
                                echo "Welcome ".$_SESSION['user']."<br><br><form action='includes/logout.inc.php' method='POST'>
                <button type='submit' name='logoutSubmit'>Logout</button>
            </form>";
                
            } else {
                echo "<form action='includes/login.inc.php' method='post' name='login_form' style='text-align:center;'>
                <b>Login:</b> <br>
                <input type='text' name='user' id='user' placeholder='User Name'> <br>
                <b>Password:</b> <br>
                <input type='password' name='pass' id='pass' placeholder='Password'> <br><br>
                <input type='submit' value='Login' name='submit'>
            </form> <br> 
            
            <!-- Error Message -->

            <div style='text-align:center;'>
            Not Registered Yet? <br>
            <a href='signup.php'>Click here to register!</a>                
            </div>"     ;            
            } 
            ?>
            <?php
            //Error Message
            /* if(isset($_SESSION['user'])){
                echo $error; 
            } */
            ?>
        </div> 
    </div>
            
    <!-- Main Page Content -->
    <div class='main'>
        <?php
                
            if (isset($_SESSION['user'])) {
                require_once 'includes/dbh.inc.php';
            ?>
            <div class='out' style='width:100%;height:700px;line-height:3em;overflow:scroll;padding:5px;border:1px solid #D6D6D6;'>
            <?php echo getComment($conn); ?>
            </div>
        <?php
                echo "
                <br>
        <form action='".setComment($conn)."' method='POST'>
            <input type='hidden' name='username' value='".$_SESSION['user']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form>
                ";
            } else {
                echo "        <h2>Home Page</h2>
        <h5>Title description</h5>
        <p>Some text.. .. ..</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description</h5>
        <div class='fakeimg' style='height:200px;'>Image</div>
        <p>Some text..</p>";
            }
        ?>
    </div>
</div>

<?php
    include_once 'footer.php';
?>