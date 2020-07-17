var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function(){
  addAlbum();
});


function addAlbum(){
  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function (data) {

        for (var i = 0; i < data.length; i++){
          var source = $("#template").html();
          var template = Handlebars.compile(source);
          var context = {
            poster: data[i].poster,
            title: data[i].title,
            author: data[i].author,
            year: data[i].year,
          };

          var html = template(context);
          $("main .container").append(html);
        }
      },
      error: function () {
        alert("E' avvenuto un errore. ");
      }
    }
  );
};
