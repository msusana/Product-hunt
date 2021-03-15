$(document).ready(function(){
    $('#search').focus()
  
    $('#search').on('keyup', function(){
      var search = $('#search').val()
      $.ajax({
        type: 'POST',
        url: '/recuperation-donnees/search.php',
        data: {'search': search}
      })
      .done(function(result){
        $('#result').html(result)
      })
      .fail(function(){
        alert('Il y a eu une erreur')
      })
    })
  })
