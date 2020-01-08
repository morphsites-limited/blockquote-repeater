<?php

namespace Dewsign\BlockquoteRepeater;

use Illuminate\Database\Eloquent\Model;
use Dewsign\NovaRepeaterBlocks\Traits\IsRepeaterBlock;
use Dewsign\NovaRepeaterBlocks\Traits\CanBeContainerised;

class Blockquote extends Model
{
    use IsRepeaterBlock;
    use CanBeContainerised;

    protected $table = 'nrb_blockquotes';

    public static $repeaterBlockViewTemplate = 'blockquote-repeater::blockquote';
}
