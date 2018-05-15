<?php

namespace LibCon\Collections;

use Countable;
use Traversable;

use LibCon\Collections\Properties\{Filterable, Mappable, Reducible};

/**
 * Base contract for all collections. Does not have any inherent order unless
 * one is determined by an inheriting interface. May or may not contain duplicates.
 * Bags and multisets should directly inherit from this interface.
 *
 * @package LibCon\Collections
 */
interface Collection extends Traversable, Countable, Filterable, Mappable, Reducible
{

    public function isEmpty() : bool;

}
