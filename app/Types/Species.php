<?php

namespace App\Types;

enum Species: int
{
    case Dog = 1;
    case Cat = 2;
    case Parrot = 3;
    case Bunny = 4;
}