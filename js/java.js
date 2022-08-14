var counter = document.querySelector(".counter")
var text = document.querySelector(".follow")
let count = 1;
setInterval(() => {
    if(count <1000){
        count++
        counter.innerText = count;

    }},1 )
