<?php
declare(strict_types=1);

namespace App\Enum;

enum StatutDemande: string
{
    case DISPONIBLE = 'disponible';
    case EN_COURS = 'en_cours';
    case RESERVE = 'reserve';
}
