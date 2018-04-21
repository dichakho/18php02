//math.floor lấy số nguyên
//math.random lấy số ngẫu nhiên
var x=Math.floor(Math.random()*10);
var y=Math.floor(Math.random()*10);
if (x % y == 1){
    document.write("ONE");
}
else if(x % y == 2){
    document.write("TWO");
}
else if (x % y ==3){
    document.write("THREE");
}
else {
    document.write("OTHER");
}
