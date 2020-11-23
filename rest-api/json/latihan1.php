<?php
//objek
$mahasiswa = [
    [
        "nama" => "Hadi",
        "nrp" => "183040066",
        "email" => "hadinasution262@gmail.com"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];

// objek -> json
$data = json_encode($mahasiswa);
echo $data;

