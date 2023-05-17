<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>

    <form name="latihan1" method="POST" onsubmit="return checkform(this)">

        <div>
            NIM:
            <input type="text" id="txNIM" name="NIM">
        </div>
        <div>
            NAMA:
            <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            JENIS KELAMIN:
            <input type="radio" id="txJKEL" name="JKEL" value="L">laki-laki
            <input type="radio" id="txJKEL" name="JKEL" value="p">perempuan
        </div>
        <div>
            JURUSAN:
            <select name="JURUSAN" id="txJUR">
                <option value="KAB">KAB</option>
                <option value="SK">SK</option>
                <option value="DKV">DKV</option>
                <option value="MTI">MTI</option>
                <option value="PAR">PAR</option>
            </select>
        </div>
        <div>
            HOBI:
            <input type="checkbox" name="HOBI_1">olahraga
            <input type="checkbox" name="HOBI_2">maen game
            <input type="checkbox" name="HOBI_3">keluyuran
        </div>

        <div>
            <button type="submit">kirim data</button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f = frm.elements;

            let nim = f.namedItem("NIM").value;
            let nama = f.namedItem("NAMA").value;
            let jkel = f.namedItem("JKEL").value;
            let jur = f.namedItem("JURUSAN").value;
            let h1 = f.namedItem("HOBI_1").checked;
            let h2 = f.namedItem("HOBI_2").checked;
            let h3 = f.namedItem("HOBI_3").checked;
            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("JUR: "+jur);
            console.log("hobi_1 "+h1)
            console.log("hobi_2 "+h2)
            console.log("hobi_3 "+h3)


            return false;
        }
    </script>

</body>
</html>