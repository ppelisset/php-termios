# php-termios

This package is a basic port of Termios Unix API for PHP using FFI. It append some wrapper to Termios API functions and provides API constants for Linux and Darwin (MacOS).

## Installation
php-termios require PHP8.1 and php-ffi enabled. To install this package, use composer to require package `ppelisset/termios`.

## Documentation
`Termios\Termios::tcgetattr` - Get the parameters associated with the terminal

`Termios\Termios::tcsetattr` - Set the parameters associated with the terminal

`Termios\Termios::tcflush` - Flushes input or output on a terminal
