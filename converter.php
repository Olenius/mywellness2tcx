<?php


const DT_FORMAT = 'Y-m-d\TH:i:s\Z';

const TDC_NS = 'http://www.garmin.com/xmlschemas/TrainingCenterDatabase/v2';
const TPX_NS = 'http://www.garmin.com/xmlschemas/ActivityExtension/v2';

$testJson = '{"data":{"analitics":{"descriptor":[{"i":0,"pr":{"name":"Power","um":"Watt"}},{"i":1,"pr":{"name":"Rpm","um":"Rpm"}},{"i":2,"pr":{"name":"Speed","um":"Km_h"}},{"i":3,"pr":{"name":"HDistance","um":"Meter"}},{"i":4,"pr":{"name":"Level","um":"Number"}}],"samples":[{"vs":[110.0,77.0,23.0,1800.0,6.0],"t":3},{"vs":[115.0,79.0,24.0,1800.0,6.0],"t":8},{"vs":[106.0,76.0,23.0,1900.0,6.0],"t":13},{"vs":[106.0,77.0,23.0,1900.0,6.0],"t":18},{"vs":[113.0,78.0,24.0,1900.0,6.0],"t":23},{"vs":[114.0,78.0,24.0,2000.0,6.0],"t":28},{"vs":[115.0,78.0,24.0,2000.0,6.0],"t":33},{"vs":[115.0,79.0,24.0,2000.0,6.0],"t":38},{"vs":[116.0,79.0,24.0,2100.0,6.0],"t":43},{"vs":[111.0,78.0,23.0,2100.0,6.0],"t":48},{"vs":[111.0,79.0,23.0,2100.0,6.0],"t":53},{"vs":[111.0,77.0,23.0,2200.0,6.0],"t":58},{"vs":[117.0,80.0,24.0,2200.0,6.0],"t":63},{"vs":[110.0,78.0,23.0,2200.0,6.0],"t":68},{"vs":[120.0,80.0,24.0,2300.0,6.0],"t":73},{"vs":[118.0,81.0,24.0,2300.0,6.0],"t":78},{"vs":[129.0,84.0,25.0,2300.0,6.0],"t":83},{"vs":[116.0,79.0,24.0,2400.0,6.0],"t":88},{"vs":[117.0,81.0,24.0,2400.0,6.0],"t":93},{"vs":[126.0,84.0,25.0,2400.0,6.0],"t":98},{"vs":[128.0,84.0,25.0,2500.0,6.0],"t":103},{"vs":[130.0,85.0,25.0,2500.0,6.0],"t":108},{"vs":[126.0,82.0,25.0,2600.0,6.0],"t":118},{"vs":[129.0,83.0,25.0,2600.0,6.0],"t":123},{"vs":[122.0,81.0,24.0,2600.0,6.0],"t":128},{"vs":[126.0,80.0,25.0,2700.0,6.0],"t":133},{"vs":[126.0,83.0,25.0,2700.0,6.0],"t":138},{"vs":[125.0,82.0,25.0,2700.0,6.0],"t":143},{"vs":[130.0,84.0,25.0,2800.0,6.0],"t":148},{"vs":[135.0,86.0,26.0,2800.0,6.0],"t":153},{"vs":[111.0,76.0,23.0,2800.0,6.0],"t":158},{"vs":[115.0,79.0,24.0,2900.0,6.0],"t":163},{"vs":[119.0,81.0,24.0,2900.0,6.0],"t":168},{"vs":[119.0,78.0,24.0,2900.0,6.0],"t":173},{"vs":[128.0,84.0,25.0,3000.0,6.0],"t":178},{"vs":[129.0,84.0,25.0,3000.0,6.0],"t":183},{"vs":[117.0,79.0,24.0,3100.0,6.0],"t":188},{"vs":[123.0,81.0,25.0,3100.0,6.0],"t":193},{"vs":[118.0,80.0,24.0,3100.0,6.0],"t":198},{"vs":[123.0,81.0,25.0,3200.0,6.0],"t":203},{"vs":[119.0,79.0,24.0,3200.0,6.0],"t":208},{"vs":[111.0,78.0,23.0,3200.0,6.0],"t":213},{"vs":[114.0,77.0,24.0,3300.0,6.0],"t":218},{"vs":[121.0,80.0,24.0,3300.0,6.0],"t":223},{"vs":[120.0,80.0,24.0,3300.0,6.0],"t":228},{"vs":[122.0,81.0,24.0,3400.0,6.0],"t":233},{"vs":[134.0,86.0,26.0,3400.0,6.0],"t":238},{"vs":[126.0,83.0,25.0,3400.0,6.0],"t":243},{"vs":[128.0,83.0,25.0,3500.0,6.0],"t":248},{"vs":[142.0,88.0,26.0,3500.0,6.0],"t":253},{"vs":[132.0,84.0,25.0,3500.0,6.0],"t":258},{"vs":[129.0,84.0,25.0,3600.0,6.0],"t":263},{"vs":[123.0,80.0,25.0,3600.0,6.0],"t":268},{"vs":[122.0,82.0,24.0,3600.0,6.0],"t":273},{"vs":[120.0,81.0,24.0,3700.0,6.0],"t":278},{"vs":[121.0,81.0,24.0,3700.0,6.0],"t":283},{"vs":[128.0,84.0,25.0,3700.0,6.0],"t":288},{"vs":[135.0,86.0,26.0,3800.0,6.0],"t":293},{"vs":[176.0,97.0,29.0,3800.0,6.0],"t":298},{"vs":[154.0,92.0,27.0,3900.0,6.0],"t":303},{"vs":[169.0,96.0,28.0,3900.0,6.0],"t":308},{"vs":[167.0,95.0,28.0,3900.0,6.0],"t":313},{"vs":[175.0,98.0,29.0,4000.0,6.0],"t":318},{"vs":[153.0,92.0,27.0,4000.0,6.0],"t":323},{"vs":[165.0,94.0,28.0,4100.0,6.0],"t":328},{"vs":[166.0,95.0,28.0,4100.0,6.0],"t":333},{"vs":[151.0,89.0,27.0,4100.0,6.0],"t":338},{"vs":[148.0,92.0,27.0,4200.0,6.0],"t":343},{"vs":[140.0,91.0,26.0,4200.0,6.0],"t":348},{"vs":[149.0,92.0,27.0,4200.0,6.0],"t":353},{"vs":[185.0,104.0,30.0,4300.0,6.0],"t":358},{"vs":[188.0,104.0,30.0,4300.0,6.0],"t":363},{"vs":[195.0,109.0,30.0,4400.0,6.0],"t":368},{"vs":[199.0,111.0,31.0,4400.0,6.0],"t":373},{"vs":[190.0,106.0,30.0,4500.0,6.0],"t":378},{"vs":[190.0,101.0,30.0,4500.0,6.0],"t":383},{"vs":[175.0,74.0,29.0,4500.0,8.0],"t":388},{"vs":[159.0,67.0,28.0,4600.0,9.0],"t":393},{"vs":[151.0,64.0,27.0,4600.0,9.0],"t":398},{"vs":[140.0,62.0,26.0,4700.0,9.0],"t":403},{"vs":[141.0,63.0,26.0,4700.0,9.0],"t":408},{"vs":[148.0,64.0,27.0,4700.0,9.0],"t":413},{"vs":[135.0,61.0,26.0,4800.0,9.0],"t":418},{"vs":[140.0,61.0,26.0,4800.0,9.0],"t":423},{"vs":[144.0,63.0,26.0,4800.0,9.0],"t":428},{"vs":[138.0,61.0,26.0,4900.0,9.0],"t":433},{"vs":[131.0,59.0,25.0,4900.0,9.0],"t":438},{"vs":[125.0,56.0,25.0,5000.0,9.0],"t":443},{"vs":[120.0,56.0,24.0,5000.0,10.0],"t":448},{"vs":[132.0,56.0,25.0,5000.0,10.0],"t":453},{"vs":[144.0,61.0,26.0,5100.0,10.0],"t":458},{"vs":[165.0,63.0,28.0,5100.0,10.0],"t":463},{"vs":[164.0,61.0,28.0,5100.0,10.0],"t":468},{"vs":[159.0,64.0,28.0,5200.0,10.0],"t":473},{"vs":[176.0,88.0,29.0,5200.0,7.0],"t":478},{"vs":[205.0,95.0,31.0,5300.0,7.0],"t":483},{"vs":[205.0,93.0,31.0,5300.0,7.0],"t":488},{"vs":[216.0,98.0,32.0,5300.0,7.0],"t":493},{"vs":[207.0,97.0,31.0,5400.0,7.0],"t":498},{"vs":[217.0,98.0,32.0,5400.0,7.0],"t":503},{"vs":[223.0,99.0,32.0,5500.0,7.0],"t":508},{"vs":[213.0,97.0,31.0,5500.0,7.0],"t":513},{"vs":[203.0,95.0,31.0,5600.0,7.0],"t":518},{"vs":[210.0,96.0,31.0,5600.0,7.0],"t":523},{"vs":[195.0,92.0,30.0,5700.0,7.0],"t":528},{"vs":[205.0,93.0,31.0,5700.0,7.0],"t":533},{"vs":[227.0,102.0,32.0,5700.0,7.0],"t":538},{"vs":[235.0,103.0,33.0,5800.0,7.0],"t":543},{"vs":[233.0,102.0,33.0,5800.0,7.0],"t":548},{"vs":[230.0,101.0,33.0,5900.0,7.0],"t":553},{"vs":[235.0,104.0,33.0,5900.0,7.0],"t":558},{"vs":[219.0,98.0,32.0,6000.0,7.0],"t":563},{"vs":[143.0,85.0,26.0,6000.0,6.0],"t":568},{"vs":[136.0,82.0,26.0,6000.0,7.0],"t":573},{"vs":[119.0,76.0,24.0,6100.0,7.0],"t":578},{"vs":[129.0,81.0,25.0,6100.0,7.0],"t":583},{"vs":[120.0,75.0,24.0,6200.0,7.0],"t":588},{"vs":[130.0,83.0,25.0,6200.0,6.0],"t":593},{"vs":[114.0,74.0,24.0,6200.0,7.0],"t":598},{"vs":[106.0,73.0,23.0,6300.0,7.0],"t":603},{"vs":[108.0,74.0,23.0,6300.0,7.0],"t":608},{"vs":[125.0,80.0,25.0,6300.0,6.0],"t":613},{"vs":[135.0,83.0,26.0,6400.0,6.0],"t":618},{"vs":[137.0,85.0,26.0,6400.0,6.0],"t":623},{"vs":[159.0,91.0,28.0,6400.0,6.0],"t":628},{"vs":[165.0,91.0,28.0,6500.0,7.0],"t":633},{"vs":[175.0,89.0,29.0,6500.0,8.0],"t":638},{"vs":[263.0,90.0,34.0,6600.0,9.0],"t":643},{"vs":[282.0,93.0,35.0,6600.0,9.0],"t":648},{"vs":[296.0,94.0,36.0,6700.0,9.0],"t":653},{"vs":[273.0,91.0,35.0,6700.0,9.0],"t":658},{"vs":[281.0,92.0,35.0,6800.0,9.0],"t":663},{"vs":[279.0,89.0,35.0,6800.0,9.0],"t":668},{"vs":[257.0,86.0,34.0,6900.0,9.0],"t":673},{"vs":[260.0,86.0,34.0,6900.0,9.0],"t":678},{"vs":[261.0,86.0,34.0,6900.0,9.0],"t":683},{"vs":[247.0,83.0,34.0,7000.0,9.0],"t":688},{"vs":[479.0,116.0,44.0,7000.0,9.0],"t":693},{"vs":[562.0,125.0,47.0,7100.0,9.0],"t":698},{"vs":[689.0,140.0,50.0,7200.0,9.0],"t":703},{"vs":[650.0,132.0,49.0,7200.0,9.0],"t":708},{"vs":[451.0,82.0,43.0,7300.0,9.0],"t":713},{"vs":[157.0,81.0,27.0,7400.0,6.0],"t":718},{"vs":[135.0,80.0,26.0,7400.0,6.0],"t":723},{"vs":[125.0,79.0,25.0,7400.0,6.0],"t":728},{"vs":[143.0,86.0,26.0,7500.0,6.0],"t":733},{"vs":[138.0,84.0,26.0,7500.0,6.0],"t":738},{"vs":[139.0,84.0,26.0,7500.0,6.0],"t":743},{"vs":[137.0,85.0,26.0,7600.0,6.0],"t":748},{"vs":[157.0,92.0,27.0,7600.0,6.0],"t":753},{"vs":[147.0,88.0,27.0,7700.0,6.0],"t":758},{"vs":[169.0,96.0,28.0,7700.0,6.0],"t":763},{"vs":[185.0,100.0,30.0,7700.0,6.0],"t":768},{"vs":[222.0,89.0,32.0,7800.0,8.0],"t":773},{"vs":[271.0,88.0,35.0,7800.0,9.0],"t":778},{"vs":[270.0,89.0,35.0,7900.0,9.0],"t":783},{"vs":[266.0,87.0,35.0,7900.0,9.0],"t":788},{"vs":[259.0,85.0,34.0,8000.0,9.0],"t":793},{"vs":[269.0,88.0,35.0,8000.0,9.0],"t":798},{"vs":[252.0,84.0,34.0,8100.0,9.0],"t":803},{"vs":[264.0,87.0,34.0,8100.0,9.0],"t":808},{"vs":[262.0,87.0,34.0,8200.0,9.0],"t":813},{"vs":[255.0,84.0,34.0,8200.0,9.0],"t":818},{"vs":[279.0,91.0,35.0,8300.0,9.0],"t":823},{"vs":[393.0,109.0,41.0,8300.0,9.0],"t":828},{"vs":[442.0,116.0,42.0,8400.0,9.0],"t":833},{"vs":[517.0,127.0,45.0,8400.0,9.0],"t":838},{"vs":[466.0,118.0,43.0,8500.0,9.0],"t":843},{"vs":[311.0,82.0,37.0,8600.0,6.0],"t":848},{"vs":[118.0,86.0,24.0,8600.0,5.0],"t":853},{"vs":[93.0,78.0,21.0,8600.0,5.0],"t":858},{"vs":[103.0,80.0,22.0,8700.0,5.0],"t":863},{"vs":[98.0,80.0,22.0,8700.0,5.0],"t":868},{"vs":[104.0,81.0,23.0,8700.0,5.0],"t":873},{"vs":[106.0,83.0,23.0,8800.0,5.0],"t":878},{"vs":[150.0,55.0,27.0,8800.0,11.0],"t":883},{"vs":[128.0,46.0,25.0,8800.0,12.0],"t":888},{"vs":[129.0,45.0,25.0,8900.0,12.0],"t":893},{"vs":[130.0,46.0,25.0,8900.0,12.0],"t":898},{"vs":[156.0,48.0,27.0,8900.0,13.0],"t":903},{"vs":[152.0,48.0,27.0,9000.0,13.0],"t":908},{"vs":[160.0,47.0,28.0,9000.0,13.0],"t":913},{"vs":[177.0,44.0,29.0,9000.0,14.0],"t":918},{"vs":[210.0,47.0,31.0,9100.0,14.0],"t":923},{"vs":[201.0,47.0,31.0,9100.0,14.0],"t":928},{"vs":[205.0,47.0,31.0,9200.0,14.0],"t":933},{"vs":[214.0,48.0,32.0,9300.0,15.0],"t":943},{"vs":[222.0,46.0,32.0,9300.0,15.0],"t":948},{"vs":[229.0,48.0,32.0,9400.0,15.0],"t":953},{"vs":[218.0,46.0,32.0,9400.0,14.0],"t":958},{"vs":[218.0,46.0,32.0,9400.0,15.0],"t":963},{"vs":[218.0,46.0,32.0,9500.0,15.0],"t":968},{"vs":[204.0,44.0,31.0,9500.0,15.0],"t":973},{"vs":[223.0,41.0,32.0,9600.0,15.0],"t":978},{"vs":[225.0,47.0,32.0,9600.0,15.0],"t":983},{"vs":[205.0,45.0,31.0,9700.0,15.0],"t":988},{"vs":[217.0,48.0,32.0,9700.0,15.0],"t":993},{"vs":[192.0,38.0,30.0,9800.0,16.0],"t":998},{"vs":[242.0,44.0,33.0,9800.0,16.0],"t":1003},{"vs":[264.0,48.0,34.0,9900.0,16.0],"t":1008},{"vs":[232.0,44.0,33.0,9900.0,16.0],"t":1013},{"vs":[242.0,45.0,33.0,9900.0,16.0],"t":1018},{"vs":[250.0,43.0,34.0,10000.0,16.0],"t":1023},{"vs":[237.0,45.0,33.0,10000.0,16.0],"t":1028},{"vs":[259.0,35.0,34.0,10100.0,15.0],"t":1033},{"vs":[88.0,55.0,21.0,10100.0,7.0],"t":1038},{"vs":[83.0,63.0,20.0,10200.0,6.0],"t":1043},{"vs":[71.0,57.0,18.0,10200.0,6.0],"t":1048},{"vs":[78.0,60.0,19.0,10200.0,6.0],"t":1053},{"vs":[79.0,61.0,20.0,10200.0,6.0],"t":1058},{"vs":[101.0,69.0,22.0,10300.0,6.0],"t":1063},{"vs":[86.0,65.0,20.0,10300.0,6.0],"t":1068},{"vs":[81.0,62.0,20.0,10300.0,6.0],"t":1073},{"vs":[80.0,62.0,20.0,10400.0,6.0],"t":1078},{"vs":[100.0,72.0,22.0,10400.0,6.0],"t":1083},{"vs":[101.0,71.0,22.0,10400.0,6.0],"t":1088},{"vs":[104.0,73.0,23.0,10400.0,6.0],"t":1093},{"vs":[111.0,74.0,23.0,10500.0,6.0],"t":1098},{"vs":[121.0,61.0,24.0,10500.0,9.0],"t":1103},{"vs":[139.0,56.0,26.0,10500.0,9.0],"t":1108},{"vs":[195.0,69.0,30.0,10600.0,10.0],"t":1113},{"vs":[203.0,68.0,31.0,10600.0,10.0],"t":1118},{"vs":[152.0,61.0,27.0,10700.0,10.0],"t":1123},{"vs":[166.0,62.0,28.0,10700.0,10.0],"t":1128},{"vs":[177.0,63.0,29.0,10700.0,10.0],"t":1133},{"vs":[199.0,66.0,31.0,10800.0,10.0],"t":1138},{"vs":[204.0,67.0,31.0,10800.0,10.0],"t":1143},{"vs":[184.0,66.0,30.0,10900.0,10.0],"t":1148},{"vs":[197.0,67.0,30.0,10900.0,10.0],"t":1153},{"vs":[189.0,65.0,30.0,11000.0,10.0],"t":1158},{"vs":[85.0,45.0,20.0,11000.0,7.0],"t":1163},{"vs":[98.0,72.0,22.0,11000.0,6.0],"t":1168},{"vs":[111.0,79.0,23.0,11100.0,6.0],"t":1173},{"vs":[112.0,79.0,23.0,11100.0,6.0],"t":1178},{"vs":[111.0,78.0,23.0,11100.0,6.0],"t":1183},{"vs":[92.0,70.0,21.0,11200.0,6.0],"t":1188},{"vs":[140.0,51.0,26.0,11200.0,12.0],"t":1193},{"vs":[280.0,67.0,35.0,11200.0,13.0],"t":1198},{"vs":[264.0,65.0,34.0,11300.0,13.0],"t":1203},{"vs":[239.0,61.0,33.0,11300.0,12.0],"t":1208},{"vs":[258.0,65.0,34.0,11400.0,13.0],"t":1213},{"vs":[260.0,64.0,34.0,11400.0,13.0],"t":1218},{"vs":[252.0,63.0,34.0,11500.0,13.0],"t":1223},{"vs":[249.0,68.0,34.0,11500.0,13.0],"t":1228},{"vs":[203.0,60.0,31.0,11600.0,8.0],"t":1233},{"vs":[93.0,68.0,21.0,11600.0,6.0],"t":1238},{"vs":[85.0,66.0,20.0,11600.0,6.0],"t":1243},{"vs":[88.0,66.0,21.0,11700.0,6.0],"t":1248},{"vs":[91.0,69.0,21.0,11700.0,6.0],"t":1253},{"vs":[113.0,76.0,24.0,11700.0,6.0],"t":1258},{"vs":[112.0,79.0,23.0,11800.0,6.0],"t":1263},{"vs":[121.0,79.0,24.0,11800.0,6.0],"t":1268},{"vs":[101.0,72.0,22.0,11800.0,6.0],"t":1273},{"vs":[118.0,80.0,24.0,11900.0,6.0],"t":1278},{"vs":[123.0,85.0,25.0,11900.0,7.0],"t":1283},{"vs":[266.0,48.0,35.0,11900.0,14.0],"t":1288},{"vs":[329.0,68.0,38.0,12000.0,14.0],"t":1293},{"vs":[319.0,63.0,37.0,12000.0,14.0],"t":1298},{"vs":[290.0,61.0,36.0,12100.0,14.0],"t":1303},{"vs":[325.0,63.0,38.0,12100.0,14.0],"t":1308},{"vs":[288.0,62.0,36.0,12200.0,14.0],"t":1313},{"vs":[310.0,64.0,37.0,12200.0,14.0],"t":1318},{"vs":[282.0,59.0,35.0,12300.0,13.0],"t":1323},{"vs":[267.0,63.0,35.0,12300.0,13.0],"t":1328},{"vs":[248.0,60.0,34.0,12400.0,13.0],"t":1333},{"vs":[208.0,53.0,31.0,12400.0,13.0],"t":1338},{"vs":[192.0,51.0,30.0,12500.0,12.0],"t":1343},{"vs":[177.0,52.0,29.0,12500.0,12.0],"t":1348},{"vs":[171.0,53.0,29.0,12600.0,12.0],"t":1353},{"vs":[71.0,43.0,18.0,12600.0,10.0],"t":1358},{"vs":[76.0,61.0,19.0,12600.0,6.0],"t":1363},{"vs":[77.0,60.0,19.0,12600.0,6.0],"t":1368},{"vs":[63.0,56.0,17.0,12700.0,6.0],"t":1373},{"vs":[79.0,65.0,20.0,12700.0,6.0],"t":1378},{"vs":[105.0,76.0,23.0,12700.0,6.0],"t":1383},{"vs":[113.0,79.0,24.0,12800.0,6.0],"t":1388},{"vs":[133.0,79.0,25.0,12800.0,7.0],"t":1393},{"vs":[126.0,76.0,25.0,12800.0,7.0],"t":1398},{"vs":[127.0,77.0,25.0,12900.0,7.0],"t":1403},{"vs":[154.0,84.0,27.0,12900.0,7.0],"t":1408},{"vs":[147.0,82.0,27.0,12900.0,7.0],"t":1413},{"vs":[182.0,94.0,29.0,13000.0,7.0],"t":1418},{"vs":[190.0,83.0,30.0,13000.0,8.0],"t":1423},{"vs":[211.0,87.0,31.0,13100.0,8.0],"t":1428},{"vs":[212.0,84.0,31.0,13200.0,8.0],"t":1438},{"vs":[196.0,84.0,30.0,13200.0,8.0],"t":1443},{"vs":[189.0,77.0,30.0,13200.0,8.0],"t":1448},{"vs":[126.0,68.0,25.0,13300.0,8.0],"t":1453},{"vs":[113.0,62.0,24.0,13300.0,8.0],"t":1458},{"vs":[143.0,70.0,26.0,13300.0,8.0],"t":1463},{"vs":[147.0,68.0,27.0,13400.0,8.0],"t":1468},{"vs":[149.0,72.0,27.0,13400.0,8.0],"t":1473},{"vs":[161.0,76.0,28.0,13500.0,8.0],"t":1478},{"vs":[122.0,64.0,24.0,13500.0,8.0],"t":1483},{"vs":[116.0,63.0,24.0,13500.0,8.0],"t":1488},{"vs":[127.0,69.0,25.0,13600.0,8.0],"t":1493},{"vs":[127.0,68.0,25.0,13600.0,8.0],"t":1498},{"vs":[123.0,66.0,25.0,13600.0,8.0],"t":1503},{"vs":[139.0,70.0,26.0,13700.0,8.0],"t":1508},{"vs":[142.0,69.0,26.0,13700.0,8.0],"t":1513},{"vs":[138.0,70.0,26.0,13700.0,8.0],"t":1518},{"vs":[126.0,68.0,25.0,13800.0,8.0],"t":1523},{"vs":[127.0,65.0,25.0,13800.0,8.0],"t":1528},{"vs":[90.0,57.0,21.0,13900.0,8.0],"t":1533},{"vs":[100.0,60.0,22.0,13900.0,8.0],"t":1538},{"vs":[121.0,66.0,24.0,13900.0,8.0],"t":1543},{"vs":[109.0,62.0,23.0,13900.0,8.0],"t":1548},{"vs":[127.0,65.0,25.0,14000.0,8.0],"t":1553},{"vs":[141.0,70.0,26.0,14000.0,8.0],"t":1558},{"vs":[114.0,64.0,24.0,14100.0,8.0],"t":1563},{"vs":[127.0,68.0,25.0,14100.0,8.0],"t":1568},{"vs":[135.0,69.0,26.0,14100.0,8.0],"t":1573},{"vs":[130.0,65.0,25.0,14200.0,8.0],"t":1578},{"vs":[114.0,62.0,24.0,14200.0,8.0],"t":1583},{"vs":[93.0,57.0,21.0,14200.0,8.0],"t":1588},{"vs":[91.0,56.0,21.0,14300.0,8.0],"t":1593},{"vs":[84.0,51.0,20.0,14300.0,8.0],"t":1598},{"vs":[82.0,53.0,20.0,14300.0,8.0],"t":1603},{"vs":[79.0,56.0,20.0,14300.0,8.0],"t":1608},{"vs":[150.0,52.0,27.0,14400.0,11.0],"t":1613},{"vs":[217.0,65.0,32.0,14400.0,11.0],"t":1618},{"vs":[205.0,62.0,31.0,14500.0,11.0],"t":1623},{"vs":[216.0,70.0,32.0,14500.0,10.0],"t":1628},{"vs":[187.0,63.0,30.0,14500.0,10.0],"t":1633},{"vs":[163.0,64.0,28.0,14600.0,10.0],"t":1638},{"vs":[178.0,65.0,29.0,14600.0,10.0],"t":1643},{"vs":[195.0,69.0,30.0,14700.0,10.0],"t":1648},{"vs":[194.0,66.0,30.0,14700.0,10.0],"t":1653},{"vs":[206.0,73.0,31.0,14800.0,10.0],"t":1658},{"vs":[221.0,71.0,32.0,14800.0,10.0],"t":1663},{"vs":[220.0,75.0,32.0,14900.0,10.0],"t":1673},{"vs":[179.0,61.0,29.0,14900.0,10.0],"t":1678},{"vs":[81.0,64.0,20.0,15000.0,6.0],"t":1683},{"vs":[112.0,79.0,23.0,15000.0,6.0],"t":1688},{"vs":[108.0,77.0,23.0,15000.0,6.0],"t":1693},{"vs":[128.0,83.0,25.0,15100.0,6.0],"t":1698},{"vs":[124.0,81.0,25.0,15100.0,10.0],"t":1703},{"vs":[167.0,61.0,28.0,15100.0,11.0],"t":1708},{"vs":[215.0,65.0,32.0,15200.0,11.0],"t":1713},{"vs":[219.0,66.0,32.0,15200.0,11.0],"t":1718},{"vs":[220.0,68.0,32.0,15300.0,11.0],"t":1723},{"vs":[271.0,73.0,35.0,15300.0,11.0],"t":1728},{"vs":[252.0,72.0,34.0,15400.0,11.0],"t":1733},{"vs":[262.0,72.0,34.0,15400.0,11.0],"t":1738},{"vs":[242.0,69.0,33.0,15500.0,11.0],"t":1743},{"vs":[283.0,75.0,35.0,15500.0,11.0],"t":1748},{"vs":[224.0,66.0,32.0,15600.0,11.0],"t":1753},{"vs":[236.0,69.0,33.0,15600.0,11.0],"t":1758},{"vs":[207.0,64.0,31.0,15600.0,11.0],"t":1763},{"vs":[256.0,72.0,34.0,15700.0,11.0],"t":1768},{"vs":[249.0,70.0,34.0,15700.0,11.0],"t":1773},{"vs":[257.0,71.0,34.0,15800.0,11.0],"t":1778},{"vs":[244.0,70.0,33.0,15800.0,11.0],"t":1783},{"vs":[244.0,70.0,33.0,15900.0,11.0],"t":1788},{"vs":[232.0,68.0,33.0,15900.0,11.0],"t":1793},{"vs":[90.0,64.0,21.0,16000.0,6.0],"t":1798},{"vs":[60.0,62.0,17.0,16000.0,6.0],"t":1803},{"vs":[75.0,68.0,19.0,16000.0,6.0],"t":1808},{"vs":[90.0,77.0,21.0,16000.0,6.0],"t":1813},{"vs":[101.0,81.0,22.0,16100.0,6.0],"t":1818},{"vs":[160.0,87.0,28.0,16100.0,9.0],"t":1823},{"vs":[131.0,63.0,25.0,16100.0,9.0],"t":1828},{"vs":[165.0,73.0,28.0,16200.0,9.0],"t":1833},{"vs":[177.0,72.0,29.0,16200.0,9.0],"t":1838},{"vs":[171.0,72.0,29.0,16300.0,9.0],"t":1843},{"vs":[171.0,71.0,29.0,16300.0,9.0],"t":1848},{"vs":[162.0,71.0,28.0,16300.0,9.0],"t":1853},{"vs":[180.0,75.0,29.0,16400.0,9.0],"t":1858},{"vs":[134.0,69.0,26.0,16400.0,6.0],"t":1863},{"vs":[74.0,71.0,19.0,16500.0,6.0],"t":1868},{"vs":[61.0,65.0,17.0,16500.0,6.0],"t":1873},{"vs":[62.0,64.0,17.0,16500.0,6.0],"t":1878},{"vs":[66.0,67.0,18.0,16500.0,6.0],"t":1883},{"vs":[60.0,64.0,17.0,16600.0,6.0],"t":1888},{"vs":[84.0,77.0,20.0,16600.0,6.0],"t":1893},{"vs":[94.0,80.0,21.0,16600.0,6.0],"t":1898},{"vs":[144.0,55.0,26.0,16600.0,13.0],"t":1903},{"vs":[189.0,53.0,30.0,16700.0,13.0],"t":1908},{"vs":[224.0,58.0,32.0,16700.0,13.0],"t":1913},{"vs":[223.0,59.0,32.0,16800.0,13.0],"t":1918},{"vs":[215.0,57.0,32.0,16800.0,13.0],"t":1923},{"vs":[215.0,57.0,32.0,16900.0,13.0],"t":1928},{"vs":[219.0,57.0,32.0,16900.0,13.0],"t":1933},{"vs":[202.0,55.0,31.0,17000.0,13.0],"t":1938},{"vs":[213.0,57.0,31.0,17000.0,13.0],"t":1943},{"vs":[193.0,55.0,30.0,17000.0,13.0],"t":1948},{"vs":[198.0,53.0,30.0,17100.0,13.0],"t":1953},{"vs":[271.0,49.0,35.0,17100.0,14.0],"t":1958},{"vs":[225.0,50.0,32.0,17200.0,14.0],"t":1963},{"vs":[292.0,58.0,36.0,17200.0,14.0],"t":1968},{"vs":[300.0,59.0,36.0,17300.0,14.0],"t":1973},{"vs":[283.0,56.0,35.0,17300.0,14.0],"t":1978},{"vs":[277.0,56.0,35.0,17400.0,14.0],"t":1983},{"vs":[239.0,36.0,33.0,17400.0,14.0],"t":1988},{"vs":[217.0,38.0,32.0,17500.0,14.0],"t":1993},{"vs":[155.0,34.0,27.0,17500.0,14.0],"t":1998},{"vs":[174.0,37.0,29.0,17500.0,14.0],"t":2003},{"vs":[163.0,38.0,28.0,17600.0,14.0],"t":2008},{"vs":[152.0,38.0,27.0,17600.0,14.0],"t":2013},{"vs":[80.0,52.0,20.0,17700.0,8.0],"t":2018},{"vs":[82.0,62.0,20.0,17700.0,7.0],"t":2023},{"vs":[99.0,69.0,22.0,17700.0,7.0],"t":2028},{"vs":[96.0,66.0,22.0,17700.0,7.0],"t":2033},{"vs":[85.0,63.0,20.0,17800.0,7.0],"t":2038},{"vs":[89.0,65.0,21.0,17800.0,7.0],"t":2043},{"vs":[99.0,69.0,22.0,17800.0,7.0],"t":2048},{"vs":[92.0,65.0,21.0,17900.0,7.0],"t":2053},{"vs":[127.0,80.0,25.0,17900.0,7.0],"t":2058},{"vs":[120.0,77.0,24.0,17900.0,7.0],"t":2063},{"vs":[131.0,81.0,25.0,18000.0,7.0],"t":2068},{"vs":[147.0,85.0,27.0,18000.0,7.0],"t":2073},{"vs":[163.0,81.0,28.0,18000.0,9.0],"t":2078},{"vs":[243.0,89.0,33.0,18100.0,9.0],"t":2083},{"vs":[247.0,92.0,34.0,18100.0,9.0],"t":2088},{"vs":[242.0,74.0,33.0,18200.0,10.0],"t":2093},{"vs":[269.0,79.0,35.0,18200.0,10.0],"t":2098},{"vs":[201.0,67.0,31.0,18300.0,10.0],"t":2103},{"vs":[273.0,81.0,35.0,18300.0,10.0],"t":2108},{"vs":[189.0,64.0,30.0,18400.0,10.0],"t":2113},{"vs":[201.0,68.0,31.0,18400.0,10.0],"t":2118},{"vs":[226.0,69.0,32.0,18500.0,10.0],"t":2123},{"vs":[203.0,67.0,31.0,18500.0,10.0],"t":2128},{"vs":[226.0,68.0,32.0,18500.0,10.0],"t":2133},{"vs":[273.0,86.0,35.0,18600.0,9.0],"t":2138},{"vs":[286.0,94.0,36.0,18600.0,9.0],"t":2143},{"vs":[319.0,97.0,37.0,18700.0,9.0],"t":2148},{"vs":[415.0,108.0,41.0,18700.0,9.0],"t":2153},{"vs":[400.0,83.0,41.0,18800.0,7.0],"t":2158},{"vs":[79.0,72.0,20.0,18800.0,6.0],"t":2163},{"vs":[67.0,67.0,18.0,18900.0,6.0],"t":2168},{"vs":[76.0,71.0,19.0,18900.0,6.0],"t":2173},{"vs":[74.0,69.0,19.0,18900.0,6.0],"t":2178},{"vs":[68.0,67.0,18.0,19000.0,6.0],"t":2183},{"vs":[82.0,74.0,20.0,19000.0,6.0],"t":2188},{"vs":[98.0,85.0,22.0,19000.0,6.0],"t":2193},{"vs":[138.0,96.0,26.0,19000.0,6.0],"t":2198},{"vs":[149.0,81.0,27.0,19100.0,8.0],"t":2203},{"vs":[98.0,63.0,22.0,19100.0,8.0],"t":2208},{"vs":[209.0,84.0,31.0,19100.0,10.0],"t":2213},{"vs":[175.0,66.0,29.0,19200.0,10.0],"t":2218},{"vs":[232.0,83.0,33.0,19200.0,10.0],"t":2223},{"vs":[259.0,85.0,34.0,19300.0,10.0],"t":2228},{"vs":[231.0,75.0,33.0,19300.0,10.0],"t":2233},{"vs":[193.0,70.0,30.0,19400.0,10.0],"t":2238},{"vs":[204.0,74.0,31.0,19400.0,10.0],"t":2243},{"vs":[206.0,60.0,31.0,19500.0,10.0],"t":2248},{"vs":[152.0,62.0,27.0,19500.0,10.0],"t":2253},{"vs":[210.0,80.0,31.0,19500.0,9.0],"t":2258},{"vs":[290.0,91.0,36.0,19600.0,9.0],"t":2263},{"vs":[330.0,101.0,38.0,19600.0,9.0],"t":2268},{"vs":[285.0,92.0,36.0,19700.0,9.0],"t":2273},{"vs":[352.0,103.0,39.0,19700.0,9.0],"t":2278},{"vs":[392.0,108.0,40.0,19800.0,9.0],"t":2283},{"vs":[74.0,46.0,19.0,19900.0,7.0],"t":2288},{"vs":[51.0,59.0,15.0,19900.0,6.0],"t":2293},{"vs":[50.0,56.0,15.0,19900.0,6.0],"t":2298},{"vs":[49.0,57.0,15.0,19900.0,6.0],"t":2303},{"vs":[67.0,66.0,18.0,19900.0,6.0],"t":2308},{"vs":[67.0,64.0,18.0,20000.0,6.0],"t":2313},{"vs":[63.0,65.0,17.0,20000.0,6.0],"t":2318},{"vs":[63.0,63.0,17.0,20000.0,6.0],"t":2323},{"vs":[76.0,70.0,19.0,20000.0,6.0],"t":2328},{"vs":[81.0,70.0,20.0,20100.0,6.0],"t":2333},{"vs":[83.0,74.0,20.0,20100.0,6.0],"t":2338},{"vs":[93.0,77.0,21.0,20100.0,6.0],"t":2343},{"vs":[98.0,80.0,22.0,20200.0,6.0],"t":2348},{"vs":[104.0,82.0,23.0,20200.0,6.0],"t":2353},{"vs":[116.0,87.0,24.0,20200.0,6.0],"t":2358},{"vs":[111.0,86.0,23.0,20300.0,6.0],"t":2363},{"vs":[133.0,95.0,25.0,20300.0,6.0],"t":2368},{"vs":[139.0,97.0,26.0,20300.0,6.0],"t":2373},{"vs":[152.0,99.0,27.0,20400.0,6.0],"t":2378},{"vs":[138.0,95.0,26.0,20400.0,6.0],"t":2383},{"vs":[140.0,97.0,26.0,20400.0,6.0],"t":2388},{"vs":[136.0,97.0,26.0,20500.0,6.0],"t":2393},{"vs":[149.0,101.0,27.0,20500.0,6.0],"t":2398},{"vs":[134.0,94.0,26.0,20500.0,6.0],"t":2403},{"vs":[117.0,60.0,24.0,20600.0,9.0],"t":2408},{"vs":[84.0,53.0,20.0,20600.0,9.0],"t":2413},{"vs":[105.0,59.0,23.0,20600.0,9.0],"t":2418},{"vs":[120.0,62.0,24.0,20700.0,9.0],"t":2423},{"vs":[103.0,56.0,22.0,20700.0,9.0],"t":2428},{"vs":[85.0,52.0,20.0,20700.0,9.0],"t":2433},{"vs":[133.0,61.0,25.0,20800.0,10.0],"t":2438},{"vs":[145.0,63.0,26.0,20800.0,10.0],"t":2443},{"vs":[123.0,58.0,25.0,20800.0,10.0],"t":2448},{"vs":[136.0,59.0,26.0,20900.0,10.0],"t":2453},{"vs":[143.0,63.0,26.0,20900.0,10.0],"t":2458},{"vs":[131.0,59.0,25.0,21000.0,10.0],"t":2463},{"vs":[130.0,58.0,25.0,21000.0,10.0],"t":2468},{"vs":[146.0,64.0,27.0,21000.0,10.0],"t":2473},{"vs":[141.0,63.0,26.0,21100.0,8.0],"t":2478},{"vs":[138.0,74.0,26.0,21100.0,8.0],"t":2483},{"vs":[159.0,76.0,28.0,21100.0,7.0],"t":2488},{"vs":[155.0,85.0,27.0,21200.0,7.0],"t":2493},{"vs":[175.0,89.0,29.0,21200.0,7.0],"t":2498},{"vs":[154.0,83.0,27.0,21300.0,7.0],"t":2503},{"vs":[153.0,82.0,27.0,21300.0,7.0],"t":2508},{"vs":[204.0,97.0,31.0,21300.0,7.0],"t":2513},{"vs":[220.0,101.0,32.0,21400.0,7.0],"t":2518},{"vs":[242.0,105.0,33.0,21400.0,7.0],"t":2523},{"vs":[257.0,111.0,34.0,21500.0,7.0],"t":2528},{"vs":[238.0,106.0,33.0,21500.0,7.0],"t":2533},{"vs":[210.0,98.0,31.0,21600.0,7.0],"t":2538},{"vs":[90.0,68.0,21.0,21600.0,6.0],"t":2543},{"vs":[92.0,74.0,21.0,21600.0,6.0],"t":2548},{"vs":[76.0,68.0,19.0,21700.0,6.0],"t":2553},{"vs":[112.0,81.0,23.0,21700.0,6.0],"t":2558},{"vs":[125.0,87.0,25.0,21700.0,6.0],"t":2563},{"vs":[158.0,97.0,28.0,21800.0,6.0],"t":2568},{"vs":[154.0,96.0,27.0,21800.0,6.0],"t":2573},{"vs":[172.0,101.0,29.0,21800.0,6.0],"t":2578},{"vs":[163.0,99.0,28.0,21900.0,6.0],"t":2583},{"vs":[167.0,100.0,28.0,21900.0,6.0],"t":2588},{"vs":[154.0,96.0,27.0,22000.0,6.0],"t":2593},{"vs":[148.0,96.0,27.0,22000.0,6.0],"t":2598},{"vs":[161.0,87.0,28.0,22000.0,7.0],"t":2603},{"vs":[179.0,87.0,29.0,22100.0,7.0],"t":2608},{"vs":[169.0,90.0,28.0,22100.0,7.0],"t":2613},{"vs":[139.0,77.0,26.0,22200.0,7.0],"t":2618},{"vs":[160.0,89.0,28.0,22200.0,7.0],"t":2623},{"vs":[194.0,97.0,30.0,22200.0,7.0],"t":2628},{"vs":[198.0,93.0,30.0,22300.0,7.0],"t":2633},{"vs":[151.0,84.0,27.0,22300.0,7.0],"t":2638},{"vs":[173.0,92.0,29.0,22400.0,7.0],"t":2643},{"vs":[181.0,92.0,29.0,22400.0,7.0],"t":2648},{"vs":[175.0,94.0,29.0,22400.0,7.0],"t":2653},{"vs":[185.0,94.0,30.0,22500.0,7.0],"t":2658},{"vs":[176.0,92.0,29.0,22500.0,7.0],"t":2663},{"vs":[195.0,95.0,30.0,22600.0,7.0],"t":2668},{"vs":[202.0,98.0,31.0,22600.0,7.0],"t":2673},{"vs":[193.0,97.0,30.0,22600.0,7.0],"t":2678},{"vs":[194.0,97.0,30.0,22700.0,7.0],"t":2683},{"vs":[212.0,101.0,31.0,22700.0,7.0],"t":2688},{"vs":[206.0,98.0,31.0,22800.0,7.0],"t":2693},{"vs":[186.0,92.0,30.0,22800.0,7.0],"t":2698},{"vs":[172.0,89.0,29.0,22900.0,7.0],"t":2703},{"vs":[170.0,88.0,28.0,22900.0,7.0],"t":2708},{"vs":[185.0,94.0,30.0,22900.0,7.0],"t":2713},{"vs":[193.0,96.0,30.0,23000.0,7.0],"t":2718},{"vs":[192.0,97.0,30.0,23000.0,7.0],"t":2723},{"vs":[216.0,102.0,32.0,23100.0,7.0],"t":2728},{"vs":[289.0,121.0,36.0,23100.0,7.0],"t":2733},{"vs":[248.0,106.0,34.0,23200.0,7.0],"t":2738},{"vs":[87.0,64.0,21.0,23200.0,6.0],"t":2743},{"vs":[52.0,58.0,15.0,23200.0,6.0],"t":2748},{"vs":[65.0,67.0,18.0,23300.0,6.0],"t":2753},{"vs":[75.0,72.0,19.0,23300.0,6.0],"t":2758},{"vs":[74.0,72.0,19.0,23300.0,6.0],"t":2763},{"vs":[78.0,74.0,19.0,23300.0,6.0],"t":2768},{"vs":[80.0,76.0,20.0,23400.0,6.0],"t":2773},{"vs":[110.0,87.0,23.0,23400.0,6.0],"t":2778},{"vs":[129.0,96.0,25.0,23400.0,6.0],"t":2783},{"vs":[125.0,92.0,25.0,23500.0,6.0],"t":2788},{"vs":[99.0,81.0,22.0,23500.0,6.0],"t":2793},{"vs":[189.0,125.0,30.0,23500.0,6.0],"t":2798},{"vs":[179.0,98.0,29.0,23600.0,6.0],"t":2803},{"vs":[76.0,71.0,19.0,23600.0,6.0],"t":2808},{"vs":[66.0,67.0,18.0,23600.0,6.0],"t":2813},{"vs":[55.0,45.0,16.0,23700.0,6.0],"t":2818},{"vs":[0.0,0.0,0.0,23700.0,1.0],"t":2823}],"classBuilderOffset":-285},"equipmentType":"UprightBike","cardioLogId":"61b4c0c0b4fc5d0f2c0e957a","favorite":0,"name":"S u p e r N a t u r e","date":"11.12.2021","target":"Duration","nEser":0,"nAttr":995,"physicalActivityId":"0184c9c6-9c31-4326-9ea8-f2037bc26401","physicalActivityName":"S u p e r N a t u r e","data":[{"property":"Duration","name":"Продолжительность","value":"52:28","uM":"мин.","rawValue":52.47},{"property":"HDistance","name":"Расстояние","value":"23,7","uM":"км","rawValue":23.7},{"property":"Move","name":"MOVEs","value":"1347","uM":"MOVEs","rawValue":1347.0}]},"token":"MjAyMTEyMTMwODI3MDR8NWFmMjM4NWJkNjY4NGE3Mjk3OTdhODRlM2I0NDAzMmN8ZWMxZDM4ZDdkMzU5NDhkMGE2MGNkOGMwYjhmYjlkZjl8MTR8UnVzc2lhbiBTdGFuZGFyZCBUaW1lfHJ1LVJVfDA3MjcwMTAxODMwMTQ1ZjBhNGEzNzY1YTExODM5OWYxfHx8fDF8MXwwfDEwMHx8fDB8NDYxNXwwfGNvbS5teXdlbGxuZXNz0.88A09ED740374F642DAFC51AC9979057067139AA8CA03B250CD53BD1388A28F3CC4CFA89FCDBC4D76C5270457CAC6B3C7DAF949B4D60F2059E88F0927DA20595","version":"1.1.131.26911","expireIn":31104000}';

echo createXML(parseJson($testJson));

function parseJson($testJson) : array {
    $jsonArr = json_decode($testJson, true);


    return $jsonArr['data']['analitics'];
}

function createXML(array $json) : string {
    $testDt = '2021-12-11 14:30:00';
    $startDateTime = (new DateTime($testDt));
    $keys = [
        'pow' => 0,
        'rpm' => 1,
        'spd' => 2,
        'dst' => 3,
        'lvl' => 4,
    ];

    $doc = new DOMDocument('1.0', "ascii");

    $root = $doc->createElementNS(TDC_NS, 'TrainingCenterDatabase');
    $doc->appendChild($root);

    $activities = $doc->createElement('Activities');

    $sportAttr = $doc->createAttribute('Sport');
    $sportAttr->value = 'Biking';
    $activity = $doc->createElement('Activity');
    $activity->setAttributeNode($sportAttr);

    $id = $doc->createElement('Id', $startDateTime->format(DT_FORMAT));
    $activity->appendChild($id);

    $startAttr = $doc->createAttribute('StartTime');
    $startAttr->value = $startDateTime->format(DT_FORMAT);
    $activity->appendChild($startAttr);

    $lap = $doc->createElement('Lap');
    $lap->setAttributeNode($startAttr);

    $track = $doc->createElement('Track');

    $lap->appendChild($track);
    $activity->appendChild($lap);
    $activities->appendChild($activity);
    $root->appendChild($activities);

    $fullDist = calculateFullDistance($json['samples'], $keys);

    $distCoefficient = $json['samples'][count($json['samples'])-1]['vs'][$keys['dst']] / $fullDist;

    $prevDt = 0;
    $prevDist = 0;
    foreach ($json['samples'] as $n => $sample) {
        $trackPoint = $doc->createElement('Trackpoint');
        $track->appendChild($trackPoint);

        $pointDateTime = clone ($startDateTime);
        $trackPoint->appendChild($doc->createElement('Time', $pointDateTime->modify('+ ' . $sample['t'] . 'seconds')->format(DT_FORMAT)));

        if ($n != 0) {
            $calculatedDist = $prevDist + ($sample['t'] - $prevDt) * kmh2ms($sample['vs'][$keys['spd']]) * $distCoefficient;

            $prevDt = $sample['t'];
            $prevDist = $calculatedDist;
        }

        $trackPoint->appendChild($doc->createElement('DistanceMeters', $calculatedDist ?? ($sample['vs'][$keys['dst']] . '.0')));
        $trackPoint->appendChild($doc->createElement('Cadence',$sample['vs'][$keys['rpm']] . '.0'));

        $extensions = $doc->createElement('Extensions');
        $trackPoint->appendChild($extensions);

        $tpx = $doc->createElementNS(TPX_NS, 'TPX');
        $tpx->appendChild($doc->createElement('Speed', kmh2ms($sample['vs'][$keys['spd']])));
        $tpx->appendChild($doc->createElement('Watts', $sample['vs'][$keys['pow']] . '.0'));
        $extensions->appendChild($tpx);
    }

    return $doc->saveXML();
}

function kmh2ms(float $kmh, int $precision = 10) : float {
    return round($kmh * 1000 / (60*60), $precision);
}

function calculateFullDistance(array $samples, array $keys) : float {
    $distance = 0;
    $prevT = $samples[0]['t'];
    foreach ($samples as $n => $sample) {
        if ($n == 0) continue;
        $distance = $distance + ($sample['t'] - $prevT) * kmh2ms($sample['vs'][$keys['spd']]);
        $prevT = $sample['t'];
    }

    return $distance;
}