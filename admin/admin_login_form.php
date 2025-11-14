<?php
    include 'utility/database.php';
    include 'utility/dbfunction.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $hash = password_hash($password, $bcrypt);

        $sql = "Select * from admin_users where username = ?";
	    $result = GetDataFromQuery($conn, $sql, [$username], "s");
        if($result==[])
        {
            echo "
                <script>
                alert('Either Username or password is wrong');
                </script>
            ";
            exit();
        }
        else
        {
            // $password = '4T8{DYed32d#';

            // Hash the password (for example, during registration)
            // $hash = password_hash($password, PASSWORD_BCRYPT);
            $hashpass = $result['password_hash'];
            if (password_verify($password, $hashpass)) 
            {
                echo 
                "<script>
                    window.location.href='index.php';
                </script>";
            } 
            else 
            {
                echo 
                "
                    <script>
                    alert('Username or passwaord is incorrect');
                    window.location.href='login.php';
                    </script>
                ";
            }
        }
    }
?>