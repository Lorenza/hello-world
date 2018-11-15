<?php 
namespace HelloWorld;
class SayHello
{
    public static function world()
    {
        return 'hello world, composer!';
    }

    public static function upperCaseWorld()
    {
        return strtoupper(self::world());
    }

    public static function ucWordsWorld()
    {
        return ucwords(self::world());
    }
}


