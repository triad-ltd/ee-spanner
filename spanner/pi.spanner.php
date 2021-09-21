<?php

class Spanner
{
    public $return_data;
    public function __construct($str = '')
    {
        $expression = "/(@)(.+)(@)(.*)(@@)/mU";
        $replacement = '<span class="${2}">${4}</span>';

        $str = ($str == '') ? ee()->TMPL->tagdata : $str;

        $replaced = preg_replace($expression, $replacement, $str);

        $this->return_data = $replaced;
    }
}