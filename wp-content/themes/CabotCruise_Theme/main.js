//menu function

function toggleMenu() {

    document.getElementById("hamburgerBtn").classList.toggle("open");

    document.getElementById("primaryNav").classList.toggle("open");

}

var x = document.getElementById('hamburgerBtn');

x.onclick = toggleMenu; 


//Take the full path to this page and put it into a string variable.
var urlString = document.location.href;

//now split the array at forwardslash and keep the end part which is the page name "page.php"
var urlArray = urlString.split('/');

//subtract one becasue arrays are zero indexed
var pageHREF=urlArray[urlArray.length-1];
console.log('the final page HREF >>'+pageHREF);


//-----------------------------------------
if (pageHREF !=="") {

// Select all anchors in the unordered list with an ID of MainMenu
var menu = document.querySelectorAll('ul#primaryNav li a');

//-----------------------------------------
var i;
//loop through all the menu items in the navigation
for(i=0; i<menu.length; i++) {
// get the HREF of the anchor
var currentURL=(menu[i].getAttribute("href"));

if (currentURL===pageHREF) {
console.log('WE HAVE A MATCH');

// assign a class to the <li> (parent) of the anchor
menu[i].parentNode.className="active";
// Check to see if the PARENT menu item just activated is a <li>. If so assign a class of parent
if(menu[i].parentNode.parentNode.parentNode.tagName==='LI') {
menu[i].parentNode.parentNode.parentNode.className="parent";
}
} else {
//If the item is neither a child or parent, remove any class designation.
menu[i].parentNode.className="";
}
} // end of the search for a match

} // end of the empty page HREF