<?php
$developers =[[
    "name"      => "Rasel",
    "age"       => 25,
    "gender"    => "Male",
    "skill"     => "PHP Developer",
    "location"  =>"Badda",
    "photo"     =>"https://powerpackelements.com/wp-content/uploads/2017/11/Team-memeber-01.png",
    "phone"     =>"01862530380"
],[
    "name"      => "John",
    "age"       => 25,
    "gender"    => "Male",
    "skill"     => "JavaScript Developer",
    "location"  =>"Mirpur",
    "photo"     =>"https://img.freepik.com/free-photo/confident-entrepreneur-looking-camera-with-arms-folded-smiling_1098-18840.jpg?semt=ais_hybrid&w=740&q=80",
    "phone"     =>"01862530380"
],[
    "name"      => "Rakib",
    "age"       => 25,
    "gender"    => "Male",
    "skill"     => "Python Developer",
    "location"  =>"Gulshan",
    "photo"     =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbQg_ISwwljpWFF9kNu8aifEqQYq5v634HhA&s",
    "phone"     =>"01862530380"
],
[
    "name"      => "Anika",
    "age"       => 23,
    "gender"    => "Female",
    "skill"     => "IOS Developer",
    "location"  =>"Bashundhara",
    "photo"     =>"https://www.shutterstock.com/image-photo/confident-businesswoman-smiles-during-meeting-260nw-2587270721.jpg",
    "phone"     =>"01862530380"
]
];

$data = json_encode($developers);
echo "$data";

setcookie('developers',$data,time()+60*60);

$dev =$_COOKIE['developers'];
file_put_contents('dev.json',$dev);





?>