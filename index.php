<?php
    require_once './vendor/autoload.php';
    use \Wsdl2PhpGenerator\Generator;

    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => 'http://localhost:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_ger_relatorio?wsdl',
            'outputDir' => 'D:/senior/temp/wsdl/',
			'namespaceName' => 'App\Service\Relatorio'
        ))
    )
?>