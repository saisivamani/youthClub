function contact()
{
    var name = document.getElementById("name").value;
    var mail = document.getElementById("mail").value;
    var text = document.getElementById("text").value;

    var url="https://wa.me/+919391742895?text="
    +"*Name :* "+name+"%0a"
    +"*Email :* "+mail+"%0a"
    +"*Text :* "+text+"%0a"

    window.open(url,'_blank').focus();
}