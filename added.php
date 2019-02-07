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

            if(empty($_POST['Username'])){

            //Add a value to array

            $data_missing[]='Username';

            }else{

                //Trim white space from the value and store the value

                $Username= trim($_POST['Username']);

              
            }

            if(empty($_POST['Name'])){

                //Add a value to array

                 $data_missing[]='Name';

                  }else{

                //Trim white space from the value and store the value

                 $Name= trim($_POST['Name']);

                }



             if(empty($_POST['Street'])){

            //Add a value to array

            $data_missing[]='Street';

            }else{

                //Trim white space from the value and store the value

                $Street= trim($_POST['Street']);

        }


            if(empty($_POST['City'])){

            //Add a value to array

            $data_missing[]='City';

            }else{

                //Trim white space from the value and store the value

                $City= trim($_POST['City']);

            }       

            if(empty($_POST['Citystate'])){

            //Add a value to array

            $data_missing[]='City_State';

            }else{

                //Trim white space from the value and store the value

                $City_State= trim($_POST['City_State']);

            }
	
		
            if(empty($_POST['Zip_Code'])){

            //Add a value to array

            $data_missing[]='Zip_Code';

            }else{

                //Trim white space from the value and store the value

                $Zip_Code= trim($_POST['Zip_Code']);

            }

          

            if(empty($data_missing)){

               require_once('mysqli_connect.php');

                $query = "INSERT INTO Customers (Username, Name, Street, City, City_State, Zip_Code) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = mysqli_prepare($dbc, $query);

                // i - Integers d - Doubles b - Blods s - everything else

               

                mysqli_stmt_bind_param($stmt, "sssssI", $Username, $Name, $Street, $City, $City_State, $Zip_Code);

                mysqli_stmt_execute($stmt);

                $affectedRows = mysqli_stmt_affected_rows($stmt);

                if ($affectedRows == 1){

                    echo 'Customer Entered';

                    echo "Add a new customer:".$_POST["name"];

                    mysqli_stmt_close($stmt);

                    mysqli_close($dbc);

                }else{

                    echo 'Error Occured <br/>';

                    echo mysql_error($dbc);

                    mysqli_stmt_close($stmt);

                    mysqli_close($dbc);

                }

            }else{

                echo 'You need to enter the following data: <br />';

                foreach($data_missing as $missing){

                    echo "$missing<br/>";

               }

           }

        }

        ?>

        <p><a href="obs.html">Home</a></p>

    </body>

</html>
