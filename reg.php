<?php require_once 'auth.php';?>
          <h1 class="page-header">register</h1>
      <?php
            include 'students.php';
                ?> 
       <div class="col-md-8 " id="s_page">
        
             
              <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Detail_info</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th style="width:20%">FIRSTNAME</th>
        <th style="width:10%">LASTNAME</th>
        <th style="width:10%">ADDRESS</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';

    
    $sql=  mysqli_query($conn, "SELECT *,`FOR` as para FROM reg Order by FIRSTNAME ");
    while($row = mysqli_fetch_assoc($sql)) {

        $count = mysqli_num_rows($sql);
     
    ?>

      <tr>
         <input type="hidden" id="id<?php echo $row["reg_id"] ?>" name="id" value="<?php echo $row['reg_id'] ?>">
        <td><input id="reg<?php echo $row["reg_id"] ?>"  name="regi" type="text" style="border:0px" value="<?php echo $row['reg'] ?>" readonly></td>
          <td><input id="para<?php echo $row["reg_id"] ?>"  name="regi" type="text" style="border:0px" value="<?php echo $row['para'] ?>" readonly></td>
        <td><input id="des<?php echo $row["reg_id"] ?>" name="desc" type="text" style="border:0px;width:100%" value="<?php echo $row['DESCRIPTION'] ?>" readonly></td>
        <td><center><a onclick="update_subject(<?php echo $row["reg_id"] ?>)" class="btn btn-info" ><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</a></center></td>
      </tr>
    
      <?php
    
    }
     mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>

<script>
  function update_subject($i){
    var act,sub,para,desc,i =$i;
      para = $("#para"+i).val();
      $("#id").val($("#id"+i).val());
      $("#reg").val($("#reg"+i).val());
      $("#para").html(para);
      $("#des").val($("#des"+i).val());
      $("#head").html("Update Subject");
      $("#btn_add").html("Update");


  }
</script>


      <div class="col-md-4" id="">
        
            <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3 id="head">Add New new student</h3>
          <form class="" method="post">
            <input type="hidden" id="id" name="id">
            <div class="form-group">
              <label for="reg" class="cols-sm-2 control-label">FIRSTNAME</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" id="reg" name="reg" id="reg"
                  style="width:200px"  placeholder="Enter info" value="<?php if(isset($_POST['reg'])){echo $_POST['reg'];} ?>"/>
                </div>
                 <p>
            <?php if(isset($errors['reg'])){echo "<div class='erlert'><h5>" .$errors['reg']. "</h5></div>"; } ?>
            </p>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">LASTNAME</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <select name="f" class="form-control" id="para1">
                  <option id="para"></option>
                  <option>All</option>
                  <?php
                  include 'db.php';
                  $sql = mysqli_query($conn,"SELECT * from program ORDER BY PROGRAM");
                  while($row=mysqli_fetch_assoc($sql)){
                   ?>
                  <option value="<?php echo $row['PROGRAM'] ?>">
                  <?php echo $row['PROGRAM'] ?>
                  </option>
                  <?php } mysqli_close($conn); ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="des" class="cols-sm-2 control-label">ADDRESS</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <textarea type="text" class="form-control" name="des" id="des"  
                  style="width:225px;height:50px" placeholder="Enter Address" value="<?php if(isset($_POST['des'])){echo $_POST['des'];} ?>"/></textarea>
                </div>
             <p>
            <?php if(isset($errors['des'])){echo "<div class='erlert'><h5>" .$errors['des']. "</h5></div>"; } ?>
            </p>
              </div>
            </div>


            <div class="form-group ">
            <input type="reset" class="btn btn-info " id="reset" name="reset" value="Cancel">
              <button class="btn btn-info" id="btn_add">Add</button>
            </div>
            
          </form>
        </div>
      </div>

    </div>
 <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>
