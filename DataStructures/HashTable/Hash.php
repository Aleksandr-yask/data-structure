<?php


namespace DataStructures\HashTable;


class Hash
{
    const _LIMIT = 14;

    public function hash($value): int
    {
        $hash = 0;
        for ($i = 0; $i < strlen($value); $i++) {

            list(, $ord) = unpack('N', mb_convert_encoding($value[$i], 'UCS-4BE', 'UTF-8'));
            $hash += $ord;
        }

        return $hash % self::_LIMIT;
    }


}