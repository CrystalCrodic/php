<?php

$data = file_get_contents("https://www.24h.com.vn/");

// echo $data;

//echo $content;
$pattern = '/<h3>.*<\/h3>/imsU';
preg_match_all($pattern, $data, $arr);
// print_r($arr);

?>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Thông Tin</th>
    </tr>
    <?php
    foreach ($arr as $row) {
        $index = 0;
        foreach ($row as $value) {
            $index++;
    ?>
            <tr>
                <td><?= $index ?></td>
                <td><?= $value ?></td>
            </tr>
    <?php
        }
    }
    ?>
</table>