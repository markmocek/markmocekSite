<!DOCTYPE html>
<html>
<head>
    <!-- **************************Includes********************************* -->
    <style type="text/css">
        @import url(../../CSS/styles.css);
        @import url(../../CSS/stylesPS.css);
    </style>
    <!-- ******************************************************************* -->
</head>
<body>
    
    <div class="wrapper0">
        <!-- **************************Title******************************** -->
        <div class="title"><h1>Legends</h1></div>
        <!-- *************************************************************** -->
        
        <!-- **********************Navigation Menu************************** -->
        <div class="menuNavigation">
            <div class="menu"><a href="../../index.php">Home</a></div>
            <div class="menu"><a href="../timeLine/mainPageTL.php">Time Line</a></div>
            <div class="menu"><a href="../characterOrgan/mainPageCO.php">Characters/Organizations</a></div>
            <div class="menu"><a href="../storySoFar/mainPageSSF.php">Story So Far</a></div>
            <div class="menu current"><u><b>Player Stats</b></u></div>
        </div>
        <!-- *************************************************************** -->
    </div>
    
    <div class="wrapper0 mt10">
        
        <div class="title2"><h3>Total</h3></div>
        
        <table border=1 width="400">
            <tr>
                <th>Player</th>
                <th>Damage</th>
                <th>Damage Received</th>
                <th>Healing</th>
                <th>Healing Received</th>
                <th>Hard CC</th>
                <th>Soft CC</th>
                <th>Deaths</th>
            </tr>
            <!-- *********************ANDY********************************** -->
            <tr style="background-color:#D3D3D3">
                <td align="center">Andy</td><!-- PLAYER -->
                <td width="30" align="center"><font color="green">38.48%</font></td><!-- DAMAGE -->
                <td width="30" align="center">14.72%</td><!-- DAMAGE RECEIVED -->
                <td width="30" align="center">6.43%</td><!-- HEALING -->
                <td width="30" align="center">7.92%</td><!-- HEALING RECEIVED -->
                <td width="30" align="center"><font color="green">83.33%</font></td><!-- HARD CC -->
                <td width="30" align="center"><font color="green">41.67%</font></td><!-- SOFT CC -->
                <td width="30" align="center">33.33%</td><!-- DEATHS -->
            </tr>
            <!-- *********************JESS********************************** -->
            <tr style="background-color:#FFFFFF">
                <td align="center">Jess</td><!-- PLAYER -->
                <td width="30" align="center">16.91%</td><!-- DAMAGE -->
                <td width="30" align="center">28.88%</td><!-- DAMAGE RECEIVED -->
                <td width="30" align="center"><font color="green">55.99%</font></td><!-- HEALING -->
                <td width="30" align="center"><font color="red">37.47%</font></td><!-- HEALING RECEIVED -->
                <td width="30" align="center">16.67%</td><!-- HARD CC -->
                <td width="30" align="center">25%</td><!-- SOFT CC -->
                <td width="30" align="center">16.67%</td><!-- DEATHS -->
            </tr>
            <!-- *********************JOEY********************************** -->
            <tr style="background-color:#D3D3D3">
                <td align="center">Joey</td><!-- PLAYER -->
                <td width="30" align="center">21.07%</td><!-- DAMAGE -->
                <td width="30" align="center">24.67%</td><!-- DAMAGE RECEIVED -->
                <td width="30" align="center">7.98%</td><!-- HEALING -->
                <td width="30" align="center">21.77%</td><!-- HEALING RECEIVED -->
                <td width="30" align="center">0%</td><!-- HARD CC -->
                <td width="30" align="center">0%</td><!-- SOFT CC -->
                <td width="30" align="center"><font color="red">41.67%</font></td><!-- DEATHS -->
            </tr>
            <!-- *********************JOHN********************************** -->
            <tr style="background-color:#FFFFFF">
                <td align="center">John</td><!-- PLAYER -->
                <td width="30" align="center">23.54%</td><!-- DAMAGE -->
                <td width="30" align="center"><font color="red">31.73%</font></td><!-- DAMAGE RECEIVED -->
                <td width="30" align="center">29.60%</td><!-- HEALING -->
                <td width="30" align="center">32.85%</td><!-- HEALING RECEIVED -->
                <td width="30" align="center">0%</td><!-- HARD CC -->
                <td width="30" align="center">33.33%</td><!-- SOFT CC -->
                <td width="30" align="center">8.33%</td><!-- DEATHS -->
            </tr>
        </table>
        
        <!-- **********************Navigation Menu************************** -->
        <div class="playerMenuNavigation">
            <div class="playerMenu"><a href="andyPS.php"><u>Andy</u></a></div>
            <div class="playerMenu"><a href="jessPS.php"><u>Jess</u></a></div>
            <div class="playerMenu"><a href="joeyPS.php"><u>Joey</u></a></div>
            <div class="playerMenu"><a href="johnPS.php"><u>John</u></a></div>
        </div>
        <!-- *************************************************************** -->
    </div>
    
</body>
</html>