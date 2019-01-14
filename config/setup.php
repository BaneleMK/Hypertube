<?Php
    require_once("database.php");

    try {
        $conn = new PDO($DB_HOST, $DB_USER, $DB_PASSWORD);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
        $conn->exec($sql);
        //echo "Connected successfully to database<br>";
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "<br>";
    }

    try {
        $sql = "USE $DB_NAME";
        $conn->exec($sql);        

        $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                password VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                user_state VARCHAR(30) NOT NULL DEFAULT 'unregistered',
                comment_notifications VARCHAR(4) NOT NULL DEFAULT 'ON',
                verificationcode INT(7) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin";
        
        $conn->exec($sql);
        //echo "User table created successfully<br>";

        $sql = "CREATE TABLE IF NOT EXISTS posts (
            id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            picture TEXT NOT NULL,
            likes INT(10) UNSIGNED DEFAULT 0,
            comments INT(10) UNSIGNED DEFAULT 0
        ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin";

        $conn->exec($sql);
        //echo "Post table created successfully<br>";

        $sql = "CREATE TABLE IF NOT EXISTS user_comments (
            id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            torrent_id INT(7) UNSIGNED NOT NULL,
            userid VARCHAR(30) NOT NULL,
            comment_text VARCHAR(255) NOT NULL 
        ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin";
    
        $conn->exec($sql);
        //echo "comments table created successfully<br>";

        $sql = "CREATE TABLE IF NOT EXISTS likes (
            postid INT(7) UNSIGNED NOT NULL,
            username VARCHAR(30) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin";
    
        $conn->exec($sql);
        //echo "likes table created successfully<br>";
    }
    catch(PDOException $e) {
        echo "Table creation failed: " . $e->getMessage() . "<br>";
    }
?>