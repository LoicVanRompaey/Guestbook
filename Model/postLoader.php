<?php

class postLoader
{


    public function loadMessages(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('assets/messages.json'), true);
        foreach ($json AS $postJson) {
            $list[] = new Post($postJson['title'], $postJson['date'], $postJson['message'],$postJson['name'] );
        }
        $reverselist= array_reverse($list);
        return $reverselist;
    }


}




