const startButton = document.getElementById('start-btn');
const nextButton = document.getElementById('next-btn');
const questionContainerElement = document.getElementById('question-container');
const questionElement = document.getElementById('question');
const answerButtonsElement = document.getElementById('answer-buttons');

let shuffledQuestions, currentQuestionIndex;

startButton.addEventListener('click', startGame);
nextButton.addEventListener('click', () => {
    currentQuestionIndex++;
    setNextQuestion();
})

function startGame(){
    startButton.classList.add('hide');
    shuffledQuestions = questions.sort(() => Math.random() - .5);
    currentQuestionIndex = 0;
    questionContainerElement.classList.remove('hide');
    setNextQuestion();
}

function setNextQuestion(){
    resetState();
    showQuestion(shuffledQuestions[currentQuestionIndex]);
}

function showQuestion(question){
    questionElement.innerText = question.question;
    question.answers.forEach(answer => {
        const button = document.createElement('button');
        button.innerText = answer.text;
        button.classList.add('btn');
        button.classList.add('btn-primary');
        if(answer.correct) {
            button.dataset.correct = answer.correct;
        }
        button.addEventListener('click', selectAnswer);
        answerButtonsElement.appendChild(button);
    })
}

function resetState() {
    nextButton.classList.add('hide');
    while(answerButtonsElement.firstChild) {
        answerButtonsElement.removeChild(answerButtonsElement.firstChild);
    }
}

function selectAnswer(e){
    const selectedButton = e.target;
    const correct = selectedButton.dataset.correct;
    Array.from(answerButtonsElement.children).forEach(button =>{
        setStatusClass(button, button.dataset.correct);
    });
    if(shuffledQuestions.length > currentQuestionIndex + 1){
        nextButton.classList.remove('hide');
    }else{
        startButton.innerText = 'Restart';
        startButton.classList.remove('hide');
    }
   
}

function setStatusClass(element, correct){
    clearStatusClass(element);
    if(correct) {
        element.classList.add('correct');
    }
    else{
        element.classList.add('wrong');
    }
}

function clearStatusClass(element) {
    element.classList.remove('correct');
    element.classList.remove('wrong');
}

const questions = [
    {
        question: "Care este capitala Danemarcei?",
        answers: [
            { text: "Copenhaga", correct: true },
            { text: "Moscova", correct: false },
            { text: "Stockholm", correct: false },
            { text: "Budapesta", correct: false }
        ]
    
    },
    {
        question: "Cum se numește peninsula pe care se află Danemarca?",
        answers: [
            { text: "Iberica", correct: false},
            { text: "Scandinava", correct: false },
            { text: "Iutlanda", correct: true },
            { text: "Balcanica", correct: false }
        ]
    
    },
    {
        question: "Din ce este făcută statuia Mica Sirenă?",
        answers: [
            { text: "aur", correct: false },
            { text: "argint", correct: false },
            { text: "bronz", correct: true },
            { text: "platina", correct: false }
        ]
    
    },
    {
        question: "Care este al doilea oraș ca mărime din Danemarca?",
        answers: [
            { text: "Aarhus", correct: true },
            { text: "Aalborg", correct: false },
            { text: "Roskilde", correct: false },
            { text: "Odense", correct: false }
        ]
    
    }  
]