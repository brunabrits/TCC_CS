document.getElementById("btn_open").addEventListener("click", open_close_menu);

var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

      function open_close_menu(){
          body.classList.toggle("body_move");
          side_menu.classList.toggle("menu_side_move");
      }