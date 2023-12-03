<?php

const PASS = 'Pass';
const FAIL = 'Fail';

$basicTests = [
    [
        2,
        3,
        [2, 5],
        [1, 10],
        4
    ],
    [
        3,
        1,
        [4, 5, 7],
        [10, 4, 2],
        1
    ],
    [
        35,
        1,
        [1,2,3,4,5,6,7, 8,9,10,11,12, 13,14,15,16,17,18,19,20,21,22,23,24,25, 26,27,28,29,30,31,32,33,34,35],
        [1,2,3,4,5,6,7, 8,9,10,11,12, 13,14,15,16,17,18,19,20,21,22,23,24,25, 26,27,28,29,30,31,32,33,34,35],
        631
    ],
    [
        35,
        55,
        [38,62,147,130,44,23,54,51,92,40,73,62, 18,122,31,131,95,18,17,53,53,95,122,126,125,115,53, 73,9,1,94,26, 128,82,117],
        [5,8,1,15,14,11,13,6,4,7,7,11,8,6,9,13,4,15,1,12,4,4,14, 1,13,12,7,12, 1,2,11,15,9,6, 13],
        349
    ],
    [
        35,
        55,
        [38,62,147,130,44,23,54,51,92,40,73,62, 18,122,31,131,95,18,17,53,53,95,122,126,125,115,53, 73,9,1,94,26, 128,82,117],
        [111,20,4,55, 125,143,1,59, 146,101,124, 23,69,133,124,5,147,148,130,135,64,72, 144,13,132,149,95,84,104, 72,134,11,32, 74,91],
        3129
    ],
    [
        35,
        1,
        [1,2,3,4,5,6,7, 8,9,10,11,12, 13,14,15,16,17,18,19,20,21,22,23,24,25, 26,27,28,29,30,31,32,33,34,35],
        [1,2,1,2,1,2,1, 2,1,2,1,2,1,2, 1,2,1,2,1,2,1, 2,1,2,1,2,1,2, 1,2,1,2,1,2,1],
        53
    ],
    [
        80,
        100,
        [
            725,1342,453,1047,212,1363,1373,1085,739,1146,330,1171,1164,560,859,1220,1372,1008, 779,1191,819,406,1,284,
            492,424,926,1177,1134,507, 1455,1056,133,1001,1286, 1223,897,989,3,500,1132,1338,901,292, 828,565,1429,
            425,497,1177,9,225,451,129,241,1372, 808,889,404, 1274,1119,848,201,211,1349,362,995,224,360,338,983,538,
            1296, 306,523,575, 1496,106,594,1343
        ],
        [
            73,74,31,101,14,140,8,79, 72,148,18,142,110,64,8,132,18,128,39,46,95,92,18,31,38,144,57,118,141,99,109, 48,
            146,58,38, 99,83,46,145, 69,6,29,2,91, 20,55,30,14,82,118,67,76,140,38,58,102, 40,91,18,130, 74,86,51,59,
            138,86,74,17,111,1,60,132,75,16,107,31,94,118,80,30
        ],
        5866
    ],
    [
        80,
        10,
        [
            763,220,188, 587,723,673, 55,907,828,992,677,810,168,487,950,514,358,199,382,696,480,455,273,407,822,610,
            553,844,216,440,785,162,527,553,44,346,62, 375,43,920,794,8,654,664, 809,646,625,734,935,475, 115,921,416,
            759,466,716, 113,599,101, 821,873,520, 760,932,519, 558,477,672, 160,280,119, 97,779,674,403,561,781,701,282,943
        ],
        [
            9,7,4,10,2,3, 4,7,4,4,2,1,9, 4,8,3,6,8,9,9, 6,1,8,7,4,10,9,3,9,4,3,2,6,4, 9,3,1,4,4,3,9, 10,7,10,2,10, 10,5,7,6,
            2,4,9,7,10,2,5,6,7, 6,1,2,8,4,8,9, 4,8,1,3,5,5,9, 1,9,9,8,8,8,5
        ],
        20
    ],
    [
        3,
        3,
        [4, 5, 6],
        [4, 5, 6],
        3
    ],
    [
        2,
        10,
        [1, 2],
        [10, 10],
        30
    ],
    [
        500,
        100,
        [
            121,932,383, 763,306,222, 758,486,673, 500,489,60,97,447,578,763,29,422,853, 51,362,514,706,932,531,924,973,451,
            558,921,488,279,790,921,382,996,24,17, 27,38,285,50, 443,39,91,622,436,445,1000,518,667,415,392,655,729,790,262,
            676,171,639,325,305,903,483,867,311,131,726,178,296,917,788,179,572,608,374,6,153,167,729,822,154, 311,685,991,
            466,160,995, 25,153,394,75,937,78,237, 14,380,839,511,698,754,18,741,899,14, 267,529,185, 44,675,505,454,931,286,
            311,849,999,430,677,835,401,713,673,816,259,273,213,549,345,729,72,488,31, 578,3,740,112,451,427,145,947,391,359,
            404,157,474,289,78,1,610,626,609,831,329,721,237,889,479,204,43,120,912, 451,255,352, 529,376,247, 688,16,972,57,
            545,407,50, 809,954,168, 197,219,939, 434,457,915, 140,920,950, 31,281,332,322,679,982,93,563,336,863,443,100,93,
            253,44,567,477,203,685,33,973,240,367,44,317,777, 925,444,224, 927,572,94,17,49,97,495,768,339,178,458,142,554,7,
            303,767,779, 602,213,786, 488,395,997, 359,273,912, 333,767,856, 166,117,665, 161,988,506, 38,368,761,599,118,738,
            993,383,608,639,202,435,650,209,352,633,109,684,857,413,155,441,801,788,353,589,623,122,552,607,1, 94,277,952,963,
            736,349,281,717,667,682,956,792,744,923,843,990,576,549,231,821,332,439,550,498,952,492,455,378,103,399,66,246,168,
            671,850,164,644,444,800,501,755,779,532,619,774,812,610,472,970,745,919,884,622,803,644,872,923,939,727,613,464,957,
            687,889,411,777,389,692,37,259, 558,201,493, 420,18,240,71,385,768,851,827,549,257,42,835,209, 822,369,715, 274,718,
            745, 361,795,170, 136,603,35,692,804,481,760,884,681,806,728,887,708,340,576,37,8,244,737,151,102,487,420,583,557,241,
            10,819,794,920,620,484,145,100,896,142,342,842,231,851,469,998,264,826,627,453,886,949,677,53, 881,482,113, 257,791,
            478, 679,651,285, 293,214,12,482,601,320,946,339,178,942,589,438,909,88,603,768,379,768,235,101,934,88, 749,27,987,461,
            70,178,589,226,757,915,948,508,366,227,382,548,914,662,396,847,754,778,260,759,116,352,898,382,982,281,849,167,46,136,
            334,766,527, 35,778,895,657,641
        ],
        [
            62,58,33,1,99,93,90,20,89,95,11,61,41, 13,17,100,45, 60,33,84,87,80,37,44,15,61,92,36,52,79, 36,62,78,5,90,85,96,13,19,
            30,42,94,28,75,36,40,76,76,90,77,35,8,89,49,43,19,13,17,11,58,85, 10,76,93,9,51,75,77,93,87, 30,50,87,16,43,74,23,59,14,
            63,60,91,42, 77,24,62,18,30,67,72,73,16,2,84,65,13,36,68,46,15,12,30,32,63,39, 97,24,40,56,62,57,96,34,88,37,17,16,66,
            31,1,82,58,33,22,34,9,79,21,59,70,16,55,51,20,31,61, 7,94,62,69,18,64,54,11,86, 1,31,70,31,59,81,86,29,51, 80,72,98,70,21,
            76,70,5,5,1, 13,1,59,32,65,93,17,63,55, 15,20,24,20,21,7,21,30,48, 89,49,97,34,35,96,87,59,68,37,63,97,50, 43,68,58,56,37,
            73,89,16,9, 1,97,88,13,83,77,68,33,99, 82,21,38,21,62,68,52,55,58,1,1,46,68,65, 89,45,51,49,50,33,63,44,23,29,28,19,82, 42,
            81,71,35,17,39,66,32,42,26,9,76,3,56, 7,80,20,40,54,56,50,38,72, 36,44,15,43,94,45,87,48,76,82,75,2,29,44,98,19,85,69,23,
            96,15,62, 80,24,57,67,1,99,57,31,89, 43,77,33,71,88,97,54,85,85,68,96,11,57, 86,64,79,2,7, 99,1,50,84,29,78,18,16,28, 70,
            52,14,74,92,73,62,11,67,54,60,37,61, 51,81,3,73,73,43,57,91,42, 29,67,41,59,23,25,72,79,51,68,99,47,84, 15,52,33,97,79,16,
            37,84,43,18,79,59,83, 75,59,100,32, 85,82,52,17,83,91,48,91,24,38,58,18,26, 54,60,52,22,52,88,90,41,50,48,24,51,94, 44,14,17,
            68,34,23,36,10,58,17,43,48,60, 73,12,89,37,80,9,46,67,2,84,37,63,72,23,71,94,54,4,87,44,57,98,9, 37,57,54,91,98,100,23,21,49,
            38,5,71,91, 78,98,94,39,24,70,18,75,57,85,13,7,94,3, 39,22,86,47,86,20,45,74,29,43,30,3,27,71,91,12,8,91, 35,57,4,1,63, 65,
            37,43,45,39,57,46,41,33,61,71,27,68, 75,100
        ],
        25632
    ],
    [
        500,
        150,
        [
            1303,1543,1225,1279,13, 418,1940,1145,482,284,1074,1424,203, 1777,1196,1398,1675,1712,305,1263,789,373,1594,160,547,796,255,
            1736,1562,447,842,1579,1561,331,1816,325,2,1103,1694,392, 399,296,1510,350,910,130, 525,998,1939,615,1,581,965,1460,1652, 1061,
            1558,210,19,1935,1109,1091,1825,1898,213,178,1746,1134,59,1672,695, 1023,1431,1295,1319,472, 958,1401,1237,45,1513,226,1598,1151,
            1812,1637,1359,1550,1887,1274,1927,965,271,758,1873,1067,759,1866,296,1840,150,231,665,833,1682, 677,779,1537,1922,1612,476,996,
            953,1835,1880,1842,1579,185,832,250,262,891,1177,1917,1249,1962,594,44,1236,298,928,1261, 1332,572,352,477,1108,684,1275,645,885,
            1851,1731,1874,724,913,783,1096,1898,1424,1527,1249,1284, 1764,397,704,759,1171,301,1007,1068, 417,1814,1649,636,507,1913,1137,186,
            1434,1175,524,1655,319,1589,43,1657, 1106,1628,1390,1239,1739,483,1865,1128,541,426,1740,1867,1575,28,1907,390,256,1881,1037,534,870,
            291,501,694, 1578,1269,1592,382,656,1317,1018,1942,56,600,348, 1666,706,1013,1018,762,797,686,1264, 616,1949,1431,406,1556,584,1112,
            1080,1728,645,1100,1535,1792,1951,729,7,1367,412,1169,1631,1955,164,1173,1404,1819,165,1024,71,1023,30,1183,670,1829,1275,498,227,1669,
            673,1987,1610, 381,1664,1160,810,26,1644,266,1090,632,1073,1242,732,229,1350,557,303,1293,1697,657,1195,1537,824,1631,871,90,1962,288,
            483,1231,501,191,661,484,1987,422,1539,1296,1851,392,1533,1125,445,141,1691,148,728,1973,1831,1867,513,541,1783,463,981,1136,567,993,
            558,1938,115,509,1656,474,416,1435,1424,1944,460,1440,1251,1940,1792,975,14,1923,190, 468,782,1406,41,1507,1030,1987,78,1147,225,183,
            1157,1706,1466,428,1509,1972,822,380,1885,1435,1634,1013,522,1570,403,1900,427,22,1583,1000,658,1504,720,1711,99,842,845,279,1366,1790,
            1423,989,553,645,985,1622,328,605,930,1577,1753,1149,1531,1842,1579,1042,264,1664,558,288,717,542,151,1427,49,176,953,537,964,368,1512,
            1454,628,1710,1353,1403,38,307,1435,427,466,1736,1536,1490,1909,636,888,1331,1220,1334,1952,1813,1398,1006,1319,1359,181,1445,315,1213,
            125,385,1299,209, 384,473,1759,1992,1133,1590,1851,1304,706,1270,1976,1951,670,309,1068,1779,1861,793,682,434,794, 813,1987,1271,118,
            1580,1499,997,1574,1216,1849,1947,952,546,1068,377,467,1391,1763,227,1504,1841,1367,1371,1297,498,1397,246,450,924,345,1637,1180,735,
            771,1107,1374,181,562
        ],
        [
            155,29,101,114,79,126,148,128,83,105,172,160,93,45,113,17,73,128,60,72,92,110,131,34,57,116,163,11,139,78,195,151,11,67,29,135,68,162,
            45,123,29,172,172,87,159,10,129,45,129,65, 55,122,89,143,67,136,127, 115,145,114,140,10,6,146, 26,160,178,182,86,166,21, 158,25,129,97,
            47,184,103, 103,142,54,177,42,136,31, 157,169,20,1,65,140,43,170,12,114,85,23,32,139,198, 173,184,4,95,147,109,197, 195,145,14,194,117,36,
            70, 102,156,62,43,119,144,198,134,100,3,104,29,183,54, 170,83,168,162,199,173,63,25,110,8,134,160,16,48,186,48,90,122,185,164,54,128,146,
            167, 180,105,118,52,129,53,6,20,153,21,167,90,106,162,186,77,163,130, 25,100,189,49,177,167,104,154,109,180,13,153,8,195,108,189,150,180,175,
            52, 104,9,114,184,37,174,36,8,80,162,8,187,21,6,30,23,69,6,111,6,167,195,193,5,90,86,116,118,163,142,190,146,193,123,154,66,29,175,169,36,61,
            105,117,114,111,99,109,109, 154,106,128,155,178,27,104,187,195,85,22,19,65,103,187,112,167,8,118,136,38,33,138,70,174,163,45,122,157,197,
            161,21,146,21,28,58,2,90,67,49,45,179,38, 165,6,70,143,187,72,68,33, 66,104,20,165,37,14,86,104,184,31,20,42,139,72,51,28,125,119,147,82,17,
            15,100,27,138,46,55,132,155,148,136,79,17,149,179,194,56,175,14,114,30,35,137,190,115,44,155,176,82,162,113,45,57,11,33,25,27,53,50,75,87,77,
            164,78,86,78,13, 200,62,24,172,124,173,170,139,129,113,20,108,165, 54,46,157,104,5,196,45,48,24,147,10,28,150,18,22,103,31,108,43,132,134,28,
            102,9,101,131,90,18,199,33,159,124,147,135,93,77,121,57,178,126,192,102,178,13,175,5,128,164,60,157,11,62,158,118,121,196,46,14,61,5,39,58,75,
            143,83,167,98,72,26,197,115,49,156,41,40,195,143,55,165,185,198,191,96,59,65,129,148,180,18,113,105, 160,71,148,69,186,52,169, 10,180,107,98,
            95,198,39,160,20,166,137,122,86,175, 192,95,11,150,152,191,196,141,80,156,32,163,14,93, 5,10,32,93,86
        ],
        50830
    ]
];

function prepareBasicTestToObjects($basicTestCases) {
    return array_map(function ($basicTest) {
        return [
            'checkPointsNum' => $basicTest[0],
            'coinsInitNum' => $basicTest[1],
            'checkPointsCoords' => $basicTest[2],
            'coinsAtCheckPointNum' => $basicTest[3],
            'expected' => $basicTest[4]
        ];
    }, $basicTestCases);
}

function maximumCoordinate($checkPointsNum, $coinsInitNum, $checkPointsCoords, $coinsAtCheckPointNum)
{
    $coinsInitial = $coinsInitNum;
    $maxCoordinate = 0;

    if ($coinsInitial === 0) {
        return 0;
    }

    $coinsByCheckpoints = [];
    for ($i = 0; $i < $checkPointsNum; $i++) {
        $coinsByCheckpoints[$checkPointsCoords[$i]] = $coinsAtCheckPointNum[$i];
    }

    while ($coinsInitial != 0) {
        $coinsInitial--;
        $maxCoordinate++;

        if (in_array($maxCoordinate, $checkPointsCoords, false)) {
            $coinsInitial =+ $coinsInitial + $coinsByCheckpoints[(string) $maxCoordinate];
        }
    }

    return $maxCoordinate;
}

array_map(function ($testCase) use ($basicTests) {
    $maxCoord = maximumCoordinate(
        $testCase[0],
        $testCase[1],
        $testCase[2],
        $testCase[3]
    );

    $result = $maxCoord === $testCase[4] ? PASS : FAIL;

    echo "{$result} with EXPECTED: {$testCase[4]} AND RECEIVED: {$maxCoord}\n\n";
}, $basicTests);

?>