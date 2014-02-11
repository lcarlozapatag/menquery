?php
class MatchMaking{
 //nombrar los atributos de las clases
  
  public function  open(){
  $v=0;
  //abrir en archivo
$file="input.txt";
//or die("problemas para abrir el achivo");
$file=fopen("$file","r+");
//poner el contenido de un archivo en una cadena
while(!feof($file)){
$linea=fgets($file,600);
$cadena[$v]=$linea;
$v++;
}
//$cadena = ucfirst($cadena);
//$probar=fread($fp,filesize($file));
//fclose($probar);
//divide la cadena en los espacios 
//$probar=explode("\n",$cadena);
echo '<br>'.$v. '<br>';
  $this->almacenarvector($cadena);
  }
  
  public function almacenarvector($a)
{
//convertir string a array para luego convertidos en array con mas indices para otra vez array
 $b=sizeof($a);
 //nombre de la mujeres
 $nameWomen[0]=$a[0];
 $nameWomen=implode(" ",$nameWomen);
 $nameWomen=explode(",",$nameWomen);
 //respuesta de la mujeres
 $answersWomen[0]=$a[1];
 $answersWomen=implode(" ",$answersWomen);
 $answersWomen=explode(",",$answersWomen);
 //nombre de los hombres
 $namesMen[0]=$a[2];
 $namesMen=implode(" ",$namesMen);
 $namesMen=explode(",",$namesMen);
 //repuesta de los hombres
 $answersMen[0]=$a[3];
 $answersMen=implode(" ",$answersMen);
 $answersMen=explode(",",$answersMen);
 //mujer de la busqueda
 $queryWomen=$a[4];
 //$queryWomen=implode(" ",$queryWomen);
 //$queryWomen=explode(" ",$queryWomen);
 $this->makeMatch($nameWomen,$answersWomen,$namesMen, $answersMen, &$queryWomen);
//echo '<br>'.$a[2]. '<br>';
  }
//funcion que busca el nombre de la mujer y el indice en el array
 
  //}//fin de la funcion searhWomen
   public function comparar($res,$resMen2,$res3){
 $count=0;
 for($j=0;$j<count($res);$j++){
 for($i=1;$i<strlen($resMen2);$i++){//ciclo
 $letras[$i]=$resMen2[$i];
 
 if($res[$i]==$resMen2[$i])
 {
 if($letras[$i]=="a"){
 $count1++;
 echo "$count1\n";

 echo " The men Is <B>".$letras[$i]. "</B><B/>";
 exit(0);
 }
   else if($letras[$i]=="b"){
   $count2++;
   echo "$count2\n";

 echo " The men Is <B>".$letras[$i]. "</B><B/>";
 exit(0);
 
 }
 // echo " The men Is <B>".$letras[$i]. "</B><B/>";
 }
  echo " The men Is <B>".$letras[$i]. "</B><B/>";
 }//fin de 1er ciclo
} //fin de 2 ciclo
  }//fin del metodo
  
  public  function   makeMatch( $nameWomen, $answersWomen,$namesMen, $answersMen,&$queryWomen){
$indice=0;
//$almacenarbusqueda[0]=$queryWomen;
$ema="Bertha";
$indice=array_search($queryWomen,$nameWomen);
  
 var_dump($nameWomen);
  var_dump($queryWomen);
 // var_dump($ema);
  var_dump($indice);
  
  echo '<br>'.$indice.'<br>';
  
  }

 }//fin de la clase
 
?>

   
