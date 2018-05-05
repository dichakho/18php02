var imgArr=[];
var count=0;
function loadImage() {
    for (var i=1; i<5 ; i++)
    {
        imgArr[i]= new Image();
        imgArr[i].src="imgs/slide"+i+".jpg"
    }
}
function next() {
    count++;
    if (count>4){
        count=0;
    }
    document.getElementById("images").src=imgArr[count].src;
}
function back() {
    count--;
    if (count<0){
        count=4;
    }
    document.getElementById("images").src=imgArr[count].src;
}