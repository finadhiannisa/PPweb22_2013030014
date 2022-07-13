<html>
<head>
    <tittle> Memebuat List Tahun</tittle>
</head>

<body>
    <form name="form1" method="post" action="">
            Pilih Tahun
        <select name="tahun" id="tahun">
            <?php for($thn=1; $thn < 50; $thn++) { ?>
            <option value="<?php echo (2000+$thn); ?>"><?php echo (2000+$thn); ?> </option> <?php } ?>
        </select> 
    </form>
</body>
</html>