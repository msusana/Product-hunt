$(document).ready(function() {
    $(".like").on("click", function(){
        var id = this.id;

        $.ajax({                
            type : 'POST',
            url  : '/recuperation-donnees/up.php',
            data : {id:id},
            success : function(data){
                   ;
            }
        });
    });
});