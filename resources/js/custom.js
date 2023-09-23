import { swiffyslider } from 'swiffy-slider'
window.swiffyslider = swiffyslider;

window.addEventListener("load", () => {
    window.swiffyslider.init();
});


// typewriter effect
var i = 0;
var txt = "Thiya-The Himalayan Farm delivers ethically sourced, delicious,  and healthy Himalayan superfoods for a better you.";
var speed = 50;

// Load function on page load
window.onload = function() {
    typeWriter();
};

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("typewriter-text").insertAdjacentHTML('beforeend', txt.charAt(i));
        i++;
        setTimeout(typeWriter, speed);
    }
}
