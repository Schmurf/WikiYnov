    <?php

        /**
         * Created by PhpStorm.
         * User: Pierre
         * Date: 04/05/2016
         * Time: 09:26
         */

    session_start();

            if (!isset($_SESSION["user"])) {
                header("Location: ./controllers/connexion.php");

            } else if (isset($_SESSION["user"])) {
                header("Location: ./views/Home.php");
            }





