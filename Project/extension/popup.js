// First time joke fetch 
fetch('https://icanhazdadjoke.com/slack')
.then(data => data.json())
.then(jokeData =>{
    const jokeText = jokeData.attachments[0].text;

    const jokeElement = document.getElementById('jokeElement');

    jokeElement.innerHTML = jokeText;
});

// For change jokes


let refreshBtn = document.getElementById('refresh-btn');
refreshBtn.addEventListener('click', refresh);

function refresh(){
    fetch('https://icanhazdadjoke.com/slack')
.then(data => data.json())
.then(jokeData =>{
    const jokeText = jokeData.attachments[0].text;

    const jokeElement = document.getElementById('jokeElement');

    jokeElement.innerHTML = jokeText;
});
}


// Go to site button 

// let button = document.getElementById('btn');

// button.addEventListener('click', htmlFile);

// function htmlFile(){
//     button.src = 'https://www.google.com';
// }

