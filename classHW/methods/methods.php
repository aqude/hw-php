<?php

class methods
{
    public function getInfo(array $properties)
    {
        foreach ($properties as $key => $value) {
            echo "$key => $value\n";
        }
    }
    public function getarr(array $properties)
    {
        foreach ($properties as $value) {
            echo "$value\n";
        }
    }
}