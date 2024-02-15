<?php
//  __class_: return Class name ;
class Fruits
{
    public function myValue()
    {
        return __CLASS__;
    }
}

$bana = new Fruits();
echo $bana->myValue();

// __DIR__: return directory of the file;

class DirPath
{
    public function Dir()
    {
        return __DIR__;
    }
}

$path = new DirPath();
echo $path->Dir();

class Direc
{
    public function Path()
    {
        return __LINE__;
    }
}

$line = new Direc();
echo $line->Path();