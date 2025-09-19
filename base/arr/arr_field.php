<?php

$pd = array("fee_fixed"=>1.1, "fee_percentage"=>0.2);
$data = array();

print_r($data);
print_r($pd);

$data['meta'] = $pd;
$data['meta']['agent'] = $pd;
$data['meta']['vendor'] = $pd;

print_r($data);
