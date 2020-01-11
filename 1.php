<?php 
function json($name, $age){
  $biodata = [
    "name" => "$name",
    "age" => $age,
    "address" => "Jl Soekarno Hatta Gg.Pusri No 35",
    "hobbies" => [
      "Playing Guitar",
      "Coding"
    ],
    "is_married" => false,
    "list_school" => [
        [
        "name" => "SD Al-Basyariyah",
        "year_in" => "2006", 
        "year_out" => "2012", 
        "major" => null
        ],
        [
        "name" => "SMP 25 Kota Bandung",
        "year_in" => "2012", 
        "year_out" => "2015", 
        "major" => null
        ],
        [
        "name" => "SMK Informatika Bandung",
        "year_in" => "2015", 
        "year_out" => "2018", 
        "major" => "Rekayasa Perangkat Lunak"
      ]
    ],
    "skill" => [
      [
        "skill_name" => "Html5",
        "level" => "95%"
      ],
      [
        "skill_name" => "CSS3",
        "level" => "90%"
      ],
      [
        "skill_name" => "JavaScript",
        "level" => "80%"
      ],
      [
        "skill_name" => "PHP",
        "level" => "85%"
      ],
      [
        "skill_name" => "Bootstrap 4",
        "level" => "95%"
      ],
      [       
        "skill_name" => "CodeIgniter",
        "level" => "80%"
      ],
      [
        "skill_name" => "Laravel",
        "level" => "80%"
      ]
    ],
    "interest_in_coding" => "Very Hight"
  ];
  return $biodata;
}

  $data = json_encode(json("Karunia Andrian Saputra", 19));
  echo $data;
?>