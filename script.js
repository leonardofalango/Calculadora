var screen = "";
var value1;
var value2;
var op = "";
var final = 0

function att() {
    if (op == "") {
        document.getElementById('calc').textContent = screen;
        value1 = parseInt(screen)
    }
    else {
        value2 = screen.split(op)
        value2 = parseInt(value2[1])
        if (value2 != null)
            document.getElementById('calc').textContent = value1.toString() + op + value2.toString();
        else
            document.getElementById('calc').textContent = screen + op;
    }
}

function point(){
    console.log("point")
}

function clear() {
    console.log("clearing...");
    screen = "";
    op = "";
    final = 0;
    att();
}

function clearbtn()
{
    screen = "0"
    op = ""
    final = 0
    att()
}

function fun(num) {
    if (final == 1)
        clear()
    console.log(num);
    screen += num.toString();
    att();
}

function sum() {
    if (op == null) {
        screen += "+"
        op = "+"
    }

    else {
        screen = screen.substring(0, screen.length - 1)
        screen += "+"
        op = "+"
    }
    att();
}
function sub() {
    if (op == null) {
        screen += "-"
        op = "-"
    }

    else {
        screen = screen.substring(0, screen.length - 1)
        screen += "-"
        op = "-"
    }
    att();
}
function multiply() {
    if (op == null) {
        screen += "*"
        op = "*"
    }

    else {
        screen = screen.substring(0, screen.length - 1)
        screen += "*"
        op = "*"
    }
    att()
}
function div() {
    if (op == null) {
        screen += "/"
        op = "/"
    }

    else {
        screen = screen.substring(0, screen.length - 1)
        screen += "/"
        op = "/"
    }
    att()
}

function result() {
    if (op == "+")
        screen = value1 + value2
    else if (op == "-")
        screen = value1 - value2
    else if (op == "*")
        screen = value1 * value2
    else if (op == "/")
        screen = value1 / value2
    op = ''
    final = 1
    att()
}


function displayEvent () {
    document.addEventListener('click', e => {
        if(e.target.classList.contains('btn-clear')) clearbtn();
    });
}

displayEvent();