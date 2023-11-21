<?php

namespace App\Dictionaries\RegisterEvent;

abstract class RegisterEventInstituto
{
    const IS_TEC  = 1; // 1 = tecnologico
    const IS_UV    = 2; // 0 = UV
}

abstract class RegisterEventGrado
{
    const EN_FORMACION          = 1; // 1=En formacion
    const EN_CONSOLIDACION      = 2; // 2=En consolidación
    const CONSOLIDADO           = 3; // 3=Consolidado
}