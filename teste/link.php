<?php
function create_link($title, $url, $attributes = array())
{
    $o = "<a ";
    $o .= " href='" . $url . "'";
    if (!empty($attributes)) {
        foreach ($attributes as $key => $value) {
            $o .= " $key='" . $value . "'";
        }
    }
    $o .= '>' . $title . '</a>';
    return $o;
}
