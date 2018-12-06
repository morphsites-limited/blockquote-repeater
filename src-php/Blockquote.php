<?php

namespace Dewsign\BlockquoteRepeater;

use Illuminate\Database\Eloquent\Model;
use Dewsign\NovaRepeaterBlocks\Traits\IsRepeaterBlock;

class Blockquote extends Model
{
    use IsRepeaterBlock;

    protected $table = 'nrb_blockquotes';

    public static $repeaterBlockViewTemplate = 'blockquote-repeater::blockquote';
}
