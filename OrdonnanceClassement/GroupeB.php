<?php    
   function ClassementB(){
    $_SESSION['GroupeB']=[
        'indiceE' => [
            'nom'=>$_SESSION['indiceE']['nom'],
            'MJ'=>$_SESSION['indiceE']['MJ'],
            'MG'=>$_SESSION['indiceE']['MG'],
            'MN'=>$_SESSION['indiceE']['MN'],
            'MP'=>$_SESSION['indiceE']['MP'],
            'BP'=>$_SESSION['indiceE']['BP'],
            'BC'=>$_SESSION['indiceE']['BC'],
            'DIF'=>$_SESSION['indiceE']['DIF'],
          'POINT'=>$_SESSION['indiceE']['POINT']
        ],

     'indiceF'  =>[
        'nom'=>$_SESSION['indiceF']['nom'],
        'MJ'=>$_SESSION['indiceF']['MJ'],
        'MG'=>$_SESSION['indiceF']['MG'],
        'MN'=>$_SESSION['indiceF']['MN'],
        'MP'=>$_SESSION['indiceF']['MP'],
        'BP'=>$_SESSION['indiceF']['BP'],
        'BC'=>$_SESSION['indiceF']['BC'],
        'DIF'=>$_SESSION['indiceF']['DIF'],
      'POINT'=>$_SESSION['indiceF']['POINT']

     ],


   'indiceH'=>[
    'nom'=>$_SESSION['indiceH']['nom'],
    'MJ'=>$_SESSION['indiceH']['MJ'],
    'MG'=>$_SESSION['indiceH']['MG'],
    'MN'=>$_SESSION['indiceH']['MN'],
    'MP'=>$_SESSION['indiceH']['MP'],
    'BP'=>$_SESSION['indiceH']['BP'],
    'BC'=>$_SESSION['indiceH']['BC'],
    'DIF'=>$_SESSION['indiceH']['DIF'],
  'POINT'=>$_SESSION['indiceH']['POINT']

   ],
   
   
   'indiceC'=>[
    'nom'=>$_SESSION['indiceC']['nom'],
    'MJ'=>$_SESSION['indiceC']['MJ'],
    'MG'=>$_SESSION['indiceC']['MG'],
    'MN'=>$_SESSION['indiceC']['MN'],
    'MP'=>$_SESSION['indiceC']['MP'],
    'BP'=>$_SESSION['indiceC']['BP'],
    'BC'=>$_SESSION['indiceC']['BC'],
    'DIF'=>$_SESSION['indiceC']['DIF'],
  'POINT'=>$_SESSION['indiceC']['POINT']

   ],
   ];

   usort ($_SESSION['GroupeB'], function($x, $y) {
    return $y["POINT"] - $x["POINT"];

   }); 

   foreach($_SESSION['GroupeB'] as $key => $value){
       echo "<tr>";

       foreach ($value as $key => $value){
           echo "<td>".$value."</td>";

       }
       
       echo"</tr>";
   }

   }

?>