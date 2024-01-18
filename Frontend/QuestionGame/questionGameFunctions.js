var currentQuestionAnswer;
var currentQuestionExplenation;


async function getQuestion(){
    let response = await fetch("https://www.tagesschau.de/api2/news/?regions=10&ressort=inland"); //Schau wie die Seite heisst
    let newsData = await response.json();
    currentQuestionAnswer = response.answer; //schauen wie die Antwort con denen in JSION aussieht
    let question = newsData.question; //schauen wie die Frage bei denen aussehen
    let questionContainer = document.getElementById("contentQuestion")
    questionContainer.innerHTML = "";
    let htmlToAdd = `<p class="text-lg">` + question + `</p>`
    questionContainer.innerHTML = htmlToAdd;
  }