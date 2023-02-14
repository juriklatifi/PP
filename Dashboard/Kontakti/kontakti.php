<html>
    <head>
        <link rel="stylesheet" href="../css/dashboard.css"/>
    </head>
    <body>

    <table class="tabela">
             <tr class="tr1"> 
                 <th class="UserID">KontaktiID</th>
                 <th class="Emri">Emri</th>
                 <th class="Mbiemri">Mbiemri</th>
                 <th class="Eamil">Emaili</th>
                 <th class="Username">Subjekti</th>
                 <th class="Password">Kerkesa</th>
               
                 
             </tr>

             <?php 
             require_once 'C:\xampp\htdocs\pp\Repository\Kontakti_Repository.php';

             $kontaktiRepository = new Kontakti_Repository();

             $kontaktet = $kontaktiRepository->getKontaktet();

             foreach($kontaktet as $kontakti){
                echo 
                "
                <tr>
                     <td>$kontakti[KontaktiID]</td>
                     <td>$kontakti[Emri]</td>
                     <td>$kontakti[Mbiemri] </td>
                     <td>$kontakti[Email] </td>
                     <td>$kontakti[Subjekt] </td>
                     <td>$kontakti[Kerkesa] </td>
                  
                     
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>

    </body>
</html>

