<?php

    class Clock
    {
        public const DAY_IN_SECOUNDS = 60 * 60 * 24;

        public function tomorrow(){
            return time() + self::DAY_IN_SECOUNDS;
        }
    }
    echo Clock::DAY_IN_SECOUNDS . "<br />";
    echo Clock::tomorrow();