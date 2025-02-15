const player = document.getElementById('player');
const game = document.getElementById('game');
const platforms = document.getElementsByClassName('platform');
const gameOverScreen = document.getElementById('gameOverScreen');
const restartButton = document.getElementById('restartButton');
const downloadScreen = document.getElementById('downloadScreen');
const progressBar = document.getElementById('progressBar');

let gravity = 0.5;
let jumpPower = -10;
let isJumping = false;
let playerVelocityY = 0;
let playerVelocityX = 0;
let moveSpeed = 5;
let gameOver = false;

function gameLoop() {
    if (gameOver) return;

    playerVelocityY += gravity;
    player.style.top = (player.offsetTop + playerVelocityY) + 'px';
    player.style.left = (player.offsetLeft + playerVelocityX) + 'px';

    if (player.offsetTop + player.offsetHeight >= game.offsetHeight) {
        showGameOver();
    }

    for (let platform of platforms) {
        if (collision(player, platform) && playerVelocityY > 0) {
            player.style.top = (platform.offsetTop - player.offsetHeight) + 'px';
            playerVelocityY = 0;
            isJumping = false;
        }
    }

    if (player.offsetTop > game.offsetHeight) {
        showGameOver();
    }

    requestAnimationFrame(gameLoop);
}

function collision(player, platform) {
    return (
        player.offsetLeft < platform.offsetLeft + platform.offsetWidth &&
        player.offsetLeft + player.offsetWidth > platform.offsetLeft &&
        player.offsetTop < platform.offsetTop + platform.offsetHeight &&
        player.offsetTop + player.offsetHeight > platform.offsetTop
    );
}

function showGameOver() {
    gameOver = true;
    gameOverScreen.style.display = 'flex';
}

function restartGame() {
    gameOver = false;
    player.style.top = '0px';
    player.style.left = '50px';
    playerVelocityY = 0;
    playerVelocityX = 0;
    gameOverScreen.style.display = 'none';
    gameLoop();
}

document.addEventListener('keydown', function (e) {
    if (e.code === 'ArrowRight') {
        playerVelocityX = moveSpeed;
    } else if (e.code === 'ArrowLeft') {
        playerVelocityX = -moveSpeed;
    } else if (e.code === 'Space' && !isJumping) {
        playerVelocityY = jumpPower;
        isJumping = true;
    }
});

document.addEventListener('keyup', function (e) {
    if (e.code === 'ArrowRight' || e.code === 'ArrowLeft') {
        playerVelocityX = 0;
    }
});

restartButton.addEventListener('click', restartGame);

gameLoop();