let win = 0;

if (blackScore === 0) {
    divider.style.display = "none";
    for (let i = 0; i < redTurnText.length; i++) {
        redTurnText[i].style.color = "black";
        blackTurntext[i].style.display = "none";
        redTurnText[i].textContent = "RED WINS!";
        win++;
    }
} else if (redScore === 0) {
    divider.style.display = "none";
    for (let i = 0; i < blackTurntext.length; i++) {
        blackTurntext[i].style.color = "black";
        redTurnText[i].style.display = "none";
        blackTurntext[i].textContent = "BLACK WINS!";
        win++;
    }
}