window.addEventListener("DOMContentLoaded", () => {
    if(messages.dataset.startMessage)
    {
        newMessage(messages.dataset.startMessage,1)
    }

  });

 

    const messages = document.getElementById('czatMessages')
    var czat = document.querySelector("#czat .text");
    var message = czat.querySelector("p:last-of-type");
    let animal = document.querySelector('#animalInfo .name h4').innerText
    let index = textPosition = 0;   
    let textToWrite = animal + ' to zapamięta.' ;
    
    function writeText()
    {   
        if(index < textToWrite.length) {
            czat.innerHTML += textToWrite.charAt(index);
            index++;
            cursor = czat.querySelector('.cursor')
            czat.appendChild(cursor)
            czat.scrollTo(0,czat.scrollHeight)
            setTimeout(writeText, 80);
          }
    
    }
    
    function newMessage(text,addName)
    {   
        textToWrite = addName ? animal + ': '+  text : text;
        message = document.createElement('p')
        czat.appendChild(message)
        index = textPosition = 0
        writeText()
    }
