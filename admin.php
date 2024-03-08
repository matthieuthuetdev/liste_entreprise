<?php
foreach($_POST as $index => $value){
    trim($value);
    ${$index} = $value

}