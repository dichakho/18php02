 function validate () {
    var inpName = document.getElementById("name");
    var inpEmail = document.getElementById("email");
    var inpPhone = document.getElementById("phone");
    var inpDayin = document.getElementById("dayin");
    var inpDayout = document.getElementById("dayout");
    var inpAdults = document.getElementById("adults");
    var inpChildren = document.getElementById("children");
    if (!inpName.checkValidity()) {
        document.getElementById("vldname").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpEmail.checkValidity()) {
        document.getElementById("vldemail").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpPhone.checkValidity()){
        document.getElementById("vldphone").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpDayin.checkValidity()){
        document.getElementById("vlddayin").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpDayout.checkValidity()){
        document.getElementById("vlddayout").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpAdults.checkValidity()){
        document.getElementById("vldadults").innerHTML = "vui long nhap vao o nay";
    }
    else if (!inpChildren.checkValidity()){
        document.getElementById("vldchildren").innerHTML = "vui long nhap vao o nay";
    }
}
document.getElementById('submit').onclick=function () {
    var x = document.getElementById('adults').value;
    var y = document.getElementById('children').value;
    if (x<y){
        alert("số trẻ em phải nhỏ hơn hoặc bằng người lớn");
    }
}