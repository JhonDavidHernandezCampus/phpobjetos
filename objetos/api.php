<?php 
/* class olla{
    public $lugares;
    private $merca;
    public function __construct(){

    }
    public function set_lugar():void{
        $arg = (object) func_get_arg();
        $this->lugares = $p1;
    }
    public function get_lugar():String{
        return $this->lugares;
    }

    // public function __destruct(){
    //     echo "se ha allanado la ".__CLASS__;
    // } 
    
}
$obj = new olla();
$obj.set_lugar("Bucaramanga");
 */


/* function data(){
    //$org = func_get_args();
    //var_dump($org);
    //var_dump(func_get_arg(2));
    $listas = func_get_args();
    $arg = array_combine(["nombre","apellido","hermanos"],$listas);
    var_dump(json_encode($arg));

}
data("jhon","hernandez",["sofia","sebastian"]);
 */

function dataASSOC(){
    $list = func_get_args();
    $list = (object) array_pop($list);
    var_dump(json_encode($list));
}

dataASSOC("jhon","hernandez",["sofia","sebastian"]);

?>