

function slideup()
{
    $("#cartshow").slideUp();
    }



function slidedown(){
    
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();

}
    // orange 
function orangeshow(){
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();
    document.getElementById("orashow").style.visibility="visible";
    alert("added in cart");
    
}

function orangeremove(){
    document.getElementById("orashow").style.visibility="hidden";
    alert("removed from cart");
}
        // lime
function limeshow(){
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();
    document.getElementById("limeshow").style.visibility="visible";
    alert("added in cart");
}

function limeremove(){
    document.getElementById("limeshow").style.visibility="hidden";
    alert("removed from cart");
}

        // watermelon

function watermelonshow()
{
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();
    document.getElementById("watermelonshow").style.visibility="visible";
    alert("added in cart");
}
        
function watermelonremove()
{
    document.getElementById("watermelonshow").style.visibility="hidden";
    alert("removed from cart");
}

        // strawberry
function strawberryshow()
{
    document.getElementById("cartshow").style.visibility="visible";
    $("#cartshow").slideDown();
    document.getElementById("strawberryshow").style.visibility="visible";
    alert("added in cart");
}

function strawberryremove()
{
    document.getElementById("strawberryshow").style.visibility="hidden";
    alert("removed from cart");
}

        // Pomagranate

 function Pomagranateshow()
{
document.getElementById("cartshow").style.visibility="visible";
$("#cartshow").slideDown();
document.getElementById("Pomagranatesshow").style.visibility="visible";
alert("added in cart");
}

function Pomagranateremove()
{
document.getElementById("Pomagranatesshow").style.visibility="hidden";
alert("removed from cart");
}

        // broccoli
function broccolishow()
{
document.getElementById("cartshow").style.visibility="visible";
$("#cartshow").slideDown();
document.getElementById("broccolisshow").style.visibility="visible";
alert("added in cart");
}

function broccoliremove()
{
document.getElementById("broccolisshow").style.visibility="hidden";
alert("removed from cart");
}

            // spinach

function sipachshow()
{
document.getElementById("cartshow").style.visibility="visible";
$("#cartshow").slideDown();
document.getElementById("spinachcsshow").style.visibility="visible";
alert("added in cart");
}
            
function spinachremove()
{
document.getElementById("spinachcsshow").style.visibility="hidden";
alert("removed from cart");
}

    // lettuce
function lettuceshow()
{
document.getElementById("cartshow").style.visibility="visible";
$("#cartshow").slideDown();
document.getElementById("lettucesshow").style.visibility="visible";
alert("added in cart");
}
            
function lettuceremove()
{
document.getElementById("lettucesshow").style.visibility="hidden";
alert("removed from cart");
}

    // redonionshow
function onionshow()
{
document.getElementById("cartshow").style.visibility="visible";
$("#cartshow").slideDown();
document.getElementById("redonionshow").style.visibility="visible";
alert("added in cart");
}
            
function onionremove()
{
document.getElementById("redonionshow").style.visibility="hidden";
alert("removed from cart");
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

   




