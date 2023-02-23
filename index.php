<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='container'>
        <h1 style='text-align:center; margin:0;'><?php
           if (isset($_POST['sub'])) {
            echo "You submitted";
            }else{
            echo "You don't submitted";
            };
        ?></h1>
        <form action="" id='f' method='post' style='width:100%; height:100%;'>
        <input type="text" name='filename' placeholder='Filename'/>
        <textarea name="txt" id="txt" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit" id='btn' name='sub'/>
        </form>
        <a href="all.php">Click here!</a>
    </div>
    <?php
    if(isset($_POST['sub'])){
        $btn=$_POST['sub'];
    }else{
        $btn='Nothing set';
    };
    if(isset($_POST['filename'])){
        $fname=$_POST['filename'].'.html';
    }else{
        $fname='';
    };
    if(isset($_POST['txt'])){
        $content=$_POST['txt'];
    }else{
        $content='';
    };
    $sxaltext='GNA';
    if(isset($_POST['txt']) && isset($_POST['filename']) && $_POST['filename']!='' && $_POST['txt']!=''){
        $mshakum=fopen($fname,'w') or die($sxaltext);
        fwrite($mshakum,$content);
        fclose($mshakum);
    }else if(isset($_POST['txt']) && isset($_POST['filename']) && $_POST['filename']=='' && $_POST['txt']==''){
        echo 'ERROR';
    };
    ?>
</body>
</html>