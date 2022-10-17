function dropdown(){
  var dropdown = document.getElementById("dropdown");      // this will make a variable pointing towards a element with id="dropdown"
  if (dropdown.style.visibility == "hidden"){                   // if the menu is invisible 

    dropdown.style.visibility = "visible";          //makes the menu visible
  
  } else{

    dropdown.style.visibility = "hidden";        // will hide the dropdown menu
  }
}