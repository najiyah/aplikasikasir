<html>
<head>
<script src="/assets/js/jquery-2.0.3.min.js"></script>
<title>Kasir</title>
<style>
#tabletransaksi{
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
    margin-top: 10px;
    font-size: 25px;
}
#tabletransaksi thead{
    background: grey;
    color: white;
    text-align: center;
}
#tabletransaksi tfoot{
    background: black;
    color: white;
    text-align: center;
}
.numeric{
    text-align: right;
    padding-right: 10px;
}
#tabletransaksi tbody tr:nth-child(odd){
    background: #FAE5D3;
}
#tabletransaksi tbody tr:nth-child(even){
    background: #EAFAF1;
}
#entry{
    margin-left:auto;
    margin-right:auto;
    width: 50%;
}
</style>
</head>
<body>
<center><h1>Aplikasi Kasir</h1></center>

<div id="entry">
    <span>Kategori</span>
    <select name="" id="">
    <option value="">Pilihlah</option>
    <?php foreach($categories as $category){?>
    <?php
    echo '<option value="">'.$category->name.'</option>';
    }?>

    </select>

    <span>Produk</span>
    <select name="" id="">
    <option value="">Pilih Produk</option>
    <?php foreach($comodities as $commodity){?>
    <?php
    echo '<option value="">'.$commodity->name.'</option>';
    }?>
    </select>
    <span>Jumlah</span>
    <input type="text" id='textt'>

</div>

<span id='commodities'></span>
<span id='coba'></span>
<table id='tabletransaksi'>
    <thead>
        <tr>
        <td>No</td><td>Keterangan</td><td>Jumlah</td><td>Sub Total</td>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td class='numeric'>1</td><td>Potabee</td><td class='numeric'>2</td><td class='numeric'>11000</td>
    </tr>
    <tr>
        <td class='numeric'>2</td><td>Chitato</td><td class='numeric'>2</td><td class='numeric'>11000</td>
    </tr>
    <tr>
        <td class='numeric'>3</td><td>Chiki</td><td class='numeric'>4</td><td class='numeric'>11000</td>
    </tr>
    <tr>
        <td class='numeric'>4</td><td>Kuwaci</td><td class='numeric'>6</td><td class='numeric'>11000</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan=3>Total</td><td class='numeric'>22000</td>
    </tr>
    </tfoot>
</table>
    <script>
    (function($){
        console.log('test jquery');
        $('#test').click(function(){
            $('#textt').val('Najiyah');
        });
        $.ajax({
            url:'/kasir/ambildata',
            dataType:'json'
        })
        .done(function(hasil){
            console.log(hasil);
            $('#textt').val(hasil[0].price);
        })
        .fail(function(gagal){
            console.log(gagal);
        });

        berhasil = function(param){
            $('#commodities').html(param);
        }
        gagal = function(param){
            $('#commodities').html(gagal);
        }
        showCommodities = function(){
            $.ajax({
                url:'http://kasir/kasir/senddata'
            })
            .done(function(param){
                $('#commodities').html(param);
            })
            .fail(function(param){
                $('#commodities').html(gagal);
            });
        }
        showCommodities = function(){
            $.ajax({
                url: 'http://kasir/kasir/kirimdata'
            })
            .done(function(sukses){
                $('#coba').html(sukses);
            })
            .fail(function(sukses){
                $('#coba').html(gagal);
            })
        }
        showCommodities();
    }(jQuery))
    </script>
</body>
</html>