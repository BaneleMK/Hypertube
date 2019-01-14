<?php

    session_start();
    $_SESSION['id'] = 1;
    $_SESSION['username'] = 'Dnte';
    $_SESSION['fistname'] = 'Dante';
    $_SESSION['lastname'] = 'Dude';
    $_SESSION['email'] = 'logo@mailinator.com';
    echo 'sessions made<br>';
    if (isset($_GET['post']) && isset($_SESSION['username'])){
        require_once('../config/setup.php');
        include_once('../functions/sanitize.php');
        try {
                echo 'Inside Try <br>';

            //currently have no way for getting the torrent id so 404 is sub 
            $torrent_id = 404;
            $userid = sanitize($_SESSION['id']);
            $comment_text = substr(trim(sanitize($_POST['comment_text'])), 0, 255);

                echo 'Vars set<br>';
            
            $sql = "INSERT INTO user_comments (userid, comment_text, torrent_id) VALUES ('$userid', '$comment_text', '$torrent_id')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

                echo 'comment made <br>';

            // This is for just adding into the number of total comments
            //$newcomments = $row['comments'] + 1;
            //$postusername = $row['username'];
            
            header("Location: ../video.php?torrent_id=".$postid);
            echo 'X0';
            exit();
        } catch (PDOException $e) {
            echo "failed: " . $e->getMessage() . "<br>";
            //header("Location: comments.php?post=" . $postid . "&error");
            echo 'X1';
            exit();
        }
    } else {
        echo 'X2';
        //header("Location: ../login/login.php?");
        exit();
    } 