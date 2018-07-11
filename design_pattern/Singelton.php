<?php

final class UserFactory
{
    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    static $inst = null;

    public static function Instance()
    {

        if (Self::$inst === null) {
            Self::$inst = "game";
        }
        return Self::$inst;
    }

    public static function setName($name)
    {
        Self::$inst = $name;
    }

    /**
     * Private ctor so nobody else can instantiate it
     *
     */


    private function __construct()
    {

    }

}

//$u=UserFactory->game();
echo $u = UserFactory::Instance();
UserFactory::setName("zulfiqar");
echo $u = UserFactory::Instance();