
function changeImage(a) {
    var a=document.getElementById('gender').value;
    if(a==1)
    {
        document.getElementById('name').style.color='red';
        document.getElementById('avatar').src="imgs/maleava.png";
        if(document.getElementById('age')>1997){
            ocument.getElementById('name').style.color='green';
        }
    }
    else{
        document.getElementById('name').style.color='red';
        document.getElementById('avatar').src="imgs/femaleava.png";
        if(document.getElementById('age')>1997){
            ocument.getElementById('name').style.color='green';
        }
    }
}
function onClick1() {
    var x = document.getElementById('hobbymale');
    x.style.display = 'block';
}
function onClick2() {
    var x = document.getElementById('hobbyfemale');
    x.style.display = 'block';

}