# Avator Class

A PHP class & standalone get url for generating avatars using initials. This class allows you to create colorful and customizable avatars based on user initials.

## Installation

You can install this package via :

```bash
git clone https://github.com/codes-neo/profile-generator.git

```

open your project root file
```bash
php -S localhost:8000
```

open browser and visit

```
http://localhost:8000?name=Maxwell+Kemboi&background=fff&rounded=200
```
Output :

![Maxwell Kemboi Profile Image](https://raw.githubusercontent.com/codes-neo/profile-generator/c67141cd9c01aa5d0904363fae923fa2f667d768/samples/sample.svg)



## Class Usage

This class file is easy to use as it can be used in a typicall php project without hosting the profile avator generator seperately.

Usage:
```PHP
<?php

require('avator_class.php');

$avator = new avator(seperator: '+', background: '#ffff');

$avator1 = $avator->avator('maxwell+kemboi');

$avator2 = $avator->avator('Ian+Wangui');

echo $avator1;
```

Output:
```html
<svg style="font-weight:700;" width="500px" height="500px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs><style type="text/css">@font-face {font-family: "montserratbold";src: url("https://cdn.oxro.io/fonts/montserrat-bold-webfont.woff2") 
    format("woff2"),url("https://cdn.oxro.io/fonts/montserrat-bold-webfont.woff") format("woff");font-weight: normal;font-style: normal;}
    </style>
</defs>
<rect x="0" y="0" width="500" height="500" rx="400" style="fill:#000000"/><text x="50%" y="50%" dy=".1em" fill="#fff" text-anchor="middle" 
dominant-baseline="middle" style="font-family: &quot;Montserrat&quot;, sans-serif; font-size: 250px; line-height: 1">
MK</text>

</svg>

```


## Thats It!  Happy Coding 	&#128640;



-[ Code Neo](https://github.com/codes-neo)













