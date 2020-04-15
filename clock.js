const clockContainer = document.querySelector(".js-clock");
const monthTitle = clockContainer.querySelector("h2");
const dateTitle = clockContainer.querySelector("h1");
const clockTitle = clockContainer.querySelector("h3");

var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
]; 

function getTime(){
    const today = new Date();
    const month = monthNames[today.getMonth()];  // 월
    const date = today.getDate();  // 날짜
    const hours = today.getHours(); // 시간
    const minutes = today.getMinutes(); // 분
    const seconds = today.getSeconds(); // 초
    
    monthTitle.innerHTML = `${month}`;
    dateTitle.innerHTML = `${date}`;
    clockTitle.innerText = `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes}` : minutes}:${seconds < 10 ? `0${seconds}` : seconds}`;
}

function init() {
    getTime();
    setInterval(getTime,1000);
}
init();