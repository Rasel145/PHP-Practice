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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .container{
            background-color: gray;
            display: flex;
        }
        .team-member{
            padding: 10px ;
            img{
                height: 200px;
            }
            h3{
                text-align: center;
            }
            p{
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="team">
        <div class="container">
        <?php foreach($developers as $item):
            if($item['gender']=="Male") :
            ?>
        <div class="team-member">
        <img src="<?php echo $item['photo']?>" alt="">
        <h3><?php echo $item['name']?></h3>
        <p><?php $item['phone'] ?></p>
        <p><?php echo $item['skill']?></p>
        <p><?php echo $item['location']?></p>
        <p><?php echo $item['gender'] ?></p>
        </div>
        <?php
    endif; endforeach; ?>
      
        </div>
    </div>
</body>
</html>




    


