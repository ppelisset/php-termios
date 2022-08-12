<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace Termios;

use FFI\CData;
use Termios\PlatformSpecific\PlatformSpecific;

final class Termios
{
    public const VEOF = PlatformSpecific::VEOF;
    public const VEOL = PlatformSpecific::VEOL;
    public const VEOL2 = PlatformSpecific::VEOL2;
    public const VERASE = PlatformSpecific::VERASE;
    public const VWERASE = PlatformSpecific::VWERASE;
    public const VKILL = PlatformSpecific::VKILL;
    public const VREPRINT = PlatformSpecific::VREPRINT;
    public const VINTR = PlatformSpecific::VINTR;
    public const VQUIT = PlatformSpecific::VQUIT;
    public const VSUSP = PlatformSpecific::VSUSP;
    public const VDSUSP = PlatformSpecific::VDSUSP;
    public const VSTART = PlatformSpecific::VSTART;
    public const VSTOP = PlatformSpecific::VSTOP;
    public const VLNEXT = PlatformSpecific::VLNEXT;
    public const VDISCARD = PlatformSpecific::VDISCARD;
    public const VMIN = PlatformSpecific::VMIN;
    public const VTIME = PlatformSpecific::VTIME;
    public const VSTATUS = PlatformSpecific::VSTATUS;
    public const NCCS = PlatformSpecific::NCCS;

    public const IGNBRK = PlatformSpecific::IGNBRK;
    public const BRKINT = PlatformSpecific::BRKINT;
    public const IGNPAR = PlatformSpecific::IGNPAR;
    public const PARMRK = PlatformSpecific::PARMRK;
    public const INPCK = PlatformSpecific::INPCK;
    public const ISTRIP = PlatformSpecific::ISTRIP;
    public const INLCR = PlatformSpecific::INLCR;
    public const IGNCR = PlatformSpecific::IGNCR;
    public const ICRNL = PlatformSpecific::ICRNL;
    public const IXON = PlatformSpecific::IXON;
    public const IXOFF = PlatformSpecific::IXOFF;
    public const IXANY = PlatformSpecific::IXANY;
    public const IMAXBEL = PlatformSpecific::IMAXBEL;
    public const IUTF8 = PlatformSpecific::IUTF8;
    public const OPOST = PlatformSpecific::OPOST;
    public const ONLCR = PlatformSpecific::ONLCR;
    public const OXTABS = PlatformSpecific::OXTABS;
    public const ONOEOT = PlatformSpecific::ONOEOT;
    public const OCRNL = PlatformSpecific::OCRNL;
    public const ONOCR = PlatformSpecific::ONOCR;
    public const ONLRET = PlatformSpecific::ONLRET;
    public const OFILL = PlatformSpecific::OFILL;
    public const NLDLY = PlatformSpecific::NLDLY;
    public const TABDLY = PlatformSpecific::TABDLY;
    public const CRDLY = PlatformSpecific::CRDLY;
    public const FFDLY = PlatformSpecific::FFDLY;
    public const BSDLY = PlatformSpecific::BSDLY;
    public const VTDLY = PlatformSpecific::VTDLY;
    public const OFDEL = PlatformSpecific::OFDEL;
    public const NL0 = PlatformSpecific::NL0;
    public const NL1 = PlatformSpecific::NL1;
    public const NL2 = PlatformSpecific::NL2;
    public const NL3 = PlatformSpecific::NL3;
    public const TAB0 = PlatformSpecific::TAB0;
    public const TAB1 = PlatformSpecific::TAB1;
    public const TAB2 = PlatformSpecific::TAB2;
    public const TAB3 = PlatformSpecific::TAB3;
    public const CR0 = PlatformSpecific::CR0;
    public const CR1 = PlatformSpecific::CR1;
    public const CR2 = PlatformSpecific::CR2;
    public const CR3 = PlatformSpecific::CR3;
    public const FF0 = PlatformSpecific::FF0;
    public const FF1 = PlatformSpecific::FF1;
    public const BS0 = PlatformSpecific::BS0;
    public const BS1 = PlatformSpecific::BS1;
    public const VT0 = PlatformSpecific::VT0;
    public const VT1 = PlatformSpecific::VT1;
    public const CIGNORE = PlatformSpecific::CIGNORE;
    public const CSIZE = PlatformSpecific::CSIZE;
    public const CS5 = PlatformSpecific::CS5;
    public const CS6 = PlatformSpecific::CS6;
    public const CS7 = PlatformSpecific::CS7;
    public const CS8 = PlatformSpecific::CS8;
    public const CSTOPB = PlatformSpecific::CSTOPB;
    public const CREAD = PlatformSpecific::CREAD;
    public const PARENB = PlatformSpecific::PARENB;
    public const PARODD = PlatformSpecific::PARODD;
    public const HUPCL = PlatformSpecific::HUPCL;
    public const CLOCAL = PlatformSpecific::CLOCAL;
    public const CCTS_OFLOW = PlatformSpecific::CCTS_OFLOW;
    public const CMSPAR = PlatformSpecific::CMSPAR;
    public const CRTSCTS = PlatformSpecific::CRTSCTS;
    public const CRTS_IFLOW = PlatformSpecific::CRTS_IFLOW;
    public const CDTR_IFLOW = PlatformSpecific::CDTR_IFLOW;
    public const CDSR_OFLOW = PlatformSpecific::CDSR_OFLOW;
    public const CCAR_OFLOW = PlatformSpecific::CCAR_OFLOW;
    public const MDMBUF = PlatformSpecific::MDMBUF;


    public const ECHOKE = PlatformSpecific::ECHOKE;
    public const ECHOE = PlatformSpecific::ECHOE;
    public const ECHOK = PlatformSpecific::ECHOK;
    public const ECHO = PlatformSpecific::ECHO;
    public const ECHONL = PlatformSpecific::ECHONL;
    public const ECHOPRT = PlatformSpecific::ECHOPRT;
    public const ECHOCTL = PlatformSpecific::ECHOCTL;
    public const ISIG = PlatformSpecific::ISIG;
    public const ICANON = PlatformSpecific::ICANON;
    public const ALTWERASE = PlatformSpecific::ALTWERASE;
    public const IEXTEN = PlatformSpecific::IEXTEN;
    public const EXTPROC = PlatformSpecific::EXTPROC;
    public const TOSTOP = PlatformSpecific::TOSTOP;
    public const FLUSHO = PlatformSpecific::FLUSHO;
    public const NOKERNINFO = PlatformSpecific::NOKERNINFO;
    public const PENDIN = PlatformSpecific::PENDIN;
    public const NOFLSH = PlatformSpecific::NOFLSH;

    public const TCSANOW = PlatformSpecific::TCSANOW;
    public const TCSADRAIN = PlatformSpecific::TCSADRAIN;
    public const TCSAFLUSH = PlatformSpecific::TCSAFLUSH;
    public const TCSASOFT = PlatformSpecific::TCSASOFT;
    public const B0 = PlatformSpecific::B0;
    public const B50 = PlatformSpecific::B50;
    public const B75 = PlatformSpecific::B75;
    public const B110 = PlatformSpecific::B110;
    public const B134 = PlatformSpecific::B134;
    public const B150 = PlatformSpecific::B150;
    public const B200 = PlatformSpecific::B200;
    public const B300 = PlatformSpecific::B300;
    public const B600 = PlatformSpecific::B600;
    public const B1200 = PlatformSpecific::B1200;
    public const B1800 = PlatformSpecific::B1800;
    public const B2400 = PlatformSpecific::B2400;
    public const B4800 = PlatformSpecific::B4800;
    public const B9600 = PlatformSpecific::B9600;
    public const B19200 = PlatformSpecific::B19200;
    public const B38400 = PlatformSpecific::B38400;
    public const B7200 = PlatformSpecific::B7200;
    public const B14400 = PlatformSpecific::B14400;
    public const B28800 = PlatformSpecific::B28800;
    public const B57600 = PlatformSpecific::B57600;
    public const B76800 = PlatformSpecific::B76800;
    public const B115200 = PlatformSpecific::B115200;
    public const B230400 = PlatformSpecific::B230400;

    public const TCIFLUSH = PlatformSpecific::TCIFLUSH;
    public const TCOFLUSH = PlatformSpecific::TCOFLUSH;
    public const TCIOFLUSH = PlatformSpecific::TCIOFLUSH;

    public int $iflag;
    public int $oflag;
    public int $cflag;
    public int $lflag;
    public array $cc = [];
    public int $ispeed;
    public int $ospeed;

    private function __construct()
    {
    }

    public static function fromCData(?CData $cdata)
    {
        $termiosData = new Termios();
        $termiosData->iflag = (int)$cdata->c_iflag;
        $termiosData->oflag = (int)$cdata->c_oflag;
        $termiosData->cflag = (int)$cdata->c_cflag;
        $termiosData->lflag = (int)$cdata->c_lflag;
        $termiosData->cc = [];
        foreach ($cdata->c_cc as $key => $value) {
            $termiosData->cc[$key] = (int)$value;
        }
        return $termiosData;
    }

    public function raw(CData $cdata): CData
    {
        $cdata->c_iflag = $this->iflag;
        $cdata->c_oflag = $this->oflag;
        $cdata->c_cflag = $this->cflag;
        $cdata->c_lflag = $this->lflag;
        foreach ($cdata->c_cc as $key => $value) {
            $cdata->c_cc[$key] = $this->cc[$key];
        }
        return $cdata;
    }

    public static function has($attribute): bool
    {
        return $attribute !== 0;
    }

    public static function attr(mixed $attribute, mixed $defaultValue): mixed
    {
        return self::has($attribute) ? $attribute : $defaultValue;
    }

    public static function tcgetattr(int $fd): Termios
    {
        return TermiosFunctions::tcgetattr($fd);
    }

    public static function tcsetattr(int $fd, OptionalAction $optionalAction, Termios $termios)
    {
        TermiosFunctions::tcsetattr($fd, $optionalAction, $termios);
    }

    public static function tcflush(int $fd, QueueSelector $queueSelector): int
    {
        return TermiosFunctions::tcflush($fd, $queueSelector);
    }
}