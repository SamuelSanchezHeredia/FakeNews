const domainOfAPI = "https://cgarort2508.ieszaidinvergeles.es/FakeNews/fakeNews/public/api/admin";
let data;
let currentQuestionIndex = 0;

window.onload = () => {
  fetchQuestionFromAPI();
};

async function fetchQuestionFromAPI() {
  try {
    const response = await fetch(domainOfAPI + "/questionimg");
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    data = await response.json();
    generateQuestion();
  } catch (error) {
    console.error('There was a problem fetching the question from the API:', error);
  }
}

function generateQuestion() {
  const questionTitle = document.getElementById('questionTitle');
  const questionText = document.getElementById('questionText');
  const questionTrueBtn = document.getElementById('questionTrue');
  const questionFalseBtn = document.getElementById('questionFalse');
  const questionImage = document.getElementById('questionImage');
  const alertContainer = document.getElementById('alertContainer');

  if (currentQuestionIndex >= data.questions.length) {
    alert("End of questions.");
    return;
  }

  questionTitle.textContent = "Question " + (currentQuestionIndex + 1);
  questionText.textContent = data.questions[currentQuestionIndex].question;
  questionImage.src = data.questions[currentQuestionIndex].img;
  
  // Event listener for the "True" button
  questionTrueBtn.addEventListener('click', () => {
    if (data.questions[currentQuestionIndex].correct === 1) {
      showBootstrapAlert('alert-success', 'Correct! This is real news.', alertContainer);
    } else {
      showBootstrapAlert('alert-danger', 'Incorrect! This is fake news.', alertContainer);
    }
    currentQuestionIndex++;
    generateQuestion();
  });

  // Event listener for the "Fake-News" button
  questionFalseBtn.addEventListener('click', () => {
    if (data.questions[currentQuestionIndex].correct === 0) {
      showBootstrapAlert('alert-success', 'Correct! This is fake news.', alertContainer);
    } else {
      showBootstrapAlert('alert-danger', 'Incorrect! This is real news.', alertContainer);
    }
    currentQuestionIndex++;
    generateQuestion();
  });
}

function showBootstrapAlert(alertType, message, container) {
  const alert = document.createElement('div');
  alert.classList.add('alert', alertType);
  alert.setAttribute('role', 'alert');
  alert.textContent = message;
  container.appendChild(alert);
  setTimeout(() => {
    alert.remove(); // Remove the alert after some time
  }, 3000); // Remove after 3 seconds (adjust as needed)
}
