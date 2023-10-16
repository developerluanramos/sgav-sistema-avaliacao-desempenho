<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ATIVO()
 * @method static static INATIVO()
 */
final class SituacaoCargoEnum extends Enum
{
    const ATIVO = true;
    const INATIVO = false;
}
