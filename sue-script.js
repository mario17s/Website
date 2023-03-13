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
        question: "Care este capitala Suediei?",
        answers: [
            { text: "Helsinki", correct: false },
            { text: "Roma", correct: false },
            { text: "Oslo", correct: false },
            { text: "Stockholm", correct: true }
        ]
    
    },
    {
        question: "Care este sistemul politic al Suediei?",
        answers: [
            { text: "republică", correct: false},
            { text: "regat", correct: false },
            { text: "monarhie constituțională", correct: true },
            { text: "totalitar", correct: false }
        ]
    
    },
    {
        question: "Al câtelea oraș ca mărime este Malmo?",
        answers: [
            { text: "al treilea", correct: true },
            { text: "al doilea", correct: false },
            { text: "primul", correct: false },
            { text: "al patrulea", correct: false }
        ]
    
    },
    {
        question: "Cum mai este numit centrul vechi al capitalei?",
        answers: [{ text: "Gamla Stan", correct: true },
            { text: "Djurgarden", correct: false },
            { text: "Skyview", correct: false },
            { text: "Bergslagen", correct: false }
        ]
    
    }  
]