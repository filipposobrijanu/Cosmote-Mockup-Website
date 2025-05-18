var flag;
var arith;
var diai = "<span class='diaireitai'>" + "διαιρείται" + "</span>";
var den = "<span class='den'>" + "δεν" + "</span>";
var ari = "<span class='ari'>" + arith + "</span>";
function CheckNumber(number)
{

    // arithmos 3
    arith=3;
    ari = "<span class='ari'>" + arith + "</span>";
    let check = "";
    var sum = 0;
    var three;
    var giati ="";
    let digits = number.toString().split('');
    for (var i = 0; i < digits.length; i++) 
    {
        sum += parseInt(digits[i], 10);
        if(i>=1){

            giati = giati + " + " + parseInt(digits[i], 10) + " ";

        }
        else{

            giati+= parseInt(digits[i], 10);

        }

    }
    flag = false;
    if(sum%3===0){

        flag = true;

    }
    if (flag===true) {

        if(digits.length>=2){
            three = "Ο αριθμός " + "<b>" + number + "</b>" +  " " + check + "" + diai + " με το "  + ari + ", αφού:<br><br> Tο άθροισμα των ψηφίων του είναι: " 
            + giati + " = <b>" + sum + "</b>" + " το οποίο είναι πολλαπλάσιο του 3."
        }
        else{
            three = "Ο αριθμός " + "<b>" + number + "</b>" +  " " + check + "" + diai + " με το "  + ari + ", αφού:<br><br> Tο άθροισμα των ψηφίων του είναι: " 
            + "<b>" + sum + "</b>" + " το οποίο είναι πολλαπλάσιο του 3."
        }

    }
    else {

        check = den;
        if(digits.length>=2){
            three = "Ο αριθμός " + "<b>" + number + "</b>" + " " + "<b>" + check + "</b> " + "" + diai + " με το "+ ari +", αφού:<br><br> Tο άθροισμα των ψηφίων του είναι: " 
            + giati + " = <b>" + sum + "</b>" + " το οποίο <b>δεν</b> είναι πολλαπλάσιο του 3."
        }
        else{
            three = "Ο αριθμός " + "<b>" + number + "</b>" + " " + "<b>" + check + "</b> " + "" + diai + " με το "+ ari +", αφού:<br><br> Tο άθροισμα των ψηφίων του είναι: " 
            + "<b>" + sum + "</b>" + " το οποίο <b>δεν</b> είναι πολλαπλάσιο του 3."
        }

    }
    // arithmos 4
    arith=4;
    ari = "<span class='ari'>" + arith + "</span>";
    check = "";
    var four;

    var num = number.toString();

    if (num.length < 2) {
        lastdigits =  parseInt(num, 10);
    }

    var lastdigits = parseInt(num.slice(-2), 10);

    flag = false;
    if(lastdigits%4===0){

        flag = true;
    }
    if (flag===true) {
        if(num.length >= 2){

            four = "Ο αριθμός " + "<b>" + number + "</b>" +  " " + check +  "" + diai + " με το "+ ari +", αφού:<br><br> Tα τελευταία δύο ψηφία του σχηματίζουν τον διψήφιο αριθμό <b>" + lastdigits + "</b>  που διαιρείται με το 4." 

        }
        else{

            four = "Ο αριθμός " + "<b>" + number + "</b>" +  " " + check +  "" + diai + " με το "+ ari;

        }
    }
    else {

        check = den;
        if(num.length >= 2){

            four = "Ο αριθμός " + "<b>" + number + "</b>" + " " + "<b>" + check + "</b> " +  "" + diai + " με το "+ ari +", αφού:<br><br> Tα τελευταία δύο ψηφία του σχηματίζουν τον διψήφιο αριθμό <b>" + lastdigits + "</b> που <b>δεν</b> διαιρείται με το 4." 
        
        }
        else{

            four = "Ο αριθμός " + "<b>" + number + "</b>" + " " + "<b>" + check + "</b> " +  "" + diai + " με το "+ ari;

        }

    }

    // arithmos 7
    arith=7;
    check = "";
    ari = "<span class='ari'>" + arith + "</span>";

    num = number;
    var giati = "";
    let temp;
    var lastdigit; 
    while (num>99) {

        lastdigit = num%10;

        num = Math.floor(num / 10);

        temp = num;

        giati += "<b>1.</b> Διαγράφουμε το τελευταίο ψηφίο του αριθμού, που είναι το " + lastdigit + " και μένει ο αριθμός " + num + ".";
        giati += "<br><br><b>2.</b> Αφαιρούμε από το " + num + " το διπλάσιο του ψηφίου που διαγράψαμε, δηλαδή το 2 x " + lastdigit + " = " + 2*lastdigit + ".<br><br>";


        num -= 2 * lastdigit;
        giati += temp + " - " + 2*lastdigit + " = <b>" + num + "</b><br><br>";

        if(num>99){

            giati += "<b>3.</b> Δεν μπορούμε εύκολα να αποφασίσουμε αν το " + num + " διαιρείται με το 7, οπότε <b>επαναλαμβάνουμε</b> τη διαδικασία:<br><br>";

        }              

    }

    flag = false;
    if(num%7===0){

        flag = true;
    }

    if (flag===true) {

        var seven = "Ο αριθμός " + "<b>" + number + "</b>" +  " " + check + "" + diai + " με το "+ ari;

        if (number>99){

            seven+=" γιατί: <br><br>";
            giati += "Το " + num + " διαιρείται με το 7, άρα και ο αρχικός αριθμός διαιρείται με το 7.";

        }

    }
    else {

        check = den;

        var seven = "Ο αριθμός " + "<b>" + number + "</b>" + " " + "<b>" + check + "</b> " + "" + diai + " με το "+ ari;

        if (number>99){

            seven +=" γιατί: <br><br>";
            giati += "Το " + num + " <b>δεν</b> διαιρείται με το 7, άρα και ο αρχικός αριθμός <b>δεν</b> διαιρείται με το 7.";

        }

    }

    seven += giati;
      
    document.getElementById("result").innerHTML = "<br>" + three + "<br><br>" + four + "<br><br>" + seven;
}

function Click()
{
    let input = document.getElementById("inp").value;
    if(input !="" ){
        CheckNumber(document.getElementById("inp").value);
    }
    

}

document.getElementById('button').addEventListener("click",function(){Click()} );

