<?php 

    function entidades_texto($texto){
        $apikey = 'token_key';

        require_once('TextRazor/TextRazor.php');


        TextRazorSettings::setApiKey($apikey);

        $text = $texto;
        $textrazor = new TextRazor();

        $textrazor->addExtractor('entities');

        $response = $textrazor->analyze($text);
        if (isset($response['response']['entities'])) {
            foreach ($response['response']['entities'] as $entity) {
                print( $entity['entityId']);
                print(PHP_EOL);
            }
        }
    } 


    function topicos_texto($texto){
        $apikey = 'token_key';

        require_once('TextRazor/TextRazor.php');


        TextRazorSettings::setApiKey($apikey);

        $text = $texto;
        $textrazor = new TextRazor();

        $textrazor->addExtractor('topics');

        $response = $textrazor->analyze($text);
        if (isset($response['response']['topics'])) {
            foreach ($response['response']['topics'] as $entity) {
                /*print( $entity['score']);
                print(PHP_EOL);*/

                if($entity['score'] == 1){
                    print($entity['label']);
                    print(PHP_EOL);
                }
            }
        }
    } 



    ?>