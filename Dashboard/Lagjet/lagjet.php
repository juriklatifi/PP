<html>
    <head>
        <link rel="stylesheet" href="../css/dashboard.css"/>
    </head>
    <body>

    <table class="tabela">
             <tr class="tr1"> 
                 <th class="LagjetID">ID</th>
                 <th class="Qyteti">QYTETI</th>
                 <th class="Lagjet">LAGJET</th>
                 <th class="Zona">ZONA</th>
                 <th class="Cmimi_hour">CMIMI_HOUR</th>
                 <th class="Cmimi_day">CMIMI_DAY</th>
                 <th class="Cmimi_denim">CMIMI_DENIM</th>
                 <th class="editbttn">Edit</th>
                 <th class="deletebttn">Delete</th>
                 
             </tr>

             <?php 
             require_once 'C:\xampp\htdocs\pp\Repository\Lagje_repository.php';

             $lagjeRepository = new Lagje_Repository();

             $lagjet = $lagjeRepository->getAllLagjet();

             foreach($lagjet as $lagje){
                echo 
                "
                <tr>
                     <td>$lagje[LagjetID]</td>
                     <td>$lagje[Qyteti]</td>
                     <td>$lagje[Lagjet] </td>
                     <td>$lagje[Zona] </td>
                     <td>$lagje[Cmimi_hour] </td>
                     <td>$lagje[Cmimi_day] </td>
                     <td>$lagje[Cmimi_denim] </td>
                     <td><a href='Lagjet/edit.php?LagjetID=$lagje[LagjetID]'>Edit</a> </td>
                     <td><a href='Lagjet/delete.php?LagjetID=$lagje[LagjetID]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>

    </body>
</html>

