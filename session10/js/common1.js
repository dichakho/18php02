function check() {
    var x= document.getElementById('number').textContent;
    document.write(x);
    switch (Number(x))
    {
        case 2:{
            document.write("Monday");
            break;
        }
        case 3:{
            document.write("Tuesday");
            break;
        }
        case 4:{
            document.write("Wednesday");
            break;
        }
        case 5:{
            document.write("Thursday");
            break;
        }
        case 6:{
            document.write("Friday");
            break;
        }
        case 7:{
            document.write("Sarturday");
            break;
        }
        case 8:{
            document.write("Sunday");
            break;
        }
        default:
            document.write("Không phải ngày trong tuần");
            break;
    }
}
function randInteger() {
    return Math.floor(Math.random()*10);
}
function snt(x) {
    var x= document.getElementById('number').textContent;
    if (x>2)
        for(var i=2; i<x;i++)
        {
            if(x%i!=0){
                document.write("số nguyên tố");
                break;
            }
            else{
                document.write("không phải số nguyên tố");
                break;
            }
        }
    }