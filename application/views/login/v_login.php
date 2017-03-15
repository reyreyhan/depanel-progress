<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <title>Login Depanel V2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <body>

<style>
.tengah{
  margin: 0px auto;
  margin-top:  15%;
}
</style>

  <div class="tengah">
  <center>
    <div class="container">
      <h2>Depanel V2</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#wkwk">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="wkwk" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Depanel V2</h4>
        </div>
        <div class="modal-body">
<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
         <div class="row">
             <div class="col-md-12">
                 <div class="form-group">
                     <p>Nama</p>
                     <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12">
                 <div class="form-group">
                     <p>Password</p>
                     <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                 </div>
             </div>
         </div>

        </div>
        <div class="modal-footer">
        <tr>
          <td>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </td>
            <td>
              <button class="btn btn-primary btn-fill btn-sm">Login</button>
          </td>
        </tr>
        </div>
</form>
      </div>

  </center>
  </div></div></div>

      </body>
  </head>
</html>