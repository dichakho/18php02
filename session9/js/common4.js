var x = 10;
var y = 6;
function sum(x ,y) {
    return x + y;
}
function eliminate() {
    return x - y;
}
function multi() {
    return x * y;
}
function div() {
    return x / y;
}
function mod() {
    return x % y;
}
document.write(sum(x, y)+"<br>");
document.write(eliminate(x, y)+"<br>");
document.write(multi(x, y)+"<br>");
document.write(div(x, y)+"<br>");
document.write(mod(x, y)+"<br>");
