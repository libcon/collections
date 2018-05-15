<?php

namespace LibCon\Collections\Properties;

use LibCon\Collections\Collection;

interface Mappable
{

    public function map(callable $mapper) : Collection;
}
