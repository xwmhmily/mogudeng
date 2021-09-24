<?php

$text = $_GET['text'];

echo file_get_contents("http://116.62.138.92:9502/nlp/parse?text=".$text);