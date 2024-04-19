<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <script src="./bootstrap/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./oneOrZer0_Slider.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./oneOrZer0_Slider.js" type="text/javascript"></script>
</head>
<body>
  <article>

    <div class=".container">
      <div class="row noMarg">

        <div class="col-6 folder-box">
          <div class="row noMarg">
            <div class="col-4 noPadd">
              <div class="title-bar">
                Zdjęcia_z_wakacji
              </div>
            </div>
            <div class="col-8 noPadd">

            </div>
            <div class="col-12 noPadd">
              <div class="folder-bar">

                <div class="button-bar-box">
                  <div id="galeriaA" data-step="back" class="col-4 noPadd arrowSlider bar-arrow">
                    <
                  </div>

                  <div id="galeriaA" data-step="next" class="col-4 noPadd arrowSlider bar-arrow">
                    >
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 noPadd">
              <div class="photoBox">
                <div id="galeriaA">
                  <?php

                    require_once 'database.php';

                    $showPhoto=$db->query('SELECT link_photo FROM photos WHERE category=2');

                    if($showPhoto->rowCount()>0){

                      $showP = $showPhoto->fetchAll();

                      $counter = 0;

                      foreach($showP as $sp){

                        if($counter==0){
                          
                          echo '<img id="" style="display: block;" src="uploads/'.$sp['link_photo'].'" alt="">';
                        
                        }else{

                          echo '<img id="" style="display: none;" src="uploads/'.$sp['link_photo'].'" alt="">';

                        }
                        
                        
                        $counter++;
                      }

                    }else{

                    }

                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 folder-box">
          <div class="row noMarg">
            <div class="col-4 noPadd">
              <div class="title-bar">
                Zdjęcia_z_wakacji
              </div>
            </div>
            <div class="col-8 noPadd">

            </div>
            <div class="col-12 noPadd">
              <div class="folder-bar">

                <div class="button-bar-box">
                  <div id="galeriaB" data-step="back" class="col-4 noPadd arrowSlider bar-arrow">
                    <
                  </div>

                  <div id="galeriaB" data-step="next" class="col-4 noPadd arrowSlider bar-arrow">
                    >
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 noPadd">
              <div class="photoBox">
                <div id="galeriaB">
                  <?php

                    require_once 'database.php';

                    $showPhoto=$db->query('SELECT link_photo FROM photos WHERE category=2');

                    if($showPhoto->rowCount()>0){

                      $showP = $showPhoto->fetchAll();

                      $counter = 0;

                      foreach($showP as $sp){

                        if($counter==0){
                          
                          echo '<img id="" style="display: block;" src="uploads/'.$sp['link_photo'].'" alt="">';
                        
                        }else{

                          echo '<img id="" style="display: none;" src="uploads/'.$sp['link_photo'].'" alt="">';

                        }
                        
                        
                        $counter++;
                      }

                    }else{

                    }

                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </article>
</body>
</html>

<!-- <script>
  $(document).ready(function(){

    var step;
    var nowID=1;
    var parentID;

    $('.arrowSlider').click(function(){

      var idBox = $(this).attr('id');
      var maxID=$('#'+idBox+' img').length;

      $('#'+idBox+' img').each(function(index){

        $(this).attr('id', idBox+'_img_'+(index + 1));

      });
      
      parentID = $(this).attr('id');

      console.log(parentID);

      step = $(this).data('step');

      console.log(step);
      console.log(maxID);

      if(step=="next"){

        $('#'+idBox+'_img_'+nowID).css('display', 'none');

        console.log(idBox+'_img_'+nowID);

        nowID++;

        if(nowID>maxID){

          nowID = 1;

        }else{

        }

        $('#'+idBox+'_img_'+nowID).css('display', 'block');

      }else if(step=="back"){

        $('#'+idBox+'_img_'+nowID).css('display', 'none');

        nowID--;

        if(nowID<1){

          nowID = maxID;

        }else{

        }

        $('#'+idBox+'_img_'+nowID).css('display', 'block');

      }else{

      }

    });

  });
</script> -->