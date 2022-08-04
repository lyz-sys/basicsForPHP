<?php

namespace learn\src\Facade;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTimeInterface;
use DateTimeZone;

/**
 * @method static bool                isUtc()                                                                              Check if the current instance has UTC timezone. (Both isUtc and isUTC cases are valid.)
 * @method static bool                isLocal()                                                                            Check if the current instance has non-UTC timezone.
 * @method static bool                isValid()                                                                            Check if the current instance is a valid date.
 * @method static bool                isDST()                                                                              Check if the current instance is in a daylight saving time.
 * @method static bool                isSunday()                                                                           Checks if the instance day is sunday.
 * @method static bool                isMonday()                                                                           Checks if the instance day is monday.
 * @method static bool                isTuesday()                                                                          Checks if the instance day is tuesday.
 * @method static bool                isWednesday()                                                                        Checks if the instance day is wednesday.
 * @method static bool                isThursday()                                                                         Checks if the instance day is thursday.
 * @method static bool                isFriday()                                                                           Checks if the instance day is friday.
 * @method static bool                isSaturday()                                                                         Checks if the instance day is saturday.
 * @method static bool                isSameYear(Carbon|DateTimeInterface|string|null $date = null)                        Checks if the given date is in the same year as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentYear()                                                                      Checks if the instance is in the same year as the current moment.
 * @method static bool                isNextYear()                                                                         Checks if the instance is in the same year as the current moment next year.
 * @method static bool                isLastYear()                                                                         Checks if the instance is in the same year as the current moment last year.
 * @method static bool                isSameWeek(Carbon|DateTimeInterface|string|null $date = null)                        Checks if the given date is in the same week as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentWeek()                                                                      Checks if the instance is in the same week as the current moment.
 * @method static bool                isNextWeek()                                                                         Checks if the instance is in the same week as the current moment next week.
 * @method static bool                isLastWeek()                                                                         Checks if the instance is in the same week as the current moment last week.
 * @method static bool                isSameDay(Carbon|DateTimeInterface|string|null $date = null)                         Checks if the given date is in the same day as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentDay()                                                                       Checks if the instance is in the same day as the current moment.
 * @method static bool                isNextDay()                                                                          Checks if the instance is in the same day as the current moment next day.
 * @method static bool                isLastDay()                                                                          Checks if the instance is in the same day as the current moment last day.
 * @method static bool                isSameHour(Carbon|DateTimeInterface|string|null $date = null)                        Checks if the given date is in the same hour as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentHour()                                                                      Checks if the instance is in the same hour as the current moment.
 * @method static bool                isNextHour()                                                                         Checks if the instance is in the same hour as the current moment next hour.
 * @method static bool                isLastHour()                                                                         Checks if the instance is in the same hour as the current moment last hour.
 * @method static bool                isSameMinute(Carbon|DateTimeInterface|string|null $date = null)                      Checks if the given date is in the same minute as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentMinute()                                                                    Checks if the instance is in the same minute as the current moment.
 * @method static bool                isNextMinute()                                                                       Checks if the instance is in the same minute as the current moment next minute.
 * @method static bool                isLastMinute()                                                                       Checks if the instance is in the same minute as the current moment last minute.
 * @method static bool                isSameSecond(Carbon|DateTimeInterface|string|null $date = null)                      Checks if the given date is in the same second as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentSecond()                                                                    Checks if the instance is in the same second as the current moment.
 * @method static bool                isNextSecond()                                                                       Checks if the instance is in the same second as the current moment next second.
 * @method static bool                isLastSecond()                                                                       Checks if the instance is in the same second as the current moment last second.
 * @method static bool                isSameMicro(Carbon|DateTimeInterface|string|null $date = null)                       Checks if the given date is in the same microsecond as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentMicro()                                                                     Checks if the instance is in the same microsecond as the current moment.
 * @method static bool                isNextMicro()                                                                        Checks if the instance is in the same microsecond as the current moment next microsecond.
 * @method static bool                isLastMicro()                                                                        Checks if the instance is in the same microsecond as the current moment last microsecond.
 * @method static bool                isSameMicrosecond(Carbon|DateTimeInterface|string|null $date = null)                 Checks if the given date is in the same microsecond as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentMicrosecond()                                                               Checks if the instance is in the same microsecond as the current moment.
 * @method static bool                isNextMicrosecond()                                                                  Checks if the instance is in the same microsecond as the current moment next microsecond.
 * @method static bool                isLastMicrosecond()                                                                  Checks if the instance is in the same microsecond as the current moment last microsecond.
 * @method static bool                isCurrentMonth()                                                                     Checks if the instance is in the same month as the current moment.
 * @method static bool                isNextMonth()                                                                        Checks if the instance is in the same month as the current moment next month.
 * @method static bool                isLastMonth()                                                                        Checks if the instance is in the same month as the current moment last month.
 * @method static bool                isCurrentQuarter()                                                                   Checks if the instance is in the same quarter as the current moment.
 * @method static bool                isNextQuarter()                                                                      Checks if the instance is in the same quarter as the current moment next quarter.
 * @method static bool                isLastQuarter()                                                                      Checks if the instance is in the same quarter as the current moment last quarter.
 * @method static bool                isSameDecade(Carbon|DateTimeInterface|string|null $date = null)                      Checks if the given date is in the same decade as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentDecade()                                                                    Checks if the instance is in the same decade as the current moment.
 * @method static bool                isNextDecade()                                                                       Checks if the instance is in the same decade as the current moment next decade.
 * @method static bool                isLastDecade()                                                                       Checks if the instance is in the same decade as the current moment last decade.
 * @method static bool                isSameCentury(Carbon|DateTimeInterface|string|null $date = null)                     Checks if the given date is in the same century as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentCentury()                                                                   Checks if the instance is in the same century as the current moment.
 * @method static bool                isNextCentury()                                                                      Checks if the instance is in the same century as the current moment next century.
 * @method static bool                isLastCentury()                                                                      Checks if the instance is in the same century as the current moment last century.
 * @method static bool                isSameMillennium(Carbon|DateTimeInterface|string|null $date = null)                  Checks if the given date is in the same millennium as the instance. If null passed, compare to now (with the same timezone).
 * @method static bool                isCurrentMillennium()                                                                Checks if the instance is in the same millennium as the current moment.
 * @method static bool                isNextMillennium()                                                                   Checks if the instance is in the same millennium as the current moment next millennium.
 * @method static bool                isLastMillennium()                                                                   Checks if the instance is in the same millennium as the current moment last millennium.
 * @method static Carbon               years(int $value)                                                                    Set current instance year to the given value.
 * @method static Carbon               year(int $value)                                                                     Set current instance year to the given value.
 * @method static Carbon               setYears(int $value)                                                                 Set current instance year to the given value.
 * @method static Carbon               setYear(int $value)                                                                  Set current instance year to the given value.
 * @method static Carbon               months(int $value)                                                                   Set current instance month to the given value.
 * @method static Carbon               month(int $value)                                                                    Set current instance month to the given value.
 * @method static Carbon               setMonths(int $value)                                                                Set current instance month to the given value.
 * @method static Carbon               setMonth(int $value)                                                                 Set current instance month to the given value.
 * @method static Carbon               days(int $value)                                                                     Set current instance day to the given value.
 * @method static Carbon               day(int $value)                                                                      Set current instance day to the given value.
 * @method static Carbon               setDays(int $value)                                                                  Set current instance day to the given value.
 * @method static Carbon               setDay(int $value)                                                                   Set current instance day to the given value.
 * @method static Carbon               hours(int $value)                                                                    Set current instance hour to the given value.
 * @method static Carbon               hour(int $value)                                                                     Set current instance hour to the given value.
 * @method static Carbon               setHours(int $value)                                                                 Set current instance hour to the given value.
 * @method static Carbon               setHour(int $value)                                                                  Set current instance hour to the given value.
 * @method static Carbon               minutes(int $value)                                                                  Set current instance minute to the given value.
 * @method static Carbon               minute(int $value)                                                                   Set current instance minute to the given value.
 * @method static Carbon               setMinutes(int $value)                                                               Set current instance minute to the given value.
 * @method static Carbon               setMinute(int $value)                                                                Set current instance minute to the given value.
 * @method static Carbon               seconds(int $value)                                                                  Set current instance second to the given value.
 * @method static Carbon               second(int $value)                                                                   Set current instance second to the given value.
 * @method static Carbon               setSeconds(int $value)                                                               Set current instance second to the given value.
 * @method static Carbon               setSecond(int $value)                                                                Set current instance second to the given value.
 * @method static Carbon               millis(int $value)                                                                   Set current instance millisecond to the given value.
 * @method static Carbon               milli(int $value)                                                                    Set current instance millisecond to the given value.
 * @method static Carbon               setMillis(int $value)                                                                Set current instance millisecond to the given value.
 * @method static Carbon               setMilli(int $value)                                                                 Set current instance millisecond to the given value.
 * @method static Carbon               milliseconds(int $value)                                                             Set current instance millisecond to the given value.
 * @method static Carbon               millisecond(int $value)                                                              Set current instance millisecond to the given value.
 * @method static Carbon               setMilliseconds(int $value)                                                          Set current instance millisecond to the given value.
 * @method static Carbon               setMillisecond(int $value)                                                           Set current instance millisecond to the given value.
 * @method static Carbon               micros(int $value)                                                                   Set current instance microsecond to the given value.
 * @method static Carbon               micro(int $value)                                                                    Set current instance microsecond to the given value.
 * @method static Carbon               setMicros(int $value)                                                                Set current instance microsecond to the given value.
 * @method static Carbon               setMicro(int $value)                                                                 Set current instance microsecond to the given value.
 * @method static Carbon               microseconds(int $value)                                                             Set current instance microsecond to the given value.
 * @method static Carbon               microsecond(int $value)                                                              Set current instance microsecond to the given value.
 * @method static Carbon               setMicroseconds(int $value)                                                          Set current instance microsecond to the given value.
 * @method static Carbon               setMicrosecond(int $value)                                                           Set current instance microsecond to the given value.
 * @method static Carbon               addYears(int $value = 1)                                                             Add years (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addYear()                                                                            Add one year to the instance (using date interval).
 * @method static Carbon               subYears(int $value = 1)                                                             Sub years (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subYear()                                                                            Sub one year to the instance (using date interval).
 * @method static Carbon               addYearsWithOverflow(int $value = 1)                                                 Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addYearWithOverflow()                                                                Add one year to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subYearsWithOverflow(int $value = 1)                                                 Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subYearWithOverflow()                                                                Sub one year to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addYearsWithoutOverflow(int $value = 1)                                              Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addYearWithoutOverflow()                                                             Add one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearsWithoutOverflow(int $value = 1)                                              Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearWithoutOverflow()                                                             Sub one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addYearsWithNoOverflow(int $value = 1)                                               Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addYearWithNoOverflow()                                                              Add one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearsWithNoOverflow(int $value = 1)                                               Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearWithNoOverflow()                                                              Sub one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addYearsNoOverflow(int $value = 1)                                                   Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addYearNoOverflow()                                                                  Add one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearsNoOverflow(int $value = 1)                                                   Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subYearNoOverflow()                                                                  Sub one year to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonths(int $value = 1)                                                            Add months (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMonth()                                                                           Add one month to the instance (using date interval).
 * @method static Carbon               subMonths(int $value = 1)                                                            Sub months (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMonth()                                                                           Sub one month to the instance (using date interval).
 * @method static Carbon               addMonthsWithOverflow(int $value = 1)                                                Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addMonthWithOverflow()                                                               Add one month to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subMonthsWithOverflow(int $value = 1)                                                Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subMonthWithOverflow()                                                               Sub one month to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addMonthsWithoutOverflow(int $value = 1)                                             Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonthWithoutOverflow()                                                            Add one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthsWithoutOverflow(int $value = 1)                                             Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthWithoutOverflow()                                                            Sub one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonthsWithNoOverflow(int $value = 1)                                              Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonthWithNoOverflow()                                                             Add one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthsWithNoOverflow(int $value = 1)                                              Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthWithNoOverflow()                                                             Sub one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonthsNoOverflow(int $value = 1)                                                  Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMonthNoOverflow()                                                                 Add one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthsNoOverflow(int $value = 1)                                                  Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMonthNoOverflow()                                                                 Sub one month to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDays(int $value = 1)                                                              Add days (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addDay()                                                                             Add one day to the instance (using date interval).
 * @method static Carbon               subDays(int $value = 1)                                                              Sub days (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subDay()                                                                             Sub one day to the instance (using date interval).
 * @method static Carbon               addHours(int $value = 1)                                                             Add hours (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addHour()                                                                            Add one hour to the instance (using date interval).
 * @method static Carbon               subHours(int $value = 1)                                                             Sub hours (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subHour()                                                                            Sub one hour to the instance (using date interval).
 * @method static Carbon               addMinutes(int $value = 1)                                                           Add minutes (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMinute()                                                                          Add one minute to the instance (using date interval).
 * @method static Carbon               subMinutes(int $value = 1)                                                           Sub minutes (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMinute()                                                                          Sub one minute to the instance (using date interval).
 * @method static Carbon               addSeconds(int $value = 1)                                                           Add seconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addSecond()                                                                          Add one second to the instance (using date interval).
 * @method static Carbon               subSeconds(int $value = 1)                                                           Sub seconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subSecond()                                                                          Sub one second to the instance (using date interval).
 * @method static Carbon               addMillis(int $value = 1)                                                            Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMilli()                                                                           Add one millisecond to the instance (using date interval).
 * @method static Carbon               subMillis(int $value = 1)                                                            Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMilli()                                                                           Sub one millisecond to the instance (using date interval).
 * @method static Carbon               addMilliseconds(int $value = 1)                                                      Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMillisecond()                                                                     Add one millisecond to the instance (using date interval).
 * @method static Carbon               subMilliseconds(int $value = 1)                                                      Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMillisecond()                                                                     Sub one millisecond to the instance (using date interval).
 * @method static Carbon               addMicros(int $value = 1)                                                            Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMicro()                                                                           Add one microsecond to the instance (using date interval).
 * @method static Carbon               subMicros(int $value = 1)                                                            Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMicro()                                                                           Sub one microsecond to the instance (using date interval).
 * @method static Carbon               addMicroseconds(int $value = 1)                                                      Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMicrosecond()                                                                     Add one microsecond to the instance (using date interval).
 * @method static Carbon               subMicroseconds(int $value = 1)                                                      Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMicrosecond()                                                                     Sub one microsecond to the instance (using date interval).
 * @method static Carbon               addMillennia(int $value = 1)                                                         Add millennia (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addMillennium()                                                                      Add one millennium to the instance (using date interval).
 * @method static Carbon               subMillennia(int $value = 1)                                                         Sub millennia (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subMillennium()                                                                      Sub one millennium to the instance (using date interval).
 * @method static Carbon               addMillenniaWithOverflow(int $value = 1)                                             Add millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addMillenniumWithOverflow()                                                          Add one millennium to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subMillenniaWithOverflow(int $value = 1)                                             Sub millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subMillenniumWithOverflow()                                                          Sub one millennium to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addMillenniaWithoutOverflow(int $value = 1)                                          Add millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMillenniumWithoutOverflow()                                                       Add one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniaWithoutOverflow(int $value = 1)                                          Sub millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniumWithoutOverflow()                                                       Sub one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMillenniaWithNoOverflow(int $value = 1)                                           Add millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMillenniumWithNoOverflow()                                                        Add one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniaWithNoOverflow(int $value = 1)                                           Sub millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniumWithNoOverflow()                                                        Sub one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMillenniaNoOverflow(int $value = 1)                                               Add millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addMillenniumNoOverflow()                                                            Add one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniaNoOverflow(int $value = 1)                                               Sub millennia (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subMillenniumNoOverflow()                                                            Sub one millennium to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturies(int $value = 1)                                                         Add centuries (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addCentury()                                                                         Add one century to the instance (using date interval).
 * @method static Carbon               subCenturies(int $value = 1)                                                         Sub centuries (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subCentury()                                                                         Sub one century to the instance (using date interval).
 * @method static Carbon               addCenturiesWithOverflow(int $value = 1)                                             Add centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addCenturyWithOverflow()                                                             Add one century to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subCenturiesWithOverflow(int $value = 1)                                             Sub centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subCenturyWithOverflow()                                                             Sub one century to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addCenturiesWithoutOverflow(int $value = 1)                                          Add centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturyWithoutOverflow()                                                          Add one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturiesWithoutOverflow(int $value = 1)                                          Sub centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturyWithoutOverflow()                                                          Sub one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturiesWithNoOverflow(int $value = 1)                                           Add centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturyWithNoOverflow()                                                           Add one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturiesWithNoOverflow(int $value = 1)                                           Sub centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturyWithNoOverflow()                                                           Sub one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturiesNoOverflow(int $value = 1)                                               Add centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addCenturyNoOverflow()                                                               Add one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturiesNoOverflow(int $value = 1)                                               Sub centuries (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subCenturyNoOverflow()                                                               Sub one century to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecades(int $value = 1)                                                           Add decades (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addDecade()                                                                          Add one decade to the instance (using date interval).
 * @method static Carbon               subDecades(int $value = 1)                                                           Sub decades (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subDecade()                                                                          Sub one decade to the instance (using date interval).
 * @method static Carbon               addDecadesWithOverflow(int $value = 1)                                               Add decades (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addDecadeWithOverflow()                                                              Add one decade to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subDecadesWithOverflow(int $value = 1)                                               Sub decades (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subDecadeWithOverflow()                                                              Sub one decade to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addDecadesWithoutOverflow(int $value = 1)                                            Add decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecadeWithoutOverflow()                                                           Add one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadesWithoutOverflow(int $value = 1)                                            Sub decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadeWithoutOverflow()                                                           Sub one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecadesWithNoOverflow(int $value = 1)                                             Add decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecadeWithNoOverflow()                                                            Add one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadesWithNoOverflow(int $value = 1)                                             Sub decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadeWithNoOverflow()                                                            Sub one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecadesNoOverflow(int $value = 1)                                                 Add decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addDecadeNoOverflow()                                                                Add one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadesNoOverflow(int $value = 1)                                                 Sub decades (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subDecadeNoOverflow()                                                                Sub one decade to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuarters(int $value = 1)                                                          Add quarters (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addQuarter()                                                                         Add one quarter to the instance (using date interval).
 * @method static Carbon               subQuarters(int $value = 1)                                                          Sub quarters (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subQuarter()                                                                         Sub one quarter to the instance (using date interval).
 * @method static Carbon               addQuartersWithOverflow(int $value = 1)                                              Add quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addQuarterWithOverflow()                                                             Add one quarter to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subQuartersWithOverflow(int $value = 1)                                              Sub quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               subQuarterWithOverflow()                                                             Sub one quarter to the instance (using date interval) with overflow explicitly allowed.
 * @method static Carbon               addQuartersWithoutOverflow(int $value = 1)                                           Add quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuarterWithoutOverflow()                                                          Add one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuartersWithoutOverflow(int $value = 1)                                           Sub quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuarterWithoutOverflow()                                                          Sub one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuartersWithNoOverflow(int $value = 1)                                            Add quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuarterWithNoOverflow()                                                           Add one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuartersWithNoOverflow(int $value = 1)                                            Sub quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuarterWithNoOverflow()                                                           Sub one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuartersNoOverflow(int $value = 1)                                                Add quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addQuarterNoOverflow()                                                               Add one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuartersNoOverflow(int $value = 1)                                                Sub quarters (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               subQuarterNoOverflow()                                                               Sub one quarter to the instance (using date interval) with overflow explicitly forbidden.
 * @method static Carbon               addWeeks(int $value = 1)                                                             Add weeks (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addWeek()                                                                            Add one week to the instance (using date interval).
 * @method static Carbon               subWeeks(int $value = 1)                                                             Sub weeks (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subWeek()                                                                            Sub one week to the instance (using date interval).
 * @method static Carbon               addWeekdays(int $value = 1)                                                          Add weekdays (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               addWeekday()                                                                         Add one weekday to the instance (using date interval).
 * @method static Carbon               subWeekdays(int $value = 1)                                                          Sub weekdays (the $value count passed in) to the instance (using date interval).
 * @method static Carbon               subWeekday()                                                                         Sub one weekday to the instance (using date interval).
 * @method static Carbon               addRealMicros(int $value = 1)                                                        Add microseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMicro()                                                                       Add one microsecond to the instance (using timestamp).
 * @method static Carbon               subRealMicros(int $value = 1)                                                        Sub microseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMicro()                                                                       Sub one microsecond to the instance (using timestamp).
 * @method static CarbonPeriod        microsUntil($endDate = null, int $factor = 1)                                        Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each microsecond or every X microseconds if a factor is given.
 * @method static Carbon               addRealMicroseconds(int $value = 1)                                                  Add microseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMicrosecond()                                                                 Add one microsecond to the instance (using timestamp).
 * @method static Carbon               subRealMicroseconds(int $value = 1)                                                  Sub microseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMicrosecond()                                                                 Sub one microsecond to the instance (using timestamp).
 * @method static CarbonPeriod        microsecondsUntil($endDate = null, int $factor = 1)                                  Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each microsecond or every X microseconds if a factor is given.
 * @method static Carbon               addRealMillis(int $value = 1)                                                        Add milliseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMilli()                                                                       Add one millisecond to the instance (using timestamp).
 * @method static Carbon               subRealMillis(int $value = 1)                                                        Sub milliseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMilli()                                                                       Sub one millisecond to the instance (using timestamp).
 * @method static CarbonPeriod        millisUntil($endDate = null, int $factor = 1)                                        Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each millisecond or every X milliseconds if a factor is given.
 * @method static Carbon               addRealMilliseconds(int $value = 1)                                                  Add milliseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMillisecond()                                                                 Add one millisecond to the instance (using timestamp).
 * @method static Carbon               subRealMilliseconds(int $value = 1)                                                  Sub milliseconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMillisecond()                                                                 Sub one millisecond to the instance (using timestamp).
 * @method static CarbonPeriod        millisecondsUntil($endDate = null, int $factor = 1)                                  Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each millisecond or every X milliseconds if a factor is given.
 * @method static Carbon               addRealSeconds(int $value = 1)                                                       Add seconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealSecond()                                                                      Add one second to the instance (using timestamp).
 * @method static Carbon               subRealSeconds(int $value = 1)                                                       Sub seconds (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealSecond()                                                                      Sub one second to the instance (using timestamp).
 * @method static CarbonPeriod        secondsUntil($endDate = null, int $factor = 1)                                       Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each second or every X seconds if a factor is given.
 * @method static Carbon               addRealMinutes(int $value = 1)                                                       Add minutes (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMinute()                                                                      Add one minute to the instance (using timestamp).
 * @method static Carbon               subRealMinutes(int $value = 1)                                                       Sub minutes (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMinute()                                                                      Sub one minute to the instance (using timestamp).
 * @method static CarbonPeriod        minutesUntil($endDate = null, int $factor = 1)                                       Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each minute or every X minutes if a factor is given.
 * @method static Carbon               addRealHours(int $value = 1)                                                         Add hours (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealHour()                                                                        Add one hour to the instance (using timestamp).
 * @method static Carbon               subRealHours(int $value = 1)                                                         Sub hours (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealHour()                                                                        Sub one hour to the instance (using timestamp).
 * @method static CarbonPeriod        hoursUntil($endDate = null, int $factor = 1)                                         Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each hour or every X hours if a factor is given.
 * @method static Carbon               addRealDays(int $value = 1)                                                          Add days (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealDay()                                                                         Add one day to the instance (using timestamp).
 * @method static Carbon               subRealDays(int $value = 1)                                                          Sub days (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealDay()                                                                         Sub one day to the instance (using timestamp).
 * @method static CarbonPeriod        daysUntil($endDate = null, int $factor = 1)                                          Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each day or every X days if a factor is given.
 * @method static Carbon               addRealWeeks(int $value = 1)                                                         Add weeks (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealWeek()                                                                        Add one week to the instance (using timestamp).
 * @method static Carbon               subRealWeeks(int $value = 1)                                                         Sub weeks (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealWeek()                                                                        Sub one week to the instance (using timestamp).
 * @method static CarbonPeriod        weeksUntil($endDate = null, int $factor = 1)                                         Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each week or every X weeks if a factor is given.
 * @method static Carbon               addRealMonths(int $value = 1)                                                        Add months (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMonth()                                                                       Add one month to the instance (using timestamp).
 * @method static Carbon               subRealMonths(int $value = 1)                                                        Sub months (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMonth()                                                                       Sub one month to the instance (using timestamp).
 * @method static CarbonPeriod        monthsUntil($endDate = null, int $factor = 1)                                        Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each month or every X months if a factor is given.
 * @method static Carbon               addRealQuarters(int $value = 1)                                                      Add quarters (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealQuarter()                                                                     Add one quarter to the instance (using timestamp).
 * @method static Carbon               subRealQuarters(int $value = 1)                                                      Sub quarters (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealQuarter()                                                                     Sub one quarter to the instance (using timestamp).
 * @method static CarbonPeriod        quartersUntil($endDate = null, int $factor = 1)                                      Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each quarter or every X quarters if a factor is given.
 * @method static Carbon               addRealYears(int $value = 1)                                                         Add years (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealYear()                                                                        Add one year to the instance (using timestamp).
 * @method static Carbon               subRealYears(int $value = 1)                                                         Sub years (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealYear()                                                                        Sub one year to the instance (using timestamp).
 * @method static CarbonPeriod        yearsUntil($endDate = null, int $factor = 1)                                         Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each year or every X years if a factor is given.
 * @method static Carbon               addRealDecades(int $value = 1)                                                       Add decades (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealDecade()                                                                      Add one decade to the instance (using timestamp).
 * @method static Carbon               subRealDecades(int $value = 1)                                                       Sub decades (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealDecade()                                                                      Sub one decade to the instance (using timestamp).
 * @method static CarbonPeriod        decadesUntil($endDate = null, int $factor = 1)                                       Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each decade or every X decades if a factor is given.
 * @method static Carbon               addRealCenturies(int $value = 1)                                                     Add centuries (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealCentury()                                                                     Add one century to the instance (using timestamp).
 * @method static Carbon               subRealCenturies(int $value = 1)                                                     Sub centuries (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealCentury()                                                                     Sub one century to the instance (using timestamp).
 * @method static CarbonPeriod        centuriesUntil($endDate = null, int $factor = 1)                                     Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each century or every X centuries if a factor is given.
 * @method static Carbon               addRealMillennia(int $value = 1)                                                     Add millennia (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               addRealMillennium()                                                                  Add one millennium to the instance (using timestamp).
 * @method static Carbon               subRealMillennia(int $value = 1)                                                     Sub millennia (the $value count passed in) to the instance (using timestamp).
 * @method static Carbon               subRealMillennium()                                                                  Sub one millennium to the instance (using timestamp).
 * @method static CarbonPeriod        millenniaUntil($endDate = null, int $factor = 1)                                     Return an iterable period from current date to given end (string, DateTime or Carbon instance) for each millennium or every X millennia if a factor is given.
 * @method static Carbon               roundYear(float $precision = 1, string $function = "round")                          Round the current instance year with given precision using the given function.
 * @method static Carbon               roundYears(float $precision = 1, string $function = "round")                         Round the current instance year with given precision using the given function.
 * @method static Carbon               floorYear(float $precision = 1)                                                      Truncate the current instance year with given precision.
 * @method static Carbon               floorYears(float $precision = 1)                                                     Truncate the current instance year with given precision.
 * @method static Carbon               ceilYear(float $precision = 1)                                                       Ceil the current instance year with given precision.
 * @method static Carbon               ceilYears(float $precision = 1)                                                      Ceil the current instance year with given precision.
 * @method static Carbon               roundMonth(float $precision = 1, string $function = "round")                         Round the current instance month with given precision using the given function.
 * @method static Carbon               roundMonths(float $precision = 1, string $function = "round")                        Round the current instance month with given precision using the given function.
 * @method static Carbon               floorMonth(float $precision = 1)                                                     Truncate the current instance month with given precision.
 * @method static Carbon               floorMonths(float $precision = 1)                                                    Truncate the current instance month with given precision.
 * @method static Carbon               ceilMonth(float $precision = 1)                                                      Ceil the current instance month with given precision.
 * @method static Carbon               ceilMonths(float $precision = 1)                                                     Ceil the current instance month with given precision.
 * @method static Carbon               roundDay(float $precision = 1, string $function = "round")                           Round the current instance day with given precision using the given function.
 * @method static Carbon               roundDays(float $precision = 1, string $function = "round")                          Round the current instance day with given precision using the given function.
 * @method static Carbon               floorDay(float $precision = 1)                                                       Truncate the current instance day with given precision.
 * @method static Carbon               floorDays(float $precision = 1)                                                      Truncate the current instance day with given precision.
 * @method static Carbon               ceilDay(float $precision = 1)                                                        Ceil the current instance day with given precision.
 * @method static Carbon               ceilDays(float $precision = 1)                                                       Ceil the current instance day with given precision.
 * @method static Carbon               roundHour(float $precision = 1, string $function = "round")                          Round the current instance hour with given precision using the given function.
 * @method static Carbon               roundHours(float $precision = 1, string $function = "round")                         Round the current instance hour with given precision using the given function.
 * @method static Carbon               floorHour(float $precision = 1)                                                      Truncate the current instance hour with given precision.
 * @method static Carbon               floorHours(float $precision = 1)                                                     Truncate the current instance hour with given precision.
 * @method static Carbon               ceilHour(float $precision = 1)                                                       Ceil the current instance hour with given precision.
 * @method static Carbon               ceilHours(float $precision = 1)                                                      Ceil the current instance hour with given precision.
 * @method static Carbon               roundMinute(float $precision = 1, string $function = "round")                        Round the current instance minute with given precision using the given function.
 * @method static Carbon               roundMinutes(float $precision = 1, string $function = "round")                       Round the current instance minute with given precision using the given function.
 * @method static Carbon               floorMinute(float $precision = 1)                                                    Truncate the current instance minute with given precision.
 * @method static Carbon               floorMinutes(float $precision = 1)                                                   Truncate the current instance minute with given precision.
 * @method static Carbon               ceilMinute(float $precision = 1)                                                     Ceil the current instance minute with given precision.
 * @method static Carbon               ceilMinutes(float $precision = 1)                                                    Ceil the current instance minute with given precision.
 * @method static Carbon               roundSecond(float $precision = 1, string $function = "round")                        Round the current instance second with given precision using the given function.
 * @method static Carbon               roundSeconds(float $precision = 1, string $function = "round")                       Round the current instance second with given precision using the given function.
 * @method static Carbon               floorSecond(float $precision = 1)                                                    Truncate the current instance second with given precision.
 * @method static Carbon               floorSeconds(float $precision = 1)                                                   Truncate the current instance second with given precision.
 * @method static Carbon               ceilSecond(float $precision = 1)                                                     Ceil the current instance second with given precision.
 * @method static Carbon               ceilSeconds(float $precision = 1)                                                    Ceil the current instance second with given precision.
 * @method static Carbon               roundMillennium(float $precision = 1, string $function = "round")                    Round the current instance millennium with given precision using the given function.
 * @method static Carbon               roundMillennia(float $precision = 1, string $function = "round")                     Round the current instance millennium with given precision using the given function.
 * @method static Carbon               floorMillennium(float $precision = 1)                                                Truncate the current instance millennium with given precision.
 * @method static Carbon               floorMillennia(float $precision = 1)                                                 Truncate the current instance millennium with given precision.
 * @method static Carbon               ceilMillennium(float $precision = 1)                                                 Ceil the current instance millennium with given precision.
 * @method static Carbon               ceilMillennia(float $precision = 1)                                                  Ceil the current instance millennium with given precision.
 * @method static Carbon               roundCentury(float $precision = 1, string $function = "round")                       Round the current instance century with given precision using the given function.
 * @method static Carbon               roundCenturies(float $precision = 1, string $function = "round")                     Round the current instance century with given precision using the given function.
 * @method static Carbon               floorCentury(float $precision = 1)                                                   Truncate the current instance century with given precision.
 * @method static Carbon               floorCenturies(float $precision = 1)                                                 Truncate the current instance century with given precision.
 * @method static Carbon               ceilCentury(float $precision = 1)                                                    Ceil the current instance century with given precision.
 * @method static Carbon               ceilCenturies(float $precision = 1)                                                  Ceil the current instance century with given precision.
 * @method static Carbon               roundDecade(float $precision = 1, string $function = "round")                        Round the current instance decade with given precision using the given function.
 * @method static Carbon               roundDecades(float $precision = 1, string $function = "round")                       Round the current instance decade with given precision using the given function.
 * @method static Carbon               floorDecade(float $precision = 1)                                                    Truncate the current instance decade with given precision.
 * @method static Carbon               floorDecades(float $precision = 1)                                                   Truncate the current instance decade with given precision.
 * @method static Carbon               ceilDecade(float $precision = 1)                                                     Ceil the current instance decade with given precision.
 * @method static Carbon               ceilDecades(float $precision = 1)                                                    Ceil the current instance decade with given precision.
 * @method static Carbon               roundQuarter(float $precision = 1, string $function = "round")                       Round the current instance quarter with given precision using the given function.
 * @method static Carbon               roundQuarters(float $precision = 1, string $function = "round")                      Round the current instance quarter with given precision using the given function.
 * @method static Carbon               floorQuarter(float $precision = 1)                                                   Truncate the current instance quarter with given precision.
 * @method static Carbon               floorQuarters(float $precision = 1)                                                  Truncate the current instance quarter with given precision.
 * @method static Carbon               ceilQuarter(float $precision = 1)                                                    Ceil the current instance quarter with given precision.
 * @method static Carbon               ceilQuarters(float $precision = 1)                                                   Ceil the current instance quarter with given precision.
 * @method static Carbon               roundMillisecond(float $precision = 1, string $function = "round")                   Round the current instance millisecond with given precision using the given function.
 * @method static Carbon               roundMilliseconds(float $precision = 1, string $function = "round")                  Round the current instance millisecond with given precision using the given function.
 * @method static Carbon               floorMillisecond(float $precision = 1)                                               Truncate the current instance millisecond with given precision.
 * @method static Carbon               floorMilliseconds(float $precision = 1)                                              Truncate the current instance millisecond with given precision.
 * @method static Carbon               ceilMillisecond(float $precision = 1)                                                Ceil the current instance millisecond with given precision.
 * @method static Carbon               ceilMilliseconds(float $precision = 1)                                               Ceil the current instance millisecond with given precision.
 * @method static Carbon               roundMicrosecond(float $precision = 1, string $function = "round")                   Round the current instance microsecond with given precision using the given function.
 * @method static Carbon               roundMicroseconds(float $precision = 1, string $function = "round")                  Round the current instance microsecond with given precision using the given function.
 * @method static Carbon               floorMicrosecond(float $precision = 1)                                               Truncate the current instance microsecond with given precision.
 * @method static Carbon               floorMicroseconds(float $precision = 1)                                              Truncate the current instance microsecond with given precision.
 * @method static Carbon               ceilMicrosecond(float $precision = 1)                                                Ceil the current instance microsecond with given precision.
 * @method static Carbon               ceilMicroseconds(float $precision = 1)                                               Ceil the current instance microsecond with given precision.
 * @method static string              shortAbsoluteDiffForHumans(DateTimeInterface $other = null, int $parts = 1)          Get the difference (short format, 'Absolute' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              longAbsoluteDiffForHumans(DateTimeInterface $other = null, int $parts = 1)           Get the difference (long format, 'Absolute' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              shortRelativeDiffForHumans(DateTimeInterface $other = null, int $parts = 1)          Get the difference (short format, 'Relative' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              longRelativeDiffForHumans(DateTimeInterface $other = null, int $parts = 1)           Get the difference (long format, 'Relative' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              shortRelativeToNowDiffForHumans(DateTimeInterface $other = null, int $parts = 1)     Get the difference (short format, 'RelativeToNow' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              longRelativeToNowDiffForHumans(DateTimeInterface $other = null, int $parts = 1)      Get the difference (long format, 'RelativeToNow' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              shortRelativeToOtherDiffForHumans(DateTimeInterface $other = null, int $parts = 1)   Get the difference (short format, 'RelativeToOther' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static string              longRelativeToOtherDiffForHumans(DateTimeInterface $other = null, int $parts = 1)    Get the difference (long format, 'RelativeToOther' mode) in a human readable format in the current locale. ($other and $parts parameters can be swapped.)
 * @method static void|Carbon|false createFromFormat(string $format, string $time, string|DateTimeZone $timezone = null) Parse a string into a new Carbon object according to the specified format.
 * @method static void|Carbon       __set_state(array $array)                                                            https://php.net/manual/en/datetime.set-state.php
 *
 */
class Date extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'date';
    }
}
