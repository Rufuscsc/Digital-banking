<?php
    $conn = mysqli_connect("localhost", "root", "", "bankform");
    $result= mysqli_query($conn, "select * from banktb") 
    ?> 
    <!DOCTYPE html> 
    <html> 
        <head> 
            <title> Fetch Data From Database </title> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head> 
        <body>
        <form action="index.php" method="post" id="form">
            <input type="submit" value="Add user" class="btn btn-success my-5" />
        </form> 
        <table class="table table-striped"> 
        <tr> 
            </tr> 
                <th> ID </th> 
                <th> Customer ID</th> 
                <th> Account No </th> 
                <th> Upate/Delete</th>
            </tr> 
            
            <?php
             while($rows=mysqli_fetch_assoc($result)) 
            {
                $id = $rows['id'];
                $name = $rows['customid']; 
                $number = $rows['accountno']; 
                echo '<tr>
                <td> '.$id.' </td> 
                <td> '.$name.'</td> 
                <td>'.$number.'</td> 
                <td>
                    <button type="button" class="btn btn-success btn-sm"><a class="btn btn-success" role="button" href="update.php?updateid='.$id.'">Update</a></button>
                    <button type="button" class="btn btn-danger btn-sm"><a class="btn btn-danger" role="button"href="delete.php?deleteid='.$id.'">Delete</a></button>
                </td> 
                </tr>';
            } 
            ?> 

        </table> 
        </body> 
    </html>
