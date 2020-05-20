$(document).ready(function() {

  $.ajax({
    url : "database.php",
    success : function(data){
      // Retrieve the template data from the HTML (jQuery is used here).
      var template = $('#entry-template').html();

      // Compile the template data into a function
      var templateScript = Handlebars.compile(template);


      for (var i = 0; i < data.length; i++) {
        var context = { "poster" : data[i].poster, "title" : data[i].title , "author" : data[i].author ,  "year" : data[i].year};

        var html = templateScript(context);

        // Insert the HTML code into the page
        $(".cds-container").append(html);
      }
    }
  })




});
