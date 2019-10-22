<?php


class postSaver
{
    public function saveMessage()
    {
        $date = date("Y-m-d H:i:s");

        $arrayMessage = array('name' => strip_tags(trim($_POST['name'])),                                               //strip_tags => strip out all HTML and PHP tags from a given string
                              'message' => strip_tags(trim($_POST['message'])),                                         //trim => remove whitespace before and after string
                              'title' => strip_tags(trim($_POST['title'])),
                              'date' => $date);

        $writeMessage = json_encode($arrayMessage);

        $fh = fopen('assets/messages.json', 'a+');
        fwrite($fh, $writeMessage);  //fopen permission denied error??
        fclose($fh);

        //APPEND => 1 ding toevoegen aan file/array
    }

}

/*
               // DONT DO THIS SHIT, herschrijft de hele file!!!
       public function saveMessage()
       {
           $arrayMessage = array('name' => strip_tags(trim($_POST['name'])),                                             //strip_tags => strip out all HTML and PHP tags from a given string
               'message' => strip_tags(trim($_POST['message'])),                                                         //trim => remove whitespace before and after string
               'title' => strip_tags(trim($_POST['title'])),
           );
           $data = json_decode(file_get_contents("assets/messages.json"), true);                                         //get contents json file
           array_push($data, $arrayMessage);                                                                             //push message into json file array
           $data = json_encode($data);                                                                                   //encode json file with new data in array
           file_put_contents("messages.json", $data);


       }   */