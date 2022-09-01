<?php

class Helpers
{
    public  function includeTemplate($name, array $data = [])
    {
        $name = __DIR__ . '/../templates/'.$name;
        $result = '';

        if (!is_readable($name)) {
            return $result;
        }

        ob_start();
        extract($data);
        require $name;

        $result = ob_get_clean();

        return $result;
    }
}