<?php
namespace GCWorld\Enums\Traits;

/**
 * EnumToArrayTrait trait.
 */
trait EnumToArrayTrait
{
    /**
     * @return array
     */
    public static function textArray(): array
    {
        $tmp = [];
        foreach (self::cases() as $k => $v) {
            $tmp[$k] = $v->text();
        }

        return $tmp;
    }

    /**
     * @return array
     */
    public static function nameArray(): array
    {
        return \array_column(self::cases(), 'name');
    }

    /**
     * @return array
     */
    public static function valuesArray(): array
    {
        return \array_column(self::cases(), 'value');
    }

    /**
     * @return array
     */
    public static function array(): array
    {
        return \array_combine(self::valuesArray(), self::textArray());
    }
}
