<?php
$entries = array(1782
, 1344
, 1974
, 1874
, 1800
, 1973
, 1416
, 1952
, 1982
, 1506
, 1642
, 1514
, 1978
, 1895
, 1747
, 1564
, 1398
, 1683
, 1886
, 1492
, 1629
, 1433
, 295
, 1793
, 1740
, 1852
, 1697
, 1471
, 1361
, 1751
, 1426
, 2004
, 1763
, 1663
, 1742
, 1666
, 1733
, 1880
, 1600
, 1723
, 1478
, 1912
, 1820
, 1615
, 1875
, 1547
, 1554
, 752
, 1905
, 1368
, 954
, 1425
, 1391
, 691
, 1835
, 744
, 1850
, 1713
, 1995
, 1926
, 1817
, 1774
, 1986
, 2010
, 1427
, 1609
, 1927
, 1362
, 1420
, 1722
, 1590
, 1925
, 1617
, 1434
, 1826
, 1636
, 1687
, 1946
, 704
, 1797
, 1517
, 1801
, 1865
, 1963
, 1828
, 1829
, 1955
, 1832
, 1987
, 1585
, 1646
, 1575
, 1351
, 1345
, 1729
, 1933
, 1918
, 1902
, 1490
, 1627
, 1370
, 1650
, 1340
, 1539
, 1588
, 1715
, 1573
, 1384
, 1403
, 1673
, 1750
, 1578
, 1831
, 1849
, 1719
, 1359
, 2008
, 1837
, 1958
, 480
, 1388
, 1770
, 1999
, 1066
, 1730
, 1541
, 1802
, 1962
, 1891
, 1816
, 1505
, 1665
, 1551
, 1954
, 1378
, 1998
, 1612
, 1544
, 1953
, 1502
, 1888
, 1655
, 1614
, 1903
, 1675
, 1498
, 1653
, 1769
, 1863
, 1607
, 1945
, 1651
, 1558
, 1777
, 1460
, 1711
, 1677
, 1988
, 1441
, 1821
, 1867
, 1656
, 1731
, 1885
, 1482
, 1439
, 1990
, 1809
, 1794
, 1951
, 1858
, 1969
, 509
, 1486
, 1971
, 1557
, 1896
, 1884
, 1834
, 1814
, 1216
, 1997
, 1966
, 1808
, 1754
, 1804
, 1684
, 2001
, 1699
, 1781
, 1429
, 1322
, 1603
, 1596
, 1823
, 1700
, 1552
, 1352
, 1621
, 1669);
$i = 0;
$currentIndex = 0;
//find two entries that summed together equal 2020.
foreach ($entries as $entry) {
    foreach ($entries as $comparingEntry) {
        $sum = $entries[$currentIndex] + $entries[$i];
        //echo($sum."\n");
        if ($sum == 2020 && $i != $currentIndex) {
            echo("entry " . $entries[$currentIndex] . " and entry " . $entries[$i] . " make 2020 together.\n");
            echo($entries[$currentIndex] * $entries[$i] . "\n");
        }
        //else {echo($entries[$currentIndex]." + ".$entries[$i]." = ".($entries[$i]+$entries[$currentIndex]). " don't equal 2020.\n" );}
        $i++;
    }
    $i = 0;
    $currentIndex++;
}
echo("-------------------------------------\n");
$a = 0;
$b = 0;
$c = 0;
//find three entries that summed together make 2020.
foreach ($entries as $entry) {
    foreach ($entries as $comparingEntry) {
        $firstSum = $entries[$a] + $entries[$b];

        if ($firstSum < 2020) {
            foreach ($entries as $lastComparedEntry) {
                if ($firstSum + $entries[$c] == 2020) {
                    echo("entry " . $entries[$a] . " and entry " . $entries[$b] . " and entry " . $entries[$c] . " make 2020 together.\n");
                    echo($entries[$a] * $entries[$b] * $entries[$c] . "\n");
                }
                //else {echo($entries[$currentIndex]." + ".$entries[$i]." = ".($entries[$i]+$entries[$currentIndex]). " don't equal 2020.\n" );}
                $c++;
            }
        }
        $b++;
        $c = 0;
    }
    $b = 0;
    $a++;
}