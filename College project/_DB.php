    <?php
    try{
        $host = 'localhost';
        $dbname = 'Blood_Collective_Allaiance_DB';
        $user = 'postgres';
        $password = '';

        $db_connect = pg_connect("host=$host dbname=$dbname user=$user password=$password");

        if (!$db_connect) {
            echo "Failed to connect to PostgreSQL database.";
            exit;
        }
        // } else {
        //     echo "Connected to PostgreSQL successfully!";
        // }
    }
    catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
        // pg_close($db_connect);
    ?>
