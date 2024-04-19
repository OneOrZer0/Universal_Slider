
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

    //---- Tutaj numer aktywnego obrazka pobieram

    var images = $("#"+idBox+" img"); 

    var imgWithDisplayBlock = images.filter(function() {
      return $(this).css("display") === "block";
    });

    var idDisplay = imgWithDisplayBlock.attr("id");

    console.log("To jest id aktywnego obrazka: "+idDisplay);

    var parts = idDisplay.split("_");

    nowID = parts.pop();

    //---------------

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
