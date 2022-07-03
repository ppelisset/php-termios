<?php

namespace Termios;

use FFI;
use Termios\PlatformSpecific\PlatformSpecific;

final class TermiosFunctions
{
    private const HEADER_DIRECTORY = __DIR__ . "/header/";
    private static ?FFI $ffi = null;

    public static function tcgetattr(int $fd): Termios
    {
        $ffi = self::getFFI();
        $termiosCData = $ffi->new("struct termios");
        $ffi->tcgetattr($fd, FFI::addr($termiosCData));
        $termios = Termios::fromCData($termiosCData);
        $termios->ispeed = (int)$ffi->cfgetispeed(FFI::addr($termiosCData));
        $termios->ospeed = (int)$ffi->cfgetospeed(FFI::addr($termiosCData));
        return $termios;
    }

    public static function tcsetattr(int $fd, OptionalAction $optionalAction, Termios $termios)
    {
        $ffi = self::getFFI();
        $termiosCData = $ffi->new("struct termios");
        $termios->raw($termiosCData);
        if ($ffi->tcsetattr($fd, $optionalAction->value, FFI::addr($termiosCData)) !== 0) {
            throw new \RuntimeException("Error during tcsetattr");
        }
        $ffi->cfsetispeed(FFI::addr($termiosCData), $termios->ispeed);
        $ffi->cfsetospeed(FFI::addr($termiosCData), $termios->ospeed);
    }

    public static function tcflush(int $fd, QueueSelector $queueSelector): int
    {
        return self::getFFI()->tcflush($fd, $queueSelector->value);
    }

    private static function getFFI(): FFI
    {
        if (is_null(self::$ffi)) {
            self::createFFI();
        }
        return self::$ffi;
    }

    private static function createFFI(): void
    {
        $platformSpecific = new PlatformSpecific();
        $platformHeaderTemplate = file_get_contents(__DIR__ . "/header.h");
        $replaceValues = [
            "FLAG_C_TYPE" => $platformSpecific->getFlagCType(),
            "SPEED_C_TYPE" => $platformSpecific->getSpeedCType(),
            "STRUCT_CUSTOM_MEMBERS" => implode(";\n", $platformSpecific->getCustomStructMembers()),
            "NCCS" => PlatformSpecific::NCCS
        ];
        $header = preg_replace_callback("/{{\s*(?<name>[\w_]*)\s*}}/", fn($match) => $replaceValues[$match['name']] ?? '', $platformHeaderTemplate);
        self::$ffi = FFI::cdef($header);
    }
}