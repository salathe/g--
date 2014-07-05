<?php

$colours = array('Green');
$traits = array('Value', 'Cheap', 'Cloud', 'Fast', 'Power', 'Lowend', 'Solar', 'Hybrid', 'RAM', 'Open');
$items = array('Node', 'Box', 'VPS', 'VM', 'Servers', 'Host');

$generator = function () use ($colours, $traits, $items) {
    $a = $colours[array_rand($colours)];
    $b = $traits[array_rand($traits)];
    $c = $items[array_rand($items)];
    return array($a, $b, $c);
};

$name = $generator();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.5.0/pure-min.css">
    <style type="text/css">
    html, body { height: 100%; }
    body {  display: table; width: 100%; }
    h1 { display: table-cell; vertical-align: middle; text-align: center; font-size: 4rem; }
    .a { color: #999; }
    .b, .c { color: #333; text-decoration: underline; }
    </style>
</head>
<body>
<h1>
    <span class="a"><?php echo $name[0] ?></span><span class="b"><?php echo $name[1] ?></span><span class="c"><?php echo $name[2] ?></span>
</h1>
</body>
</html>
