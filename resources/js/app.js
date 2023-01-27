import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import jQuery from 'jquery';
window.$ = jQuery;

import { Chess } from 'chess.js';
window.Chess = Chess;

import * as jsChessEngine from 'js-chess-engine';
window.jsChessEngine = jsChessEngine;
