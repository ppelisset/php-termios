<?php

namespace Termios;

use Termios\PlatformSpecific\PlatformSpecific;

enum QueueSelector: int
{
    case IFLUSH = PlatformSpecific::TCIFLUSH;
    case OFLUSH = PlatformSpecific::TCOFLUSH;
    case IOFLUSH = PlatformSpecific::TCIOFLUSH;
}