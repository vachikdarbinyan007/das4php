<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    padding-inline:6%;
    background-image: url('https://th.bing.com/th/id/R.63d15de5ea16b742459177e68f8d84b6?rik=cuOMR%2bOmiM2AJA&pid=ImgRaw&r=0');
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    	}
        #container{
    width: 100%;
    height: 97vh;
    background-color: rgba(5, 5, 245, 0.644);
    backdrop-filter: blur(4px);
    border-radius: 35px;
    display: flex;
    gap:35px;
    align-items: center;
    justify-content: space-around;
    }
    </style>
</head>
<body>
    <div id='container'>
    <?php
    $dir=opendir("./");
    $arr;
    $array=array();
        $i=0;
    while(($f=readdir($dir))!==false){
        $ste= explode(".",$f);   
        array_push($array,$ste[0]);
        $i++;
        };

    for($g=2;$g<$i;$g++){
            if($g!==$i-1){
                echo "<div style='width:20%; height:35vh; background:green;'>
                "."<a href='index.php'>Home</a>".$array[$g]."</div>";
            }else{
                echo "<div style='width:20%; height:35vh; background:red;'>
                ".
                $array[$g]
                ."</div>";
            };
        };

    closedir($dir);
    ?>
    </div>
    
</body>
</html>