<?php
// Henintsoa RASOLOSON
//----------------- TEST ACCENGAGE ------------------------------

 $array = [10, 8, 9, 11, 63, 3];
        // -------------------------------- 1 ------------------------------------------
         function order($array, $ascOrDesc = 'asc') {
                 if($ascOrDesc =='asc'){
                          sort($array);
                 }
                 if($ascOrDesc =='desc'){
                          rsort($array);
                 }
                 return $array;
            }

             $result = order($array,'desc');
            print_r($result);

        // ------------------------------- 2 --------------------------------------------
             function  oddOrEven($array, $oddOrEven = 'even') {
                     $even = [];
                    $odd=[];
                     foreach($array as $elt){
                        if($elt%2 == 0){
                                $even[]=$elt;
                        }
                        else{
                                $odd[]=$elt;
                         }
                    }
                     if($oddOrEven== 'even')return $even;
                    if($oddOrEven =='odd') return $odd;
            }
            $rs = oddOrEven($array,'odd');
            print_r($rs);
        // ------------------------------- 3 ----------------------------------------------
        	SELECT count(*), a.name, a.authorId  FROM author a INNER JOIN books b on a.authorId = b.authorId GROUP BY  authorId
        // ------------------------------- 4 ----------------------------------------------
            
             const array1 = [1, 2,3];
             var total =0;
             array1.forEach((number) => {
             total += number;
             });
             console.log(total);  

             // Explanation : "total" must be declared as variable but not constant because it changes  at each loop 
             // Explication : "total" doit être déclaré comme variable mais pas constant car il change à chaque boucle


        // ------------------------------- 5 ----------------------------------------------
                regex : #[.-]$#

                // TEST
               		echo(preg_match("#[.-]$#", "I am working today."));
                	// return 1 if true
                	// return 0 if false