<?php
namespace Gpcrocker88\Util;


class ConfLoader
{
    const CONF_FNAME  = __DIR__."/../config.ini";
    private $conf;

    /**
 *      * ConfLoader constructor.
 *           */
    public function __construct($conf_file=null)
    {
        if(empty($conf_file)) {
            $this->conf = parse_ini_file(self::CONF_FNAME, true);
        }else{
            $this->conf = parse_ini_file($conf_file, true);
        }
    }


    public function getDBInfo()
    {
        return $this->conf["db"];
    }

}

