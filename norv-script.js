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
        question: 'Care este capitala Norvegiei?',
        answers: [
            {text: 'Helsinki', correct: false},
            {text: 'Berlin', correct: false},
            {text: 'Oslo', correct: true},
            {text: 'Moscova', correct: false},
        ]
    }, 
    {
        question: 'Care este populația aproximativă a Norvegiei?',
        answers: [
            {text: '1 mil.', correct: false},
            {text: '10 mil.', correct: false},
            {text: '8 mil.', correct: false},
            {text: '5 mil.', correct: true},
        ]
    }, 
    {
        question: 'Care dintre următoarele nu este un oraș din Norvegia?',
        answers: [
            {text: 'Manchester', correct: true},
            {text: 'Drammen', correct: false},
            {text: 'Stavanger', correct: false},
            {text: 'Bergen', correct: false},
        ]
    }, 
    {
        question: 'În ce parte a capitalei se află fiordul Oslo?',
        answers: [
            {text: 'SUD', correct: true},
            {text: 'NORD', correct: false},
            {text: 'VEST', correct: false},
            {text: 'EST', correct: false},
        ]
    }, 
    
]