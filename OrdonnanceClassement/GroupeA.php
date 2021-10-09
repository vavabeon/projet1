<?php   


       function ClassementA() {
            $_SESSION['GroupeA']=[
                'indiceA'=>
              [
                  'nom'=>$_SESSION['indiceA']['nom'],
                  'MJ'=> $_SESSION['indiceA']['MJ'],
                  'MG'=> $_SESSION['indiceA']['MG'],
                  'MN'=> $_SESSION['indiceA']['MN'],
                  'MP'=> $_SESSION['indiceA']['MP'],
                  'BP'=> $_SESSION['indiceA']['BP'],
                  'BC'=> $_SESSION['indiceA']['BC'],
                  'DIF'=>$_SESSION['indiceA']['DIF'],
                'POINT'=>$_SESSION['indiceA']['POINT'],
              ],
  
                'indiceD' =>[
                  'nom'=>$_SESSION['indiceD']['nom'],
                  'MJ'=> $_SESSION['indiceD']['MJ'],
                  'MG'=> $_SESSION['indiceD']['MG'],
                  'MN'=> $_SESSION['indiceD']['MN'],
                  'MP'=> $_SESSION['indiceD']['MP'],
                  'BP'=> $_SESSION['indiceD']['BP'],
                  'BC'=> $_SESSION['indiceD']['BC'],
                  'DIF'=>$_SESSION['indiceD']['DIF'],
                'POINT'=>$_SESSION['indiceD']['POINT']

                ],
                
                'indiceB' =>[
                  'nom'=>$_SESSION['indiceB']['nom'],
                  'MJ'=> $_SESSION['indiceB']['MJ'],
                  'MG'=> $_SESSION['indiceB']['MG'],
                  'MN'=> $_SESSION['indiceB']['MN'],
                  'MP'=> $_SESSION['indiceB']['MP'],
                  'BP'=> $_SESSION['indiceB']['BP'],
                  'BC'=> $_SESSION['indiceB']['BC'],
                  'DIF'=>$_SESSION['indiceB']['DIF'],
                'POINT'=>$_SESSION['indiceB']['POINT']
                ],
                
                
                'indiceG' =>[
                  'nom'=>$_SESSION['indiceG']['nom'],
                  'MJ'=> $_SESSION['indiceG']['MJ'],
                  'MG'=> $_SESSION['indiceG']['MG'],
                  'MN'=> $_SESSION['indiceG']['MN'],
                  'MP'=> $_SESSION['indiceG']['MP'],
                  'BP'=> $_SESSION['indiceG']['BP'],
                  'BC'=> $_SESSION['indiceG']['BC'],
                  'DIF'=>$_SESSION['indiceG']['DIF'],
                'POINT'=>$_SESSION['indiceG']['POINT']

                ],

            ];

            usort($_SESSION['GroupeA'], function ($x, $y) {
             return $y["POINT"] - $x["POINT"];

            }); 
     
            foreach($_SESSION['GroupeA'] as $key => $value) {

              echo "<tr>";
              foreach ($value as $key => $value){
                  echo "<td>" . $value . "</td>"; 
              }
              echo "</tr>";
              
          }
  
 }


?>