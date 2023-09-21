<?php

class avator
{

    public $name, $seperator, $background, $color, $length, $width, $height, $font_size, $rounded, $capitalize, $lowercase, $bold, $letters;

    public function __construct(
        string $background = '#00000',
        $color = '#fff',
        $length = 2,
        $width = "500",
        $height = "500",
        $font_size = "250",
        $rounded = "0",
        $capitalize = true,
        $lowercase = true,
        $bold = true,
        $letters = '',
        $seperator = ' ',
    ) {
        $this->background = $background;
        $this->color = $color;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->font_size = $font_size;
        $this->rounded = $rounded;
        $this->capitalize = $capitalize;
        $this->lowercase = $lowercase;
        $this->bold = $bold;
        $this->letters = $letters;
        $this->seperator = $seperator;

    }

    #[description("generate the avator")]
    #[param]
    public function avator(string $name)
    {
        $this->name = $name;
        return $this->generator($this->name);

        // return $this->seperator;
    }



    protected function generator($name)
    {


        $letters = '';


        $split_names = explode('' . $this->seperator . '', $name);
        if (count($split_names) > 1) {

            $letters .= grapheme_substr($split_names[0], 0, 1) . grapheme_substr($split_names[1], 0, 1);
        } else {
            $letters .= grapheme_substr($split_names[0], 0, 1);
        }

        if (!$this->background) {
            //If not set or defined, pick a random sexy color.
            $colors = $colors = ['#e53935', '#d81b60', '#8e24aa', '#5e35b1', '#3949ab', '#1e88e5', '#039be5', '#00acc1', '#00897b', '#43a047', '#7cb342', '#c0ca33', '#fdd835', '#ffb300', '#fb8c00', '#f4511e', '#6d4c41', '#757575', '#546e7a'];
            $random_color_key = hexdec(substr(md5($name), -8)) % count($colors);
            $this->background = $colors[$random_color_key];
        }
        if ($this->capitalize) {
            $letters = mb_strtoupper($letters);
        } else if ($this->lowercase) {
            $letters = mb_strtolower($letters);
        }
        $style = "";
        if ($this->bold) {
            $style = "font-weight:700;";
        }
        return '<svg style="' . $style . '" width="' . (string) $this->width . 'px" height="' . (string) $this->height . 'px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css">@font-face {font-family: "montserratbold";src: url("https://cdn.oxro.io/fonts/montserrat-bold-webfont.woff2") format("woff2"),url("https://cdn.oxro.io/fonts/montserrat-bold-webfont.woff") format("woff");font-weight: normal;font-style: normal;}</style></defs><rect x="0" y="0" width="500" height="500" rx="' . (string) $this->rounded . '" style="fill:' . $this->background . '"/><text x="50%" y="50%" dy=".1em" fill="' . $this->color . '" text-anchor="middle" dominant-baseline="middle" style="font-family: &quot;Montserrat&quot;, sans-serif; font-size: ' . (string) $this->font_size . 'px; line-height: 1">' . $letters . '</text></svg>';

    }

}
// 367549 