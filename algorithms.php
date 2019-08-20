<?php

if (!function_exists('alpha_sort')) {
    /**
     * @param array $data
     * @return array
     * generate alpha sort
     * example $data = ['a', 'b', 'c', 'd']
     */
    function alpha_sort(array $data): array {
        $arrayCount = count($data);
        $maxCombs = $arrayCount ** $arrayCount;
        $returnArr = [];
        $colverArr = [];
        if ($arrayCount >= 2 && $arrayCount <= 36) {
            foreach ($data as $key => $value) {
                $colverArr[base_convert($key, 10, $arrayCount)] = $value;
            }

            for ($i = 0; $i < $maxCombs; $i++) {
                $comb = base_convert($i, 10, $arrayCount);
                $comb = str_pad($comb, $arrayCount, '0', STR_PAD_LEFT);
                $returnArr[] = strtr($comb, $colverArr);
            }
        }
        return $returnArr;
    }
}

if (!function_exists('match_score')) {
    /**
     * @param $bo
     * @return array
     * generate match scores
     * example $bo = 3
     */
    function match_score($bo) {
        $returnArr = [];
        $maxScore = floor(($bo + 1) / 2);
        for ($i = 0; $i < $maxScore; $i++) {
            $returnArr[] = $maxScore . ':' . $i;
            $returnArr[] = $i . ':' . $maxScore;
        }
        return $returnArr;
    }
}