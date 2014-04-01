<?php

namespace Stack;

function lazy($factory)
{
    return new LazyHttpKernel($factory);
}
