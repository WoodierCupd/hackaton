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
                <div class="status">
                    <h1 class="dark:text-white" id="status"></h1>
                </div>
                <div class="board">
                    <div class="flex justify-center">
                        <div id="board" class="chess-board"</div>
                    </div>
                    <div class="pgn-container">
                        <div class="pgn-text-container">
                            <div class="pgn-text dark:text-white">White:</div>
                            <div class="pgn-text-2 dark:text-white">Black:</div>
                        </div>
                        <p id="pgn" class="dark:text-white"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var board = null
                var game = new Chess()
                var $status = $('#status')
                var $fen = $('#fen')
                var $pgn = $('#pgn')

                function onDragStart (source, piece, position, orientation) {
                    // do not pick up pieces if the game is over
                    if (game.isGameOver()) return false

                    // only pick up pieces for the side to move
                    if ((game.turn() === 'w' && piece.search(/^b/) !== -1) ||
                        (game.turn() === 'b' && piece.search(/^w/) !== -1) ||
                        (game.turn() === 'b' && piece.search(/^b/) !== -1)){
                        return false
                    }
                }

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

                function makeRandomMove() {
                    const ai = new jsChessEngine.Game(game.fen());
                    const move = ai.aiMove( 3);
                    game.move({ from: Object.keys(move)[0].toString().toLowerCase(), to: Object.values(move)[0].toString().toLowerCase(), promotion: 'q' });
                    board.position(game.fen())
                    updateStatus()
                }

                function updateStatus () {
                    var status = ''

                    var moveColor = 'White'
                    if (game.turn() === 'b') {
                        moveColor = 'Black'
                    }

                    // checkmate?
                    if (game.isCheckmate()) {
                        status = 'Game over, ' + moveColor + ' is in checkmate.'
                    }

                    // draw?
                    else if (game.isDraw()) {
                        status = 'Game over, drawn position'
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

                    if (moveColor === 'Black') {
                        // make random legal move for black
                        window.setTimeout(makeRandomMove, 250)
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
                updateStatus()

            });
        </script>
    @endpush
</x-app-layout>
