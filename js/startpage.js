function updateClock() {
    var now = new Date();
    var hours = now.getHours().toString();
    var minutes = now.getMinutes().toString();
    if (hours.length == 1) {
        hours = '0' + hours
    }
    if (minutes.length == 1) {
        minutes = '0' + minutes
    }
    document.getElementById('time').innerHTML = hours + ':' + minutes;
}

possible_colors = ['49bc78', 'c44d63', '3998c4', '568555', '019fde', '4E4E4E', 'd74946', '665348', '4d7c89',
    'a8466c', 'a8a3a7', '9b4637', '3d63a7', '69505e'];

function doOnLoad() {
    updateClock();
    setInterval('updateClock()', 1000);
    var color = '#' + possible_colors[Math.floor(Math.random() * possible_colors.length)];
    //set the style
    document.styleSheets[1].insertRule('input#q:focus {box-shadow: 0px 0px 10px ' + color + '}', 0);
    document.styleSheets[1].insertRule('.circle{background: ' + color + '}', 0);
    document.styleSheets[1].insertRule('.circle:hover{box-shadow: 0px 0px 30px ' + color + '}', 0);
    document.styleSheets[1].insertRule('#time{color: rgb(78,78,78); text-border: 1px solid ' + color + '}', 0);
}

