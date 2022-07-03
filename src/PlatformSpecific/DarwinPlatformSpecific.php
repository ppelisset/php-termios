<?php

namespace Termios\PlatformSpecific;

final class PlatformSpecific extends BasePlatformSpecific
{
    public const VEOF = 0x00000000;
    public const VEOL = 0x00000001;
    public const VEOL2 = 0x00000002;
    public const VERASE = 0x00000003;
    public const VWERASE = 0x00000004;
    public const VKILL = 0x00000005;
    public const VREPRINT = 0x00000006;
    public const VINTR = 0x00000008;
    public const VQUIT = 0x00000009;
    public const VSUSP = 0x0000000a;
    public const VDSUSP = 0x0000000b;
    public const VSTART = 0x0000000c;
    public const VSTOP = 0x0000000d;
    public const VLNEXT = 0x0000000e;
    public const VDISCARD = 0x0000000f;
    public const VMIN = 0x00000010;
    public const VTIME = 0x00000011;
    public const VSTATUS = 0x00000012;
    public const NCCS = 0x00000014;
    public const IGNBRK = 0x00000001;
    public const BRKINT = 0x00000002;
    public const IGNPAR = 0x00000004;
    public const PARMRK = 0x00000008;
    public const INPCK = 0x00000010;
    public const ISTRIP = 0x00000020;
    public const INLCR = 0x00000040;
    public const IGNCR = 0x00000080;
    public const ICRNL = 0x00000100;
    public const IXON = 0x00000200;
    public const IXOFF = 0x00000400;
    public const IXANY = 0x00000800;
    public const IMAXBEL = 0x00002000;
    public const IUTF8 = 0x00004000;
    public const OPOST = 0x00000001;
    public const ONLCR = 0x00000002;
    public const OXTABS = 0x00000004;
    public const ONOEOT = 0x00000008;
    public const OCRNL = 0x00000010;
    public const ONOCR = 0x00000020;
    public const ONLRET = 0x00000040;
    public const OFILL = 0x00000080;
    public const NLDLY = 0x00000300;
    public const TABDLY = 0x00000c04;
    public const CRDLY = 0x00003000;
    public const FFDLY = 0x00004000;
    public const BSDLY = 0x00008000;
    public const VTDLY = 0x00010000;
    public const OFDEL = 0x00020000;
    public const NL0 = 0x00000000;
    public const NL1 = 0x00000100;
    public const NL2 = 0x00000200;
    public const NL3 = 0x00000300;
    public const TAB0 = 0x00000000;
    public const TAB1 = 0x00000400;
    public const TAB2 = 0x00000800;
    public const TAB3 = 0x00000004;
    public const CR0 = 0x00000000;
    public const CR1 = 0x00001000;
    public const CR2 = 0x00002000;
    public const CR3 = 0x00003000;
    public const FF0 = 0x00000000;
    public const FF1 = 0x00004000;
    public const BS0 = 0x00000000;
    public const BS1 = 0x00008000;
    public const VT0 = 0x00000000;
    public const VT1 = 0x00010000;
    public const CIGNORE = 0x00000001;
    public const CSIZE = 0x00000300;
    public const CS5 = 0x00000000;
    public const CS6 = 0x00000100;
    public const CS7 = 0x00000200;
    public const CS8 = 0x00000300;
    public const CSTOPB = 0x00000400;
    public const CREAD = 0x00000800;
    public const PARENB = 0x00001000;
    public const PARODD = 0x00002000;
    public const HUPCL = 0x00004000;
    public const CLOCAL = 0x00008000;
    public const CCTS_OFLOW = 0x00010000;
    public const CRTSCTS = 0x00030000;
    public const CRTS_IFLOW = 0x00020000;
    public const CDTR_IFLOW = 0x00040000;
    public const CDSR_OFLOW = 0x00080000;
    public const CCAR_OFLOW = 0x00100000;
    public const MDMBUF = 0x00100000;
    public const ECHOKE = 0x00000001;
    public const ECHOE = 0x00000002;
    public const ECHOK = 0x00000004;
    public const ECHO = 0x00000008;
    public const ECHONL = 0x00000010;
    public const ECHOPRT = 0x00000020;
    public const ECHOCTL = 0x00000040;
    public const ISIG = 0x00000080;
    public const ICANON = 0x00000100;
    public const ALTWERASE = 0x00000200;
    public const IEXTEN = 0x00000400;
    public const EXTPROC = 0x00000800;
    public const TOSTOP = 0x00400000;
    public const FLUSHO = 0x00800000;
    public const NOKERNINFO = 0x02000000;
    public const PENDIN = 0x20000000;
    public const NOFLSH = 0x80000000;
    public const TCSANOW = 0x00000000;
    public const TCSADRAIN = 0x00000001;
    public const TCSAFLUSH = 0x00000002;
    public const TCSASOFT = 0x00000010;
    public const B0 = 0x00000000;
    public const B50 = 0x00000032;
    public const B75 = 0x0000004b;
    public const B110 = 0x0000006e;
    public const B134 = 0x00000086;
    public const B150 = 0x00000096;
    public const B200 = 0x000000c8;
    public const B300 = 0x0000012c;
    public const B600 = 0x00000258;
    public const B1200 = 0x000004b0;
    public const B1800 = 0x00000708;
    public const B2400 = 0x00000960;
    public const B4800 = 0x000012c0;
    public const B9600 = 0x00002580;
    public const B19200 = 0x00004b00;
    public const B38400 = 0x00009600;
    public const B7200 = 0x00001c20;
    public const B14400 = 0x00003840;
    public const B28800 = 0x00007080;
    public const B57600 = 0x0000e100;
    public const B76800 = 0x00012c00;
    public const B115200 = 0x0001c200;
    public const B230400 = 0x00038400;

    public function getFlagCType(): string
    {
        return "unsigned long";
    }

    public function getSpeedCType(): string
    {
        return "unsigned long";
    }

    public function getCustomStructMembers(): array
    {
        return [
            "speed_t c_ispeed",
            "speed_t c_ospeed"
        ];
    }
}
