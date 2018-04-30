<?php

namespace LibCon\Collections;


interface Collection extends \Traversable, \Countable
{

    public function isEmpty() : bool;

}