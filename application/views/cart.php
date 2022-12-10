 <!-- Custom StyleSheet -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/view_user/styles.css" />
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <body>
 <!-- Cart Items -->
    <div class="container cart">
      <table>
        <tr>
          <th>No</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <?php
        $no = 0;
        foreach ($this->cart->contents() as $items) :
          $no++;
        ?>
        <tr>
            <div class="cart-info">
              
            <div>
            <td><?php echo $no ?></td>
            <td>
                <p><?php echo $items['name']; ?></p>
                <span>Rp<?php echo number_format($items['price'], 0, ',', '.'); ?></span>
              </div>
            </div>
          </td>
          <td><?php echo $items['qty']; ?></td>
          <td>RP<?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
        <?php endforeach; ?>
        
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Total</td>
            <td>Rp<?php echo number_format($this->cart->total(), 0, ',', '.'); ?></td>
          </tr>
          <tr>
          <a href="<?php echo base_url('auth/home'); ?>" class="checkout btn">Lanjut belanja</a>
          </tr>
        </br>
        </br>
        </table>
        <a href="<?php echo base_url('auth/pesan'); ?>" class="checkout btn">Pesan Sekarang</a>
        </br>
        </br>
        <div>
        <a href="<?php echo base_url('auth/hapus_keranjang'); ?>" class="fa fa-trash" onclick="return confirm('Are you sure you want to delete?')"></a>

</div>
      </div>
     
    </div>

    <!-- Custom Scripts -->
    <script src="./js/index.js"></script>
  </body>