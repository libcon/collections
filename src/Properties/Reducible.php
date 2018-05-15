<?php

namespace LibCon\Collections\Properties;

use LibCon\Collections\Collection;

interface Reducible
{

    public function reduce(callable $reducer, $initial = null) : Collection;
}
