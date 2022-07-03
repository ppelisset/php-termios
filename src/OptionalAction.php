<?php

namespace Termios;

use Termios\PlatformSpecific\PlatformSpecific;

enum OptionalAction: int
{
    case NOW = PlatformSpecific::TCSANOW;
    case DRAIN = PlatformSpecific::TCSADRAIN;
    case FLUSH = PlatformSpecific::TCSAFLUSH;
}