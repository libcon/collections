<?php

namespace LibCon\Collections\Properties;

use LibCon\Collections\Collection;

interface Sortable
{

    public function sort(callable $sorter) : Collection;
}
