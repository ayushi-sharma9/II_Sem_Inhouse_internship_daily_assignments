let count = localStorage.getItem("counterValue");

if (count === null) {
    count = 0;
} else {
    count = Number(count);
}

let countDisplay = document.getElementById("count");
let increaseBtn = document.getElementById("increaseBtn");
let decreaseBtn = document.getElementById("decreaseBtn");
let resetBtn = document.getElementById("resetBtn");

countDisplay.innerText = count;

function saveCounter() {
    localStorage.setItem("counterValue", count);
}

increaseBtn.addEventListener("click", function () {
    count++;
    countDisplay.innerText = count;
    saveCounter();
});

decreaseBtn.addEventListener("click", function () {
    count--;
    countDisplay.innerText = count;
    saveCounter();
});

resetBtn.addEventListener("click", function () {
    count = 0;
    countDisplay.innerText = count;
    saveCounter();
});