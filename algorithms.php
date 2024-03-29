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
    function match_score(int $bo): array {
        $returnArr = [];
        $maxScore = floor(($bo + 1) / 2);
        for ($i = 0; $i < $maxScore; $i++) {
            $returnArr[] = $maxScore . ':' . $i;
            $returnArr[] = $i . ':' . $maxScore;
        }
        return $returnArr;
    }
}

if (!function_exists('shop_sku')) {
    /**
     * @param array $attr
     * @param array $data
     * @return array
     * generate shop sku algorithm
     * $attr = [{name: '颜色', item: ['黑', '金', '白']}, {name: '内存', item: ['16G', '32G']}, {name: '运营商', item: ['电信', '移动', '联通']}]
     * $data = {
     *               '黑;16G;电信': {price: 100, count: 10},
     *               '黑;16G;移动': {price: 101, count: 11},
     *               '黑;16G;联通': {price: 102, count: 0},
     *               '黑;32G;电信': {price: 103, count: 13},
     *               '黑;32G;移动': {price: 104, count: 14},
     *               '黑;32G;联通': {price: 105, count: 0},
     *               '金;16G;电信': {price: 106, count: 16},
     *               '金;16G;移动': {price: 107, count: 17},
     *               '金;16G;联通': {price: 108, count: 18},
     *               '金;32G;电信': {price: 109, count: 0},
     *               '金;32G;移动': {price: 110, count: 20},
     *               '金;32G;联通': {price: 111, count: 21},
     *               '白;16G;电信': {price: 112, count: 0},
     *               '白;16G;移动': {price: 113, count: 23},
     *               '白;16G;联通': {price: 114, count: 24},
     *               '白;32G;电信': {price: 115, count: 0},
     *               '白;32G;移动': {price: 116, count: 26},
     *               '白;32G;联通': {price: 117, count: 27}
 *            };
     */
    function shop_sku(array $attr, array $data): array {
        return 0;
    }
}