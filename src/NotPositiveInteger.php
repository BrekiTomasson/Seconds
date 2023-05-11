<?php

namespace Breki;

class NotPositiveInteger extends \Exception
{
    public function __construct($value)
    {
        parent::__construct("Value {$value} is not a positive integer.");
    }
}