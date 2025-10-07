



function slideup()
{
    $("#cartshow").slideUp();
    }



function slidedown(){
    
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();

}
    


    // Search
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
        
      } else {
        li[i].style.display = "none";
      }
    }
  }

  function searchbar()
  {
    document.getElementById("myMenu").style.visibility="visible";
    $("#myMenu").slideDown();
    document.getElementById("service").style.cssText=({"margin-top":"5%"});
    
    
  }
  function searchicons()
{
    document.getElementById("mySearch").style.visibility="visible";
    document.getElementById("solidcross").style.visibility="visible";
    $("#mySearch").slideDown();
    $("#solidcross").slideDown();
  

}
  function searchbarup()
{
    $("#myMenu").slideUp();
    $("#mySearch").slideUp();
    $("#solidcross").slideUp();
    document.getElementById("service").style.cssText=({"margin-top":"-7%"});
    }

   




