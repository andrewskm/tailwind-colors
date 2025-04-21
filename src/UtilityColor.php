<?php

namespace Andrewskm\UtilityColors;

enum UtilityColor: string
{
    case slate = 'Slate';
    case gray = 'Gray';
    case zinc = 'Zinc';
    case neutral = 'Neutral';
    case stone = 'Stone';
    case red = 'Red';
    case orange = 'Orange';
    case amber = 'Amber';
    case yellow = 'Yellow';
    case lime = 'Lime';
    case green = 'Green';
    case emerald = 'Emerald';
    case teal = 'Teal';
    case cyan = 'Cyan';
    case sky = 'Sky';
    case blue = 'Blue';
    case indigo = 'Indigo';
    case violet = 'Violet';
    case purple = 'Purple';
    case fuchsia = 'Fuchsia';
    case pink = 'Pink';
    case rose = 'Rose';

    /**
     * Build a utility class.
     *
     * @param  string  $utility
     * @param  int     $shade
     *
     * @return string
     */
    public function build(string $utility, int $shade = 500): string
    {
        return sprintf('%s-%s-%d', $utility, $this->name, $shade);
    }
}
