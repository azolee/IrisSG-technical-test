<?php

namespace IrisSG\Test;

class ExcelConverter
{

    /**
     * Convert Excel column title to column number
     *
     * @param string $columnTitle
     * @return int
     */
    public function titleToNumber(string $columnTitle): int
    {
        // we only work with uppercase letters
        $columnTitle = strtoupper($columnTitle);

        $columnNumber = 0;
        $length = strlen($columnTitle);
        // let's transform the base 26 to base 10 - first, let's walk through each chars in the string
        for ($i = 0; $i < $length; $i++) {
            // Shift the digits to the left
            $columnNumber = $columnNumber * 26
                // Calculate the curent letter's position
                + ( ord($columnTitle[$i]) - ord("A") + 1 );
        }

        return $columnNumber;
    }

    /**
     * Convert Excel column number to column title
     *
     * @param int|string $columnNumber
     * @return string
     */
    public function numberToTitle(int|string $columnNumber): string
    {
        if ($columnNumber < 1) {
            return "-";
        }
        $columnTitle = "";

        while ($columnNumber > 0) {
            // Calculate the position of the current letter in the column title.
            $remainder = ($columnNumber - 1) % 26;
            // Convert the position to its corresponding letter and concatenate with the previous letter
            $columnTitle = chr(ord('A') + $remainder) . $columnTitle;
            // Move to the next digit
            $columnNumber = intval(($columnNumber - 1) / 26);
        }

        return $columnTitle;
    }
}