
<?php 
include_once 'UrlMeta.class.php';
$status='danger';
$url='';

if(isset($_POST['url'])){ 
    $url = $_POST['url']; 
     
    try{ 
        // Initialize URL meta class 
        $urlMeta = new UrlMeta($url); 
         
        // Get meta info from URL 
        $metaDataJson = $urlMeta->getWebsiteData(); 
         
        // Decode JSON data in array 
        $metaData = json_decode($metaDataJson); 
    }catch(Exception $e){ 
        $statusMsg = $e->getMessage(); 
    } 
} 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<?php if(!empty($statusMsg)){ ?>
<div class="alert alert-<?php echo $status;?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>




<form method="post" action="" class="form">
<!---->
<div class="card" style="width:21%; height: 150px;">
  <div class="card-body">
  <div class="form-group">
        <label>Web Page URL:</label>
        <input type="text" class="form-control" name="url" value="" required="">
    </div>
    <div class="form-group" >
        <input type="submit" class="form-control btn btn-primary" name="submit" value="Extract"/>
    </div>
  </div>

  <?php if(!empty($metaData)){ ?>

        <img src="<?php echo $metaData->image; ?>" class="card-img-top" alt="link preview image">
        <h5 class="card-title"><?php echo $metaData->title; ?></h5>
        <p class="card-text"><?php echo $metaData->description; ?></p>
        <a href="<?php echo $metaData->url; ?>" class="btn btn-primary" target="_blank">Visit site</a>

<?php } ?>  
</div>
</form>

</body>
</html>