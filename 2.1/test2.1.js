var i = 1
var page_style = document.getElementById("block_menu")
function f1() {
   console.log(i);
   if (i == 0) {
      page_style.setAttribute("class", "block_plitka")
   }
   else {
      page_style.setAttribute("class", "block_spisok")
   }
   i++
   if (i == 2) {
      i = 0
   };
   console.log(i);
}

$(".add").click(function () {
   $.ajax({
      type: "POST",
      url: "test2.1.php",
      cache: false,
      success: function (tovar) {
         $("#block_menu").append(tovar)
      }
   })
})