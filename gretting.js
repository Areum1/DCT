const form = document.querySelector(".js-form"),
    input = form.querySelector("input"),
    greeting = document.querySelector(".js-greetings");

const USER_LS = "currentUser",
    SHOWING_CN = "showing";

function saveName(text){
    localStorage.setItem(USER_LS,text);
}

function handleSubmit(event){
    event.preventDefault(); // enter 누르면 정보가 사라지는데 안 사라지게 함 / event 금지
    const currentValue = input.value;
    paintGreeting(currentValue);
    saveName(currentValue);
}

function askForName() {
    form.classList.add(SHOWING_CN);
    form.addEventListener("submit",handleSubmit);
}

function paintGreeting(text){
    form.classList.remove(SHOWING_CN);
    greeting.classList.add(SHOWING_CN);
    greeting.innerText =`Hello ${text}`;
}

function loadName(){
    const currentUser = localStorage.getItem(USER_LS);
    if(currentUser == null){
        // she or he is not
        askForName();
    } else {
        // she or he is
        paintGreeting(currentUser);
    }
}

function init(){
    loadName();

}
init();