<content>
  	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
  		<a class="login-trigger" id="themhoadon" href="#" data-target="#login" data-toggle="modal">Thêm Sản Phẩm</a>  
      <!--- pop-up --->
    <div id="ndung" >
      <div class="form">
       <div id="login" class="modal fade" role="dialog">
          <div class="modal-dialog" style="max-width: 500px;">
            <div class="modal-content">
              <div class="modal-body">
                <h2 style="text-align: center;">Tìm Kiếm Sản Phẩm</h2>
              <input class="form-control" id="myInput" type="text" placeholder="Nhập sản phẩm cần tìm kiếm">
              <table id="seach" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Sản Phẩm</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <?php 
                    $dem=0;
                    foreach ($sanpham as $value) {      
                    $dem++;
                  ?>
                    <tr>
                      <form method="post">
                        <td style="width: 70px">
                          <?php echo $dem; ?>
                        </td>
                        <input type="" hidden name="id_sp" value="<?php echo $value['id_sp']; ?>">
                        <td>
                          <span ><?php echo $value['tensp']; ?></span>
                          <input hidden type="" name="tensp"value="<?php echo $value['tensp']; ?>">
                        </td>
                        <td><button type="submit" name="them"><i class="fas fa-plus-circle"></i></button>
                        </td>
                      </form>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!--- end pop-up --->
        <table class="table">
        	<thead>
        		<tr>
        			<th>ID</th>
        			<th>Tên</th>
        			<th style="width: 100px">SL</th>
        			<th style="width: 100px">Giá</th>
              <th style="width: 100px">Tiền</th>
              <th></th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php
        			if (isset($_SESSION['cartnhap'])) {
                $i=0;
        				foreach ($_SESSION['cartnhap'] as $key => $val) {
                  $i++;
        				?>
                <form method="post">
      		  			<tr>
      			  			<td>
                      <?php echo $i; ?>
                    <input hidden name="id" value="<?php echo $key?>">      
                    </td>
                    <td><?php echo $val['tensp']; ?></td>
                    <td><input type="text" class="sl" name="sl" value="<?php echo $val['sl']; ?>"></td>
                    <td><input type="text" name="gia" class="gia" value="<?php echo $val['gia'].'$';  ?>"></td>
                    <td><input type="text" class="tien" value="<?php echo $val['gia'] * $val['sl'] .'$' ?>"></td>
                    <td>
                      <button type="submit" name="xoa" onclick="return confirm('Bạn Có Muốn Xóa <?php echo $val['tensp'];  ?> ?');"><i class="fas fa-trash-alt"></i></button>
                      <button type="submit" onclick="return confirm('Bạn Có Muốn Sửa ?');" name="sua"><i class="fas fa-edit"></i></button>
                    </td>
      		  			</tr>
                  </form>
        				<?php
        				}
        			}
        		 ?>
        		
        		
        	</tbody>
        </table>
      </div>
      <div class="col-sm-4">
        <form method="post" class="form-add">
        <div class="khachhang">
          <h3><i class="fa fa-info-circle"></i>Thông tin hệ thống</h3>
          <br>
          <label>Nhân Viên</label>
                  <select name="id_nv">
                    <option value="<?php $_SESSION['nhanvien'][0]['id_nv'] ?>"><?php echo $_SESSION['nhanvien'][0]['tennv']; ?></option>
                  </select>
        </div>
        <div class="donhang">
          <h3><i class="fa fa-info-circle"></i>Thông tin hóa đơn</h3>
          <p>Tiền Hàng <?php $tam=0; if (isset($_SESSION['cartnhap'])) {
           foreach ($_SESSION['cartnhap'] as $key => $val) {
            $tam+=$val['sl']*$val['gia'];
          }
          echo $tam.'$';
           }?></p> <input type="text" hidden class="tongtien" name="tien" value="<?php $tam=0; if (isset($_SESSION['cartnhap'])) {
           foreach ($_SESSION['cartnhap'] as $key => $val) {
            $tam+=$val['sl']*$val['gia'];
          }
          echo $tam;
           }?>">
           <!-- <label>Khách Trả </label><input  onchange="nhap();" type="number" min="0" class="dl" name="">
           <p >Trả Lại <span id="LL" ></span></p> -->
          <button type="submit" name="adhang" class="addhang"><i class="fa fa-plus-circle"></i> Thêm</button>
          <button type="submit" class="back" name="back"><i class="fa fa-undo"></i>Quay Lại</button>
        </div>
      </form>
      </div>
    </div>
  <script>
    // function nhap() {
    //     $("#LL").html($('.dl').val()-$('.tongtien').val()+'$'); 
    // }
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  	</div>
  </content>