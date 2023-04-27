
function gowhatsapp()
 {

var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var text = document.getElementById("text").value;
 
     var url = "https://wa.me/917207080232?text="
         + "*Name:* " + name + "%0a"
         + "*Mail:* " + mail + "%0a"
         + "*Text:* " + text + "%0a"
     window.open(url, '_blank').focus();
 
    
}