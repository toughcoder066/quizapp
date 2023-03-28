<?php
    require_once 'backend.php';

    createTable('users','u_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                username VARCHAR(20) UNIQUE,
                pass VARCHAR(200),
                email VARCHAR(30) UNIQUE,
                INDEX(username(6))');

    createTable('userdetail','ud_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                username VARCHAR(20),
                bio VARCHAR(500),
                dob DATE,
                nationality VARCHAR(15),
                occupation VARCHAR(25),
                interests VARCHAR(30),
                INDEX(username(6))');

    createTable('questions','q_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                 question VARCHAR(250),
                 t_id INT(11),
                 username VARCHAR(20),
                 INDEX(question(10))');
    
    createTable('topics','t_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                 quiztitle VARCHAR(50),
                 category VARCHAR(30),
                 description VARCHAR(250),
                 created_on DATETIME,
                 username VARCHAR(20),
                 INDEX(quiztitle(10))');

    createTable('answers','a_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                 answer VARCHAR(100)');

    createTable('options','o_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                 option_A VARCHAR(100),
                 option_B VARCHAR(100),
                 option_C VARCHAR(100),
                 option_D VARCHAR(100)');

    //redirect to another page
?>