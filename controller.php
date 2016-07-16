<?php
/**
 * User: Rafał
 * Date: 2016-07-12
 * Time: 09:40
 */

namespace login;


class Connect {

    protected $mysqli;

    public function __construct($db_host="localhost", $db_login="root", $db_password="", $db_name="users")
    {
        try
        {
           $this->mysqli = new \mysqli($db_host, $db_login, $db_password, $db_name);
        } catch(\mysqli_sql_exception $e) {
            throw new \mysqli_sql_exception($e->getMessage());
        }
    }

    public function QueryOne()
    {
        ob_start();
        session_start();

        if(isset($_POST['email']) && isset($_POST['password']))
        {
            // define your own variables
            $email = $_POST['email'];
            $pass = $_POST['password'];

            if ($results = @$this->mysqli->query(
                sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'",
                    mysqli_real_escape_string($this->mysqli,$email),
                    mysqli_real_escape_string($this->mysqli,$pass))))
            {
                $numerOfusers = $results->num_rows;
                if ($numerOfusers > 0)
                {
                    $row = $results->fetch_assoc();
                    $_SESSION['session'] = $row['email'];
                    echo "Welcome";
                } else {
                   return false;
                   //header('Location: index.php');
                }
               $this->mysqli->close();
            }

        } else {
            return false;
            //header('Location: ../test/index.php');
        }
        ob_end_flush();
    }
    public function logOut()
    {
        echo '<br /><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbspLogOut</a>';
    }

}
?>