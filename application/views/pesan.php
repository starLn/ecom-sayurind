<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <style>
            *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #69ae14;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
 
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #69ae14;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}
.total {
    background-color: #69ae14;
    margin: 0 0 10px 0;
  text-align: center;
  font-size: 18px;
  color: #FFF;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

        </style>
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form method="post" action="<?php echo base_url('auth/is_processed');?>" enctype="multipart/form-data">
        <div></div>
</br>
</br>
</br>
        <h1> Selesaikan pembayaran </h1>
        <div class="total">
            <h1>
                <?php 
                    $grand_total=0;
                    if($keranjang=$this->cart->contents()){
                       foreach($keranjang as $item)
                       $grand_total=$grand_total+$item['subtotal'];

                    }
                    echo "<h4>Jumlah yang harus dibayarkan: Rp".number_format($grand_total,0,',','.');
                ?>
                <h1>
            </div><br/><br/>
        
        <fieldset>
       
          <legend><span class="number">1</span> Identitas</legend>
        
          <label for="nama">Nama lengkap:</label>
          <input type="text" id="name" name="nama" placeholder="Ketikkan nama lengkap Anda." required oninvalid="this.setCustomValidity('Nama Lengkap wajib diisi!')" oninput="setCustomValidity('')">
        
          <label for="alamat">Alamat lengkap:</label>
          <input type="text" id="mail" name="alamat" placeholder="Ketikkan alamat lengkap Anda." required oninvalid="this.setCustomValidity('Alamat Lengkap wajib diisi!')" oninput="setCustomValidity('')">
       
          <label for="password">Nomor telepon:</label>
          <input type="number" name="no_telp" placeholder="Isi nomor telepon dengan angka.">
        
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Ringkasan</legend>
                </br>
         <label for="jasper">Opsi Pengiriman</label>
          <select id="job" name="jasper">
              <option value="antar">Diantar</option>
              <option value="php_developer">Ambil Sendiri</option>
          </select>

          <label for="jasper">Opsi Transfer</label>
          <select id="job" name="jasper">
              <option value="BCA">BCA-0454988050</option>
              <option value="BRI">BRI-06719201818234</option>
              <option value="CIMB NIAGA">CIMB Niaga-817637162</option>
          </select>
          <label for="tf">Bukti transfer:</label>
          <input type="file" name="bukti">
         </fieldset>
       
        <button type="submit">Kirim</button>
        
       </form>
       </br>
</br>
</br>
        </div>
      </div>
      
    </body>
</html>
