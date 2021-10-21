$(document).ready(function (e) {
  
 $(".btn_change").on("click", function (e) {
   e.preventDefault();
   $.ajax({
     url: "chitiet.php",
     type: "POST",
     data: new FormData(this),
     contentType: false,
     cache: false,
     processData: false,

     success: function (data) {
         $(".daitas").html(data);
        
       
     },
   });
 });
});
