$(document).ready(function() {
    $(".like").on("click", function(){
        var id = this.id;
        let upVote = this

        $.ajax({                
            type : 'POST',
            url  : '/recuperation-donnees/up.php',
            data : {id:id},
            success : function(data){
                
                return data;
             }
        })
    })
});


function load_up(data){
      $('.like').load('/load/up2.php', function () {
           $(this).find(".like").replaceWith($(this).text());
      });
   }
   
/*
function autoLoad(){
    $.ajax({
    url: '/recuperation-donnees/affichage.php',
    success: function(data){
        $('.like').html(data);
    }
    });
}

$(document).ready(function()
{
    setInterval(autoLoad, 3000);
});*/