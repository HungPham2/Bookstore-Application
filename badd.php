<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates

and open the template in the editor.

-->

<html>

    <head>

        <meta charset="UTF-8">

        <title></title>

    </head>

    <body>

        <?php

        if(isset($_POST['submit'])){

            $data_missing = array();

            if(empty($_POST['Genre'])){

            //Add a value to array

            $data_missing[]='Genre';

            }else{

                //Trim white space from the value and store the value

                $Genre= trim($_POST['Genre']);

              
            }

            if(empty($_POST['Author'])){

                //Add a value to array

                 $data_missing[]='Author';

                  }else{

                //Trim white space from the value and store the value

                 $Author= trim($_POST['Author']);

                }

            if(empty($_POST['Name of The Books/Price'])){

            //Add a value to array

            $data_missing[]='Name of The Books/Price';

            }else{

                //Trim white space from the value and store the value

                $NameofBooksPrice= trim($_POST['NameofBooksPrice']);

            }

            if(empty($data_missing)){

               require_once('mysqli_connect.php');

                $query = "INSERT INTO bsorders (genre, author, name of the books/price) VALUES (?, ?, ?)";

                $stmt = mysqli_prepare($dbc, $query);

                // i - Integers d - Doubles b - Blods s - everything else

               

                mysqli_stmt_bind_param($stmt, "sss", $Genre, $Author, $NameofBooksPrice);

                mysqli_stmt_execute($stmt);

                $affectedRows = mysqli_stmt_affected_rows($stmt);

                if ($affectedRows == 1){

                    echo 'Order Entered';

                    mysqli_stmt_close($stmt);

                    mysqli_close($dbc);

                }else{

                    echo 'Error Occured <br/>';

                    echo mysql_error($dbc);

                    mysqli_stmt_close($stmt);

                    mysqli_close($dbc);

                }

            }else{

                echo 'You need to select the following data: <br />';

                foreach($data_missing as $missing){

                    echo "$missing<br/>";

               }

           }

        }

        ?>

        <p><a href="obs.html">Home</a></p>

    </body>

</html>