<?php

namespace Shimoning\DayNumber2Label;

/**
 * 曜日の数字を文字に変換する
 *
 * @author Shimon Haga <shimon.haga@shimoning.com>
 */
class N2L
{
    /**
     * 英語でのフル名のリスト
     *
     * @var array
     */
    const ENGLISH_LONG = [
        'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
    ];

    /**
     * 英語での省略名のリスト
     *
     * @var array
     */
    const ENGLISH_MIDDLE = [
        'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat',
    ];

    /**
     * 英語での短名のリスト
     *
     * @var array
     */
    const ENGLISH_SHORT = [
        'Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa',
    ];

    /**
     * 漢字のフル名のリスト
     *
     * @var array
     */
    const KANJI_LONG = [
        '日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日',
    ];

    /**
     * 漢字の省略名のリスト
     *
     * @var array
     */
    const KANJI_MIDDLE = [
        '日曜', '月曜', '火曜', '水曜', '木曜', '金曜', '土曜',
    ];

    /**
     * 漢字の短名のリスト
     *
     * @var array
     */
    const KANJI_SHORT = [
        '日', '月', '火', '水', '木', '金', '土',
    ];

    const LANGUAGE_TYPE_ENGLISH = 0;
    const LANGUAGE_TYPE_KANJI = 1;

    const LANGUAGE_TYPES = [
        self::LANGUAGE_TYPE_ENGLISH => 'ENGLISH',
        self::LANGUAGE_TYPE_KANJI => 'KANJI',
    ];

    const LENGTH_TYPE_LONG = 0;
    const LENGTH_TYPE_MIDDLE = 1;
    const LENGTH_TYPE_SHORT = 1;
    const LENGTH_TYPES = [
        self::LENGTH_TYPE_LONG => 'LONG',
        self::LENGTH_TYPE_MIDDLE => 'MIDDLE',
        self::LENGTH_TYPE_SHORT => 'SHORT',
    ];

    /**
     * 変換する
     *
     * @param int $day
     * @return string
     */
    public static function convert(
        int $day,
        $languageType = self::LANGUAGE_TYPE_ENGLISH,
        $lengthType = self::LENGTH_TYPE_LONG
    ): string {
        if (!isset(self::LANGUAGE_TYPES[$languageType]) || !isset(self::LENGTH_TYPES[$lengthType])) {
            return '';
        }
        $listName = self::LANGUAGE_TYPES[$languageType] + '_' + self::LENGTH_TYPES[$lengthType];
        $list = self::$listName;
        return $list[$day] ?? '';
    }
}
