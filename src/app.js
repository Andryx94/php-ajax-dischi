var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function(){
  addAlbum();

  //avvio funzione al cambio opzione select
    $(".select").change(function(){
      var genere = $(this).val();
      console.log(genere);
      $(".disc-list .disc").hide();
      $(".disc-list .disc." + genere).show();
    })
});

function addAlbum(){
  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function (data) {
        var source = $("#template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < data.length; i++){
          var html = template(data[i]);
          $(".disc-list").append(html);
        }
      },
      error: function () {
        alert("E' avvenuto un errore. ");
      }
    }
  );
};
