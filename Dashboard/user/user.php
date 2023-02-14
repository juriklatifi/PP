<html>
    <head>
        <link rel="stylesheet" href="../css/dashboard.css"/>
    </head>
    <body>

    <table class="tabela">
             <tr class="tr1"> 
                 <th class="UserID">ID</th>
                 <th class="Emri">NAME</th>
                 <th class="Mbiemri">SURNAME</th>
                 <th class="Eamil">EMAIL</th>
                 <th class="Username">USERNAME</th>
                 <th class="Password">PASSWORD</th>
                 <th class="Roli">Roli</th>
                 <th class="editbttn">Edit</th>
                 <th class="deletebttn">Delete</th>
                 
             </tr>

             <?php 
             require_once 'C:\xampp\htdocs\pp\Repository\User_repository.php';

             $userRepository = new User_Repository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[UserID]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Email] </td>
                     <td>$user[Username] </td>
                     <td>$user[Password] </td>
                     <td>$user[Roli] </td>
                     <td><a href='user/edit.php?UserID=$user[UserID]'>Edit</a> </td>
                     <td><a href='user/delete.php?UserID=$user[UserID]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>

    </body>
</html>

