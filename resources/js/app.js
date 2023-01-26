import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import jQuery from 'jquery';
window.$ = jQuery;

import { Chess } from 'chess.js';

document.addEventListener('DOMContentLoaded', () => {
    var board = null
    var game = new Chess()

    function makeRandomMove () {
        var possibleMoves = game.moves()

        // exit if the game is over
        if (game.isGameOver()) return

        var randomIdx = Math.floor(Math.random() * possibleMoves.length)
        game.move(possibleMoves[randomIdx])
        board.position(game.fen())

        window.setTimeout(makeRandomMove, 500)
    }

    board = Chessboard('board', 'start')

    window.setTimeout(makeRandomMove, 500)

    // var board = Chessboard('board', {
    //     draggable: true,
    //     dropOffBoard: 'trash',
    //     position: 'start',
    //     sparePieces: false
    // })
});

