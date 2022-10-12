<?php
$data = file_get_contents("https://doa-doa-api-ahmadramadhan.fly.dev/api");
$doa = json_decode($data);

$list = "<h3>Kumpulan Doa Sehari-hari</h3>";
for ($i = 0; $i < count($doa); $i++) {
    $id = $i + 1;
    $list .= "<ol>
				<li style=list-style:none;>{$id}. {$doa[$i]->doa}</li>
				<ul style=list-style:square;><li>{$doa[$i]->ayat}</li>
					<li>{$doa[$i]->latin}</li>
					<li>{$doa[$i]->artinya}</li></ul>
				</ol>";
}
echo $list;
