<?php

namespace RectorPrefix20211109;

if (\class_exists('t3lib_pageSelect_getPageHook')) {
    return;
}
class t3lib_pageSelect_getPageHook
{
}
\class_alias('t3lib_pageSelect_getPageHook', 't3lib_pageSelect_getPageHook', \false);
