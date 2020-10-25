<html>
<head>
<script src="/assets/js/jquery-2.0.3.min.js"></script>
<title>Kasir</title>
</head>
<body>
<h1>Kasir</h1>
<select name="" id="">

<option value="">Pilihlah</option>
<?php foreach($categories as $category){?>
<?php
echo '<option value="">'.$category->name.'</option>';
}?>

</select>

<select name="" id="">

<option value="">Pilih Produk</option>
<?php foreach($comodities as $commodity){?>
<?php
echo '<option value="">'.$commodity->name.'</option>';
}?>
</select>
<button id='test'>test</button>
<input type="text" id='textt'>
<span id='commodities'></span>
<span id='coba'></span>
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