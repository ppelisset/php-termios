<?php

use Termios\OptionalAction;
use Termios\Termios;

$stdoutFileNo = null;

it('check retrieve termios from file descriptor', function () {
    $stdoutFileNo = fileno(STDOUT);
    expect(Termios::tcgetattr($stdoutFileNo))->toBeInstanceOf(Termios::class);
});

it('update termios on a non valid device failed', function () {
    $stdoutFileNo = fileno(STDIN);
    $termios = Termios::tcgetattr($stdoutFileNo);
    $termios->ispeed = Termios::B0;
    Termios::tcsetattr($stdoutFileNo, OptionalAction::NOW, $termios);
})->throws(\Termios\RuntimeException::class);
