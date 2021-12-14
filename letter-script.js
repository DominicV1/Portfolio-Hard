const elements = [
    document.getElementById("navbar"),
    document.getElementById("about"),
    document.getElementById("work"),
    document.getElementById("contact")
];


function printIt(destination, message, speed) {
    var i = 0;
    const interval = setInterval(function () {
        document.getElementById(destination).innerHTML += message.charAt(i);
        i++;
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = "#letDest { border-right: 0.06em solid black }";
        document.body.appendChild(css);
        if (i >= message.length) {
            elements.forEach(element => {
                clearInterval(interval)
                element.classList.remove("opacity-0")
                css.innerHTML = "#letDest { border-right: none }";
                document.body.appendChild(css);
            })
            clearInterval(interval);
        }
    }, speed);
}

printIt("letDest", "Dominic.", 150);
