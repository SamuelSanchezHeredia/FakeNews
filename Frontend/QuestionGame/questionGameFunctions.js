const domainOfAPI = "https://cgarort2508.ieszaidinvergeles.es/fakeNews/fakeNews/public/api/admin";
const questionContainer = document.getElementById("contentQuestion");
let currentQuestionAnswer; //Saves the answer of the current Question on the Website
let currentQuestionExplenation; //Saves the explenation of the current Question on the Website

//Set new Question
async function setNewQuestion(){
    //fetch data
    const data = await fetchQuestionFromAPI()

    //Set global variables
    currentQuestionAnswer = data.correct;
    currentQuestionExplenation = data.realNew; 

    //Set Question and Image into HTML
    await AddQuestionAsHTML(data.question)
    await AddImageToHtml(data.img)
  }

  //Fetches the Question from API
  async function fetchQuestionFromAPI(){
    const response = await fetch(domainOfAPI + "/quizimg"); //Schau wie die Seite heisst
    const data = await response.json();
    return data
  }

  //Add Question to the Side
  async function AddQuestionAsHTML(question){
    //delete old Content
    while (parentElement.firstChild) {
        parentElement.removeChild(parentElement.firstChild);
      }

    //Add the HTML
    let questionElement = document.createElement("p");
    let textNode = document.createTextNode(question);
    questionElement.appendChild(textNode);
    questionContainer.appendChild(newElement);
  }

  //Adds the image if it Exists 
  async function AddImageToHtml(img){
    if (img == null){
            return;
    }

    //Add Image
    let imageElement = document.createElement("img");
    imageElement.src = img;
    questionContainer.appendChild(imageElement);
}

  //Answers the Question
  async function AnswerQuestion(answer){
    //flip the Card
    const card = document.querySelectorAll("flip-card");

    card.addEventListener("click", () => {
      console.log("hello there");
    })
}

