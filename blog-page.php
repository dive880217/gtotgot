
<!doctype html>
<html lang="en">

<head>
  <title>Blog page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="./style/blog.css">
  <link rel="stylesheet" href="../../css/style.css">
 
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>


  <header class="header ">
    <div class="d-flex align-items-center justify-content-around">
      <div class="d-flex gap-5 align-items-center">
        <h3 class="m-0 text-main-color">HANDMADE |</h3>
        <a href="" class="logo"><img class="object-cover" src="../../img/HANDMADE - LOGO-03.png" alt=""></a>
      </div>


    </div>

  </header>



  <form action="do-edit-blog.php">
      <div class="container mt-5 text-center" style="">
        <div class="text-center text-center"> 發布於
          <?php

                $date=new DateTime($blog[0]["create_time"]);
                echo  $date->format('M-d-Y H:i:s');
            ?></div>

        <input type="text" class="d-none" value="<?=$blog[0]["id"]?>">
        <input type="text" name="blogTitle" class="blogTitleInput mt-5"  value="<?=$blog[0]["title"]?>">
        <h3 class="text-center my-4"></h3>
        <h5>by 黑色小花貓</h5>
        <div class="text-center my-4">
          <span class="badge bg-secondary"><?=$blog[0]["tag"]?></span>
          <span class="badge bg-secondary"><?=$blog[0]["category_name"]?></span>
          <span class="badge bg-secondary"><?=$blog[0]["name"]?></span>
        </div>
        <hr>

        <div>
       
        </div>


        <div name="" id="editor" cols="30" rows="10">
          <?php
            $newString=$blog[0]["content"];
            echo  $newString;
            ?> 

        </div>
      
      <input class="btn btn-main-color mt-3 btn-lg" id="save" name="submit_data" type="submit" value="修改文章">

      <div>營業時間 ：<?=$blog[0]["opening_hour"]?></div>
      <div>地址 ： <?=$blog[0]["address"]?></div>
      <div>電話 ： <?=$blog[0]["phone"]?></div>
      
      <a  href="<?=$blog[0]["FB_url"]?>"><i  class="fs-4 fab fa-facebook-square"></i></a>
      <a  href="<?=$blog[0]["IG_url"]?>"><i class="fs-4 fab fa-instagram-square"></i></a>
    </form>






  <div class=" d-flex gap-5 justify-content-around">
    <?php foreach($comments as $comment): ?>
        <div class="card my-5">
          <div class="card-header">
            留言
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><?=$comment["content"]?></p>
           
            <footer class="blockquote-footer d-flex justify-content-end my-3 gap-3"><?=$comment["name"]?>
              <p class="card-text"><small class="text-muted">
                    <?php
                    $time=new DateTime($comment["create_time"]);
                    echo $time->format('Y-m-d');
                    ?>
              </small></p>
            </footer>
            </blockquote>
          </div>
        </div>
    <?php endforeach; ?>
      </div>


    <script src="https://kit.fontawesome.com/1e7f62b9cc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/balloon/ckeditor.js"></script>

</body>
<script>

</script>

</html>


