<?php

namespace LibCon\Collections\Properties;


use LibCon\Collections\Collection;

interface Filterable
{

    public function filter(callable $filter) : Collection;

}