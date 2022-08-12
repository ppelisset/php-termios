<?php

namespace Termios\PlatformSpecific;

abstract class BasePlatformSpecific
{
    public const VEOF = 0;
    public const VEOL = 0;
    public const VEOL2 = 0;
    public const VERASE = 0;
    public const VWERASE = 0;
    public const VKILL = 0;
    public const VREPRINT = 0;
    public const VINTR = 0;
    public const VQUIT = 0;
    public const VSUSP = 0;
    public const VDSUSP = 0;
    public const VSTART = 0;
    public const VSTOP = 0;
    public const VLNEXT = 0;
    public const VDISCARD = 0;
    public const VMIN = 0;
    public const VTIME = 0;
    public const VSTATUS = 0;
    public const NCCS = 0;
    public const IGNBRK = 0;
    public const BRKINT = 0;
    public const IGNPAR = 0;
    public const PARMRK = 0;
    public const INPCK = 0;
    public const ISTRIP = 0;
    public const INLCR = 0;
    public const IGNCR = 0;
    public const ICRNL = 0;
    public const IXON = 0;
    public const IXOFF = 0;
    public const IXANY = 0;
    public const IMAXBEL = 0;
    public const IUTF8 = 0;
    public const OPOST = 0;
    public const ONLCR = 0;
    public const OXTABS = 0;
    public const ONOEOT = 0;
    public const OCRNL = 0;
    public const ONOCR = 0;
    public const ONLRET = 0;
    public const OFILL = 0;
    public const NLDLY = 0;
    public const TABDLY = 0;
    public const CRDLY = 0;
    public const FFDLY = 0;
    public const BSDLY = 0;
    public const VTDLY = 0;
    public const OFDEL = 0;
    public const NL0 = 0;
    public const NL1 = 0;
    public const NL2 = 0;
    public const NL3 = 0;
    public const TAB0 = 0;
    public const TAB1 = 0;
    public const TAB2 = 0;
    public const TAB3 = 0;
    public const CR0 = 0;
    public const CR1 = 0;
    public const CR2 = 0;
    public const CR3 = 0;
    public const FF0 = 0;
    public const FF1 = 0;
    public const BS0 = 0;
    public const BS1 = 0;
    public const VT0 = 0;
    public const VT1 = 0;
    public const CIGNORE = 0;
    public const CSIZE = 0;
    public const CS5 = 0;
    public const CS6 = 0;
    public const CS7 = 0;
    public const CS8 = 0;
    public const CSTOPB = 0;
    public const CREAD = 0;
    public const PARENB = 0;
    public const PARODD = 0;
    public const HUPCL = 0;
    public const CLOCAL = 0;
    public const CCTS_OFLOW = 0;
    public const CRTSCTS = 0;
    public const CMSPAR = 0;
    public const CRTS_IFLOW = 0;
    public const CDTR_IFLOW = 0;
    public const CDSR_OFLOW = 0;
    public const CCAR_OFLOW = 0;
    public const MDMBUF = 0;
    public const ECHOKE = 0;
    public const ECHOE = 0;
    public const ECHOK = 0;
    public const ECHO = 0;
    public const ECHONL = 0;
    public const ECHOPRT = 0;
    public const ECHOCTL = 0;
    public const ISIG = 0;
    public const ICANON = 0;
    public const ALTWERASE = 0;
    public const IEXTEN = 0;
    public const EXTPROC = 0;
    public const TOSTOP = 0;
    public const FLUSHO = 0;
    public const NOKERNINFO = 0;
    public const PENDIN = 0;
    public const NOFLSH = 0;
    public const TCSANOW = 0;
    public const TCSADRAIN = 0;
    public const TCSAFLUSH = 0;
    public const TCSASOFT = 0;
    public const B0 = 0;
    public const B50 = 0;
    public const B75 = 0;
    public const B110 = 0;
    public const B134 = 0;
    public const B150 = 0;
    public const B200 = 0;
    public const B300 = 0;
    public const B600 = 0;
    public const B1200 = 0;
    public const B1800 = 0;
    public const B2400 = 0;
    public const B4800 = 0;
    public const B9600 = 0;
    public const B19200 = 0;
    public const B38400 = 0;
    public const B7200 = 0;
    public const B14400 = 0;
    public const B28800 = 0;
    public const B57600 = 0;
    public const B76800 = 0;
    public const B115200 = 0;
    public const B230400 = 0;
    public const TCIFLUSH = 0;
    public const TCOFLUSH = 0;
    public const TCIOFLUSH = 0;

    public function getFlagCType(): string
    {
        return "unsigned int";
    }

    public function getSpeedCType(): string
    {
        return "unsigned int";
    }

    public function getCustomStructMembers(): array
    {
        return [];
    }
}