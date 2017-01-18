<?php

namespace Serman\Formatters;

use TestCase;

/**
* Test Date Order Formatter
*/
class DateOrderFormatterTest extends TestCase
{
    public function testArrayOfDatesStringDateHour()
    {
        $datesIn = [
            'Dia 01 00h45',
            'Dia 01 00h19',
            'Dia 01 00h21',
            'Dia 01 00h15',
            'Dia 01 10h45',
            'Dia 01 17h45',
            'Dia 01 11h45',
            'Dia 01 10h45',
            'Dia 01 12h45',
            'Dia 01 18h45',
            'Dia 01 19h45',
            'Dia 01 22h45',
        ];

        $expected = [
            'Dia 01 10h45',
            'Dia 01 10h45',
            'Dia 01 11h45',
            'Dia 01 12h45',
            'Dia 01 17h45',
            'Dia 01 18h45',
            'Dia 01 19h45',
            'Dia 01 22h45',
            'Dia 01 00h15',
            'Dia 01 00h19',
            'Dia 01 00h21',
            'Dia 01 00h45',
        ];

        $datesFormattedList = (new DateOrderFormatter($datesIn, '\D\i\a\ d H\\hi', true))->format();

        $this->assertEquals($expected, $datesFormattedList);
    }
    public function testArrayOfHours()
    {
        $datesIn = [
            '00h45',
            '00h30',
            '22h30',
            '13h30',
            '11h30',
            '01h30',
            '12h30',
            '04h30',
            '16h30',
            '12h30',
        ];

        $expected = [
            '11h30',
            '12h30',
            '12h30',
            '13h30',
            '16h30',
            '22h30',
            '00h30',
            '00h45',
            '01h30',
            '04h30',
        ];

        $datesFormattedList = (new DateOrderFormatter($datesIn, 'H\\hi', true))->format();

        $this->assertEquals($expected, $datesFormattedList);
    }

    public function testArrayOfDatesDDMMYYYYHHMM()
    {
        $datesIn = [
            '01/02/2016 00h45',
            '10/03/2016 00h30',
            '10/03/2016 22h30',
            '10/01/2017 13h30',
            '02/01/2017 11h30',
            '10/01/2017 01h30',
            '10/01/2017 12h30',
            '10/01/2017 04h30',
            '10/01/2016 16h30',
            '10/01/2016 12h30',
        ];

        $expected = [
            '10/01/2016 12h30',
            '10/01/2016 16h30',
            '01/02/2016 00h45',
            '10/03/2016 00h30',
            '10/03/2016 22h30',
            '02/01/2017 11h30',
            '10/01/2017 01h30',
            '10/01/2017 04h30',
            '10/01/2017 12h30',
            '10/01/2017 13h30',
            ];

        $datesFormattedList = (new DateOrderFormatter($datesIn, 'd/m/Y H\\hi'))->format();

        $this->assertEquals($expected, $datesFormattedList);
    }


}
