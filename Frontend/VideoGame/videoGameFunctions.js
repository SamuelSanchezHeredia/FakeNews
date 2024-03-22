const domainOfAPI = "https://cgarort2508.ieszaidinvergeles.es/FakeNews/fakeNews/public/api/admin";
const videoContainer = document.getElementById("video");
const videoBtn1 = document.getElementById("opt1-btn");
const videoBtn2 = document.getElementById("opt2-btn");

window.onload = () => {
    console.log("test")
    setFirstVideo();
};

//Set First Video
async function setFirstVideo(){
    //fetch data
    const data = await fetchVideoFromAPI(4);
    console.log(data)
    videoContainer.src = data.videoUrl;
    videoBtn1.innerText = data.buttonOption1;
    videoBtn1.value = data.videoUrlOption1;
    videoBtn2.innerText = data.buttonOption2;
    videoBtn2.value = data.videoUrlOption2;
  }

//Fetches the Vieo from API
async function fetchVideoFromAPI(id){
    const response = await fetch(domainOfAPI + "/videoinfo/"+id);
    const data = await response.json();
    return data
}

//Sets the Video Changes for when a new Video is Selected
async function changeVideo(newVideoId){
    const data = await fetchVideoFromAPI(newVideoId);
    if(data.resultText != ""){
        document.getElementById("resultText").innerText = data.resultText;
        document.getElementById("result").style.display = "block";
        videoBtn1.style.display = "none";
        videoBtn2.style.display = "none";
    }
    videoContainer.src = data.videoUrl;
    videoBtn1.innerText = data.buttonOption1;
    videoBtn1.value = data.videoUrlOption1;
    videoBtn2.innerText = data.buttonOption2;
    videoBtn2.value = data.videoUrlOption2; 
}

async function onClick(button){
    changeVideo(button.value);
}