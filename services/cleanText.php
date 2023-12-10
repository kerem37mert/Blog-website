<?php

function cleanText($text)
{
    return trim(htmlspecialchars($text));
}