<?php

namespace learn\src\tools;

use learn\src\Exception\RunException;

class LinkedListSort
{
    /**
     * @public
     * @description Linked list sorting
     * @param array $list source
     * @param string $pre_key Sort field
     *
     * @return array
     * @throws RunException
     */
    public function sortListByPre(array $list, string $pre_key): array
    {
        if (empty($list)) {
            return $list;
        }

        $tempList = array_column($list, null, $pre_key);
        $result = [];
        $tempPreId = 0;
        while (!empty($tempList)) {

            if (empty($tempList[$tempPreId])) {
                throw new RunException('排序错误，出现断序.' . $tempPreId);
            }
            $tempItem = $tempList[$tempPreId];
            unset($tempItem[$pre_key]);
            $result[] = $tempItem;
            unset($tempList[$tempPreId]);
            $tempPreId = $tempItem['id'];
        }

        return $result;
    }

}
