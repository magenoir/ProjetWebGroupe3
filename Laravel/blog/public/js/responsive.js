function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  
  function mysndFunction() {
      var x = document.getElementById("2ndNavbar");
      if (x.className === "2ndbar") {
          x.className += " responsive";
      } else {
            x.className = "2ndbar";
      }
  }