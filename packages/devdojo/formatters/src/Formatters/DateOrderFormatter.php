<?php

namespace Devdojo\Formatters\Formatters;

use Carbon\Carbon;

/**
* Date Order By Format
* @param array of dates
*/
class DateOrderFormatter implements FormatterInterface
{
    protected $dates;
    protected $format;
    protected $afterMidNight;

    /**
    * @param array $dates
    * @param string format, formato da data que está sendo passado para a classe
    * @param boolean $afterMidNight, se os horários após a meia noite até 5 da manhã, serão colocados no * final do array
    *
    */
    public function __construct(array $dates, $format, $afterMidNight = false)
    {
        $this->dates = $dates;
        $this->format = $format;
        $this->afterMidNight = $afterMidNight;
    }
    public function format()
    {
        usort($this->dates, array($this, 'compare'));

        return $this->dates;
    }

    private function compare($a, $b)
    {
        $a = Carbon::createFromFormat($this->format, $a);
        $b = Carbon::createFromFormat($this->format, $b);


        if ($a->format('H') < 5 && $this->afterMidNight) {
            $a->addDay(1);
        }

        if ($b->format('H') < 5 && $this->afterMidNight) {
            $b->addDay(1);
        }

        if ($a == $b) {
            return 0;
        }

        return ($a < $b) ? -1 : 1;
    }
}
