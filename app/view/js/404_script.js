let count=5;

const countdownElement = document.getElementById('countdown');
startCountdown(4,countdownElement);

function startCountdown(count,element){
    const timer = setInterval(() =>{
        element.innerText = count;
        count--;
        
        if(count<0)clearInterval(timer);
    },1000);
}