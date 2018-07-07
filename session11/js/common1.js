document.getElementById("btn").onclick = function() {
    var checkbox = document.getElementsByName("gender");
    for(var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
            var a = checkbox[i].value;
            console.log(a);
            alert("ban da chon: " + a);
        }
    }
}