    <?php
    try{
        $host = '127.0.0.1';
        $dbname = 'Blood_Collective_Allaiance_DB';
        $user = 'postgres';
        $password = 'Silver@123';

        $db_connect = pg_connect("host=$host dbname=$dbname user=$user password=$password");

        if (!$db_connect) {
            echo "Failed to connect to PostgreSQL database.";
            exit;
        }
       
    }
    catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
      
    ?>
