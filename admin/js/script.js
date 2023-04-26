function book()
{
  var checkin = document.getElementById("checkin").value;
  var checkout = document.getElementById("checkout").value;
  var person = document.getElementById("person").value;
  var children = document.getElementById("children").value;

var url= "https://wa.me/+919391742895?text="
+"*Checkin :* "+checkin+"%0a"
+"*Checkout :* "+checkout+"%0a"
+"*Person :* "+person+"%0a"
+"*Children :* "+children+"%0a"


window.open(url,'_blank').focus();

}