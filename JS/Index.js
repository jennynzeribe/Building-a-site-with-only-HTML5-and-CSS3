$(document).ready(function(){
  $(".btn").click(function(){
    $(".modal").css("display", "block"); 
  })

  $(".close").click(function(){
    $(".modal").css("display", "none"); 
  })
});