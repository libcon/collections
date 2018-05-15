<?php

namespace LibCon\Collections;

use LibCon\Collections\Properties;

/**
 * Contract for sequences, also known as lists. Has an inherent order and provides
 * methods to access elements by index number, as well as search for elements in
 * the sequence.
 *
 * @package LibCon\Collections
 */
interface Sequence extends Collection, Properties\Sortable
{

}
