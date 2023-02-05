<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"></head>
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <button type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="newGame()">New Game</button>
                <button type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="settings()">Settings</button>
                <div class="status">
                    <h1 class="dark:text-white" id="status"></h1>
                </div>
                <div class="board">
                    <div class="flex justify-center">
                        <div id="board" class="chess-board"</div>
                    </div>
                    <div class="pgn-container">
                        <div class="pgn-text-container">
                            <p class="dark:text-white" id="timeWhite"></p>
                            <p class="dark:text-white" id="timeBlack"></p>
                        </div>
                        <p id="pgn" class="dark:text-white"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="settings" class="hidden fixed top-0 left-0 right-0 z-50 hidden w-full h-full p-4 overflow-x-hidden overflow-y-auto backdrop-blur-sm">
        <div class="relative w-full h-full max-w-2xl mx-auto backdrop-blur-none">
            <!-- Settings content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Settings Title -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Settings
                    </h3>
                    <button type="button" onclick="settings()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Settings body -->
                <div class="p-6">
                    <label for="time" class="block pb-2 text-sm font-medium text-gray-900 dark:text-white mb">Time</label>
                    <select id="time" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="5">5 Min</option>
                        <option value="10">10 Min</option>
                        <option selected value="15">15 Min</option>
                        <option value="30">30 Min</option>
                        <option value="60">60 Min</option>
                    </select>
                    <label for="skill" class="block pb-2 text-sm font-medium text-gray-900 dark:text-white">Difficulty</label>
                    <select id="skill" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0">Very easy</option>
                        <option value="1">Easy</option>
                        <option selected value="2">Normal</option>
                        <option value="3">Hard</option>
                        <option value="4">Very Hard</option>
                    </select>
                    <label for="color" class="block pb-2 text-sm font-medium text-gray-900 dark:text-white">Player color</label>
                    <select id="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="white">White</option>
                        <option value="black">Black</option>
                    </select>
                </div>
            </div>
    </div>
    @push('scripts')
        <script>
            function gameEngine(){
                var game = new Chess();
                var board;
                var $status = $('#status')
                var $fen = $('#fen')
                var $pgn = $('#pgn')
                var playerColor;
                var skillLevel;
                var time;
                var timeoutTime = null;

                function startTime(color){
                    stopTime();
                    if(time.w === 0 || time.b === 0){
                        updateStatus();
                        return;
                    }
                    if(color === "white"){
                        time.w --;
                        let minutes = Math.floor(time.w / 60);
                        let seconds = time.w % 60;
                        $('#timeWhite').text('White: ' + minutes + ':' + seconds);
                    } else{
                        time.b --;
                        let minutes = Math.floor(time.b / 60);
                        let seconds = time.b % 60;
                        $('#timeBlack').text('Black: ' + minutes + ':' + seconds);
                    }
                    timeoutTime = setTimeout(startTime, 1000, color);
                }

                function stopTime(){
                    if(timeoutTime !== null){
                        clearTimeout(timeoutTime);
                        timeoutTime = null;
                    }
                }

                function onDragStart (source, piece, position, orientation) {
                    var re = playerColor == 'white' ? /^b/ : /^w/

                    // Checks if the game is not over, it's your own side, and if the match is not over
                    if ((game.turn() === 'w' && piece.search(/^b/) !== -1) ||
                        (game.turn() === 'b' && piece.search(/^w/) !== -1) ||
                        (game.isGameOver()) ||
                        piece.search(re) !== -1 ||
                        time.w === 0 || time.b === 0) {
                        return false
                    }
                }

                // checks if the move is legal and makes the move
                function onDrop (source, target) {
                    // looks if the move is on the same square
                    if (source === target) {
                        return null
                    }
                    // see if the move is legal
                    var move = game.move({
                        from: source,
                        to: target,
                        promotion: 'q' // NOTE: always promote to a queen for example simplicity
                    })
                    if (move === null) {
                        // illegal move
                        return 'snapback'
                    }

                    updateStatus()
                }

                // update the board position after the piece snap
                // for castling, en passant, pawn promotion
                function onSnapEnd () {
                    board.position(game.fen())
                }

                function aiMove(){
                    const ai = new jsChessEngine.Game(game.fen());
                    const move = ai.aiMove(skillLevel);
                    game.move({ from: Object.keys(move)[0].toString().toLowerCase(), to: Object.values(move)[0].toString().toLowerCase(), promotion: 'q' });
                    board.position(game.fen())
                    updateStatus()
                }

                function updateStatus () {
                    var status = ''

                    var moveColor = 'white'
                    if (game.turn() === 'b') {
                        moveColor = 'black'
                    }

                    // checkmate?
                    if (game.isCheckmate()) {
                        status = 'Game over, ' + moveColor + ' is in checkmate.'
                    }

                    // draw?
                    else if (game.isDraw()) {
                        status = 'Game over, drawn position'
                    }

                    else if (time.w === 0 || time.b === 0) {
                        if(time.w === 0){
                            status = 'Game over, white is out of time'
                        } else{
                            status = 'Game over, black is out of time'
                        }
                    }

                    // game still on
                    else {
                        status = moveColor + ' to move'

                        // check?
                        if (game.isCheck()) {
                            status += ', ' + moveColor + ' is in check'
                        }
                    }

                    $status.html(status)
                    $fen.html(game.fen())
                    $pgn.html(game.pgn())

                    if (moveColor !== playerColor) {
                        startTime(moveColor);
                        setTimeout(aiMove, 250)
                    } else {
                        startTime(moveColor);
                    }
                }

                var config = {
                    draggable: true,
                    position: 'start',
                    onDragStart: onDragStart,
                    onDrop: onDrop,
                    onSnapEnd: onSnapEnd,
                }

                board = Chessboard('board', config)

                return {
                    reset: function () {
                        game.reset();
                    },
                    setPlayerColor: function(color) {
                        playerColor = color;
                        board.orientation(playerColor);
                    },
                    setSkill: function(skill) {
                        skillLevel = skill;
                    },
                    setTime: function(totalTime) {
                        time = {w: totalTime, b: totalTime};
                        $('#timeWhite').text('White: ' + Math.floor(time.w / 60) + ':' + time.w % 60);
                        $('#timeBlack').text('Black: ' + Math.floor(time.b / 60) + ':' + time.b % 60);
                    },
                    start: function() {
                        board.start();
                        updateStatus();
                    },
                }
            }

            function init() {
                var game = gameEngine();

                newGame = function newGame() {
                    var skill = parseInt($('#skill').val());
                    var time = parseFloat($('#time').val()) * 60;
                    var playerColor = $('#color').val();
                    game.reset();
                    game.setPlayerColor(playerColor);
                    game.setSkill(skill);
                    game.setTime(time);
                    game.start();
                }

                newGame();
            }

            function settings() {
                const settings = document.getElementById("settings");
                if (settings.classList.contains("hidden")) {
                    settings.classList.remove("hidden");
                } else {
                    settings.classList.add("hidden");
                }
            }

            document.addEventListener('DOMContentLoaded', init);
        </script>
    @endpush
</x-app-layout>
