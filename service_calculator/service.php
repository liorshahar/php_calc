<?php

include_once 'calc.php';

$model = new Model;
$calc = new Calc($model);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $numArray = array((int)$_POST['num1'] , (int)$_POST['num2'] , (int)$_POST['num3']);
    $calc->setNumbers($numArray);
    $func = $_POST['func'];

}

else if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $numArray = array((int)$_GET['num1'] , (int)$_GET['num2'] , (int)$_GET['num3']);
    $calc->setNumbers($numArray);
    $func = $_GET['func'];


}

else if ($_SERVER["REQUEST_METHOD"] === 'PUT') {
    parse_str(file_get_contents("php://input"),$post_vars);
    $numArray = array((int)$post_vars['num1'] , (int)$post_vars['num2'] , (int)$post_vars['num3']);
    $calc->setNumbers($numArray);
    $func = $post_vars['func'];

}

switch($func){

    case 'add':
        $calc->add();
        $retVal = $calc->getRetVal();
        break;

    case 'mult':
        $calc->mult();
        $retVal = $calc->getRetVal();
        break;

    case 'avg':
        $calc->avg();
        $retVal = $calc->getRetVal();
        break;

}
$a = array('retVal' => $retVal);
header('Content-Type: application/json');
echo json_encode($a);
?>