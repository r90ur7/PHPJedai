<?php

    class ClassName {
        const CONST_VALUE = 'A constant value';
        public function __construct()
        {
            echo self::CONST_VALUE;
        }
    }

?>