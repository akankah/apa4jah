(function() {
  var api = "https://ipinfo.io?callback=?";
  $("#ip_content").html("Waiting...");
  $.getJSON( api, { 
    format: "jsonp"
  })
  .done(function( response ) 
  {
     var result = ""
    
    // show all the props returned
    for (var prop in response)
    {
        result += prop + ": " + response[prop] + "<br>";
    } 
  
    // set the new values 
    $("#ip_content").html(result);
         
      console.log(response);
  });
})();
