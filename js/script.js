const txtAnim = document.getElementById('txtAnim');
const delayBeforeRewrite = 1000;
const initialTexts = [
    "Excellence",
    "Élégance",
    "Prestige",
    "Icone",
    "Sportivité",
    "Victoire",
    "Performance",
    "Passion",
    "Ferrari",
    " ",
];

let textIndex = 0;
let index = 0;
let deleting = false;

function typeWriter() {
    const initialText = initialTexts[textIndex];
    if (!deleting && index < initialText.length) {
        txtAnim.innerHTML += initialText.charAt(index);
        index++;
        setTimeout(typeWriter, 100);
    } else if (index === initialText.length && !deleting) {
        deleting = true;
        setTimeout(deleteText, delayBeforeRewrite);
    } else if (deleting && index >= 0) {
        txtAnim.innerHTML = initialText.slice(0, index);
        index--;
        setTimeout(typeWriter, 50);
    }
}

function deleteText() {
    const initialText = initialTexts[textIndex];
    if (index >= 0) {
        txtAnim.innerHTML = initialText.slice(0, index);
        index--;
        setTimeout(deleteText, 50);
    } else {
        index = 0;
        deleting = false;
        textIndex = (textIndex + 1) % initialTexts.length;
        setTimeout(typeWriter, delayBeforeRewrite);
    }
}

typeWriter();