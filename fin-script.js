const Questions = [{
    id: 0,
    q: "Care este capitala Finlandei?",
    a: [{ text: "Paris", isCorrect: false },
        { text: "Helsinki", isCorrect: true },
        { text: "Londra", isCorrect: false },
        { text: "Dublin", isCorrect: false }
    ]

},
{
    id: 1,
    q: "Care este cel mai înalt punct al Finlandei?",
    a: [{ text: "Espoo", isCorrect: false},
        { text: "Marea Baltică", isCorrect: false },
        { text: "Halti", isCorrect: true },
        { text: "Uusimaa", isCorrect: false }
    ]

},
{
    id: 2,
    q: "Ce atracție turistică este numită și Gibraltarul Nordului?",
    a: [{ text: "Suomenlinna", isCorrect: true },
        { text: "Oulu", isCorrect: false },
        { text: "Helsinki", isCorrect: false },
        { text: "Vantaa", isCorrect: false }
    ]

},
{
    id: 3,
    q: "Pe malul cărui golf se află Helsinki?",
    a: [{ text: "Finic", isCorrect: true },
        { text: "Riga", isCorrect: false },
        { text: "Botnic", isCorrect: false },
        { text: "Biscaya", isCorrect: false }
    ]

}

]

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
        question: "Care este capitala Finlandei?",
        answers: [
            { text: "Paris", correct: false },
            { text: "Helsinki", correct: true },
            { text: "Londra", correct: false },
            { text: "Dublin", correct: false }
        ]
    
    },
    {
        question: "Care este cel mai înalt punct al Finlandei?",
        answers: [
            { text: "Espoo", correct: false},
            { text: "Marea Baltica", correct: false },
            { text: "Halti", correct: true },
            { text: "Uusimaa", correct: false }
        ]
    
    },
    {
        question: "Ce atracție turistică este numită și Gibraltarul Nordului?",
        answers: [
            { text: "Suomenlinna", correct: true },
            { text: "Oulu", correct: false },
            { text: "Helsinki", correct: false },
            { text: "Vantaa", correct: false }
        ]
    
    },
    {
        question: "Pe malul cărui golf se află Helsinki?",
        answers: [
            { text: "Botnic", correct: false },
            { text: "Finic", correct: true },
            { text: "Riga", correct: false },
            { text: "Biscaya", correct: false }
        ]
    
    }  
]