const quizData = [
	{
	  question: "Как добавить внутренний отступ сверху и снизу для элемента в CSS?",
	  a: "padding-top: 10px; padding-bottom: 10px;",
	  b: "margin-top: 10px; margin-bottom: 10px;",
	  c: "padding: 10px;",
	  d: "margin: 10px;",
	  correct: "a"
	},
	{
	  question: "Как установить жирный (bold) шрифт текста в CSS?",
	  a: "font-style: bold;",
	  b: "font-weight: bold;",
	  c: "text-style: bold;",
	  d: "font-bold: true;",
	  correct: "b"
	},
	{
	  question: "Как скрыть элемент на веб-странице с использованием CSS?",
	  a: "display: none;",
	  b: "visibility: hidden;",
	  c: "opacity: 0;",
	  d: "hidden: true;",
	  correct: "a"
	},
	{
	  question: "Как установить фоновое изображение для элемента в CSS?",
	  a: "align: center;",
	  b: "text-align: center;",
	  c: "vertical-align: middle;",
	  d: "align-text: center;",
	  correct: "b"
	}
  ];
  
  const quiz = document.getElementById("quiz");
  const answerEls = document.querySelectorAll(".answer");
  const questionEl = document.getElementById("question");
  const a_text = document.getElementById("a_text");
  const b_text = document.getElementById("b_text");
  const c_text = document.getElementById("c_text");
  const d_text = document.getElementById("d_text");
  const submitBtn = document.getElementById("submit");
  
  let currentQuiz = 0;
  let score = 0;
  
  loadQuiz();
  
  function loadQuiz() {
	deselectAnswers();
  
	const currentQuizData = quizData[currentQuiz];
  
	questionEl.innerText = currentQuizData.question;
	a_text.innerText = currentQuizData.a;
	b_text.innerText = currentQuizData.b;
	c_text.innerText = currentQuizData.c;
	d_text.innerText = currentQuizData.d;
  }
  
  function deselectAnswers() {
	answerEls.forEach((answerEl) => (answerEl.checked = false));
  }
  
  function getSelected() {
	let answer;
  
	answerEls.forEach((answerEl) => {
	  if (answerEl.checked) {
		answer = answerEl.id;
	  }
	});
  
	return answer;
  }
  
  submitBtn.addEventListener("click", () => {
	const answer = getSelected();
  
	if (answer) {
	  if (answer === quizData[currentQuiz].correct) {
		score++;
	  }
  
	  currentQuiz++;
  
	  if (currentQuiz < quizData.length) {
		loadQuiz();
	  } else {
		quiz.innerHTML = `
				  <h2>Правильных ответов: ${score}/${quizData.length}</h2>
  
				  <button onclick="location.reload()">Пройти снова</button>
			  `;
	  }
	}
  });
  