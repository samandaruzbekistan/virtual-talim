<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual ta'lim</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <div class="py-2 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 d-none d-lg-block">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span>
                            Savolingiz bormi?</a>
                        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>+998 94 911 33 22</a>
                        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>
                            info@virtual-talim.uz</a>
                    </div>
                </div>
            </div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">
                        <a href="{{ route('index') }}" class="d-block">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active">
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bosh sahifa</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Ilmiy ish haqida</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bo'limlar va boblar</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Muallif</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bog'lanish</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <div class="social-wrap">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>

                            <a href="#"
                                class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5"
            style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2 class="mb-0">{{ $lesson->title }}</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="custom-breadcrumns border-bottom">
            <div class="container">
              <a href="{{ route('index') }}">Bosh sahifa</a>
              <span class="mx-3 icon-keyboard_arrow_right"></span>
              <a href="{{ route('show_section', $section->id) }}">{{ $section->title }}</a>
              <span class="mx-3 icon-keyboard_arrow_right"></span>
              <span class="current">{{ $lesson->title }}</span>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                {!! $lesson->body !!}
            </div>
            <section class="quiz-section section">
                <div class="container" data-aos="fade-up">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <!-- Quiz Container -->
                            <div id="quiz-container" class="bg-white rounded shadow p-4 border">

                                <!-- Quiz Header -->
                                <div class="quiz-header mb-4 text-center">
                                    <h2 class="h3 fw-bold text-dark mb-3">Test topshiriqlari</h2>
                                    <div class="d-flex justify-content-between align-items-center text-muted small mb-3">
                                        <span id="question-counter" class="fw-medium">Savol 1/30</span>
                                        <span id="score-display" class="fw-medium">Ball: 0</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <!-- Question Display -->
                                <div id="question-display" class="mb-4">
                                    <h3 id="question-text" class="h5 fw-semibold text-dark mb-4"></h3>

                                    <!-- Answer Options -->
                                    <div id="answer-options" class="d-grid gap-3">
                                        <!-- Answer buttons will be generated here -->
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="quiz-navigation d-flex justify-content-between align-items-center">
                                    <button id="prev-btn" class="btn btn-secondary" disabled>
                                        <i class="bi bi-arrow-left"></i> Oldingi
                                    </button>

                                    <button id="next-btn" class="btn btn-primary" disabled>
                                        Keyingi <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                                <!-- Results Display -->
                                <div id="results-display" class="d-none text-center">
                                    <div class="mb-4">
                                        <h3 class="h3 fw-bold text-dark mb-4">Test yakunlandi!</h3>
                                        <div class="display-1 mb-4">🎉</div>
                                        <p class="lead text-muted mb-2">Sizning natijangiz:</p>
                                        <div class="display-4 fw-bold text-primary mb-4">
                                            <span id="final-score">0</span>/<span id="total-questions">30</span>
                                        </div>
                                        <p class="text-muted mb-4">
                                            <span id="percentage-score">0%</span> to'g'ri javob
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-center gap-3">
                                        <button id="restart-btn" class="btn btn-success btn-lg">
                                            <i class="bi bi-arrow-clockwise"></i> Qaytadan boshlash
                                        </button>
                                        <button id="home-btn" class="btn btn-secondary btn-lg">
                                            <i class="bi bi-house"></i> Bosh sahifa
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="mb-4">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        </p>
                        <p>Virtual taʼlim orqali informatika o'qituvchilarining kasbiy kompetensiyalarini
                            rivojlantirishga xizmat qiluvchi innovatsion platforma.</p>
                        <p><a href="#">Batafsil o'qish</a></p>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Kampusimiz</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Ilmiy loyiha haqida</a></li>
                            <li><a href="#">Yangiliklar</a></li>
                            <li><a href="#">Tajriba darslari</a></li>
                            <li><a href="#">Loyiha jamoasi</a></li>
                            <li><a href="#">Hamkorlar</a></li>
                            <li><a href="#">Resurslar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Kurs boblari</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Virtual taʼlim konsepsiyasi</a></li>
                            <li><a href="#">Virtual mashinalar</a></li>
                            <li><a href="#">Gipervisorlar</a></li>
                            <li><a href="#">Bulutli texnologiyalar</a></li>
                            <li><a href="#">Kasbiy kompetensiyalar</a></li>
                            <li><a href="#">Eksperimental natijalar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Bog'lanish</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Yordam markazi</a></li>
                            <li><a href="#">Telegram: @yourusername</a></li>
                            <li><a href="#">Email: info@virtualtalim.uz</a></li>
                            <li><a href="#">Fikr bildirish</a></li>
                            <li><a href="#">Hamkorlik taklifi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p>
                            &copy; 2025 Barcha huquqlar himoyalangan | Dasturchi: <a
                                href="https://instagram.com/samandar_sariboyev" target="_blank">Samandar Sariboyev</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#51be78" />
        </svg></div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>



    <script>

        let quizzes = {!! $lesson->quiz !!};

       // Quiz state variables
       let currentQuestionIndex = 0;
        let score = 0;
        let userAnswers = [];
        let quizCompleted = false;
        let correctAnswerPositions = []; // Store the randomized correct answer positions

        // DOM elements
        const questionText = document.getElementById('question-text');
        const answerOptions = document.getElementById('answer-options');
        const questionCounter = document.getElementById('question-counter');
        const scoreDisplay = document.getElementById('score-display');
        const progressBar = document.getElementById('progress-bar');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const resultsDisplay = document.getElementById('results-display');
        const questionDisplay = document.getElementById('question-display');
        const quizNavigation = document.querySelector('.quiz-navigation');

        // Function to shuffle array (Fisher-Yates algorithm)
        function shuffleArray(array) {
            const shuffled = [...array];
            for (let i = shuffled.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
            }
            return shuffled;
        }

        // Function to get correct answer position for a question
        function getCorrectAnswerPosition(questionIndex) {
            return correctAnswerPositions[questionIndex];
        }

        // Initialize quiz with randomized answer positions
        function initQuiz() {
            currentQuestionIndex = 0;
            score = 0;
            userAnswers = [];
            quizCompleted = false;

            // Generate random positions for correct answers (answer A is always correct)
            correctAnswerPositions = [];
            quizzes.forEach(() => {
                correctAnswerPositions.push(Math.floor(Math.random() * 4)); // Random position 0-3
            });

            updateScore();
            showQuestion();
            updateNavigation();
        }

        // Display current question
        function showQuestion() {
            const question = quizzes[currentQuestionIndex];
            questionText.textContent = question.quiz;

            // Update counter and progress
            questionCounter.textContent = `Savol ${currentQuestionIndex + 1}/${quizzes.length}`;
            const progress = ((currentQuestionIndex + 1) / quizzes.length) * 100;
            progressBar.style.width = `${progress}%`;
            progressBar.setAttribute('aria-valuenow', progress);

            // Get the correct answer (answer A) and shuffle all answers
            const correctAnswer = question.answers[0].answer; // Answer A is always correct
            const shuffledAnswers = shuffleArray(question.answers);

            // Find where the correct answer ended up after shuffling
            const correctPosition = shuffledAnswers.findIndex(answer => answer.answer === correctAnswer);

            // Update the correct answer position for this question
            correctAnswerPositions[currentQuestionIndex] = correctPosition;

            // Generate answer buttons
            answerOptions.innerHTML = '';
            shuffledAnswers.forEach((answer, index) => {
                const button = document.createElement('button');
                button.className = 'btn btn-outline-secondary d-block w-100 mb-2 text-start p-3 border';
                button.textContent = answer.answer;
                button.dataset.answerIndex = index;

                // Check if user has already answered this question
                if (userAnswers[currentQuestionIndex] !== undefined) {
                    const userAnswer = userAnswers[currentQuestionIndex];
                    const isCorrect = index === correctPosition;
                    const isUserAnswer = index === userAnswer;

                    if (isUserAnswer && isCorrect) {
                        button.className = 'btn btn-success d-block w-100 mb-2 text-start p-3 border border-success';
                    } else if (isUserAnswer && !isCorrect) {
                        button.className = 'btn btn-danger d-block w-100 mb-2 text-start p-3 border border-danger';
                    } else if (isCorrect) {
                        button.className = 'btn btn-success d-block w-100 mb-2 text-start p-3 border border-success';
                    } else {
                        button.className = 'btn btn-light d-block w-100 mb-2 text-start p-3 border text-muted';
                    }
                    button.disabled = true;
                } else {
                    button.addEventListener('click', () => selectAnswer(index));
                }

                answerOptions.appendChild(button);
            });
        }

        // Handle answer selection
        function selectAnswer(answerIndex) {
            if (userAnswers[currentQuestionIndex] !== undefined) return;

            userAnswers[currentQuestionIndex] = answerIndex;
            const correctPosition = getCorrectAnswerPosition(currentQuestionIndex);
            const isCorrect = answerIndex === correctPosition;

            if (isCorrect) {
                score++;
                updateScore();
            }

            // Update button styles
            const buttons = answerOptions.querySelectorAll('button');
            buttons.forEach((button, index) => {
                const buttonAnswerIndex = parseInt(button.dataset.answerIndex);
                const isCorrectAnswer = buttonAnswerIndex === correctPosition;
                const isUserAnswer = buttonAnswerIndex === answerIndex;

                button.disabled = true;

                if (isUserAnswer && isCorrectAnswer) {
                    button.className = 'btn btn-success d-block w-100 mb-2 text-start p-3 border border-success';
                } else if (isUserAnswer && !isCorrectAnswer) {
                    button.className = 'btn btn-danger d-block w-100 mb-2 text-start p-3 border border-danger';
                } else if (isCorrectAnswer) {
                    button.className = 'btn btn-success d-block w-100 mb-2 text-start p-3 border border-success';
                } else {
                    button.className = 'btn btn-light d-block w-100 mb-2 text-start p-3 border text-muted';
                }
            });

            updateNavigation();
        }

        // Update score display
        function updateScore() {
            scoreDisplay.textContent = `Ball: ${score}`;
        }

        // Update navigation buttons
        function updateNavigation() {
            prevBtn.disabled = currentQuestionIndex === 0;

            if (currentQuestionIndex === quizzes.length - 1) {
                if (userAnswers[currentQuestionIndex] !== undefined) {
                    nextBtn.textContent = 'Natijani ko\'rish';
                    nextBtn.disabled = false;
                } else {
                    nextBtn.textContent = 'Keyingi';
                    nextBtn.disabled = true;
                }
            } else {
                nextBtn.textContent = 'Keyingi';
                nextBtn.disabled = userAnswers[currentQuestionIndex] === undefined;
            }
        }

        // Show results
        function showResults() {
            questionDisplay.style.display = 'none';
            quizNavigation.style.display = 'none';
            resultsDisplay.classList.remove('d-none');

            const percentage = Math.round((score / quizzes.length) * 100);
            document.getElementById('final-score').textContent = score;
            document.getElementById('total-questions').textContent = quizzes.length;
            document.getElementById('percentage-score').textContent = `${percentage}%`;

            quizCompleted = true;
        }

        // Event listeners
        nextBtn.addEventListener('click', () => {
            if (currentQuestionIndex === quizzes.length - 1) {
                showResults();
            } else {
                currentQuestionIndex++;
                showQuestion();
                updateNavigation();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                showQuestion();
                updateNavigation();
            }
        });

        // Restart quiz
        document.getElementById('restart-btn').addEventListener('click', () => {
            resultsDisplay.classList.add('d-none');
            questionDisplay.style.display = 'block';
            quizNavigation.style.display = 'flex';
            initQuiz();
        });

        // Go home
        document.getElementById('home-btn').addEventListener('click', () => {
            window.location.href = '{{ route("index") }}';
        });

        // Initialize quiz when page loads
        document.addEventListener('DOMContentLoaded', initQuiz);
    </script>

</body>

</html>

