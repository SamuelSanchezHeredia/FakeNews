const domainOfAPI = "https://cgarort2508.ieszaidinvergeles.es/FakeNews/fakeNews/public/api/admin";
const questionContainer = document.getElementById("contentQuestion");
let currentQuestionAnswer; //Saves the answer of the current Question on the Website
let currentQuestionExplenation; //Saves the explenation of the current Question on the Website

window.onload = () => {
  setFirstVideo();
};

async function setFirstVideo(){
    const data = await fetchVideoFromApi();
}

async function fetchVideoFromApi(){
    /* const response = await fetch(domainOfAPI + "/");
    const data = await response.json();
    return data; */
    const data = {
        
    }
    return data
}