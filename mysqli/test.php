<?php

final class UserFactory
{
	public $a;
    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function Instance($f)
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new UserFactory($f);
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instantiate it
     *
     */
    private function __construct()
    {
    $this->a=7;
    }
	public function getVar(){
		return $this->a;
	}
}
$fact = UserFactory::Instance(7);
echo $fact->getVar();
$fact2 = UserFactory::Instance(9);
echo $fact2->getVar();
?>