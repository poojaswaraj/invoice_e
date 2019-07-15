<?php include('dbinfo.php');?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<div class="col-lg-12">
  <h3 class="page-header">Packages</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Package List</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        <div class="container">
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Packages</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" align="center">Package Details</h4>
                </div>
                <div class="modal-body">
                   <div class="panel-body">
                      <form role="form" id="myformm" name="form1" method="POST" enctype="multipart/formdata">
                          <fieldset>
                              <div class="form-group">
                                  <label>Package Name</label><input type="text" class="form-control" placeholder="package name" name="pname"  autofocus required>
                              </div>
                             <div class="form-group">
                                  <label>Cost</label><input type="text" class="form-control" placeholder="Cost" name="pcost"  autofocus required>
                              </div>
                              <div class="form-group">
                                  <label>Description</label><textarea class="form-control" placeholder="Description" name="dsc"  autofocus required></textarea>
                              </div>
                               <div class="modal-footer">
                                <button type="submit" name="submit" id="submit" class="btn  btn-primary">Submit</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                              </div>
                          </fieldset>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!--edit modal-->
<div class="modal fade" id="editModal" role="dialog">
   <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center"> Package Details</h4>
        </div>
        <div class="modal-body">
           <div class="panel-body">
              <form role="form" id="editform123" name="form1" method="POST" enctype="multipart/formdata">
                  <fieldset>
                    <input type="hidden" name="data" id="data">
                      <div class="form-group"> 
                          <label>Pckage Name</label><input type="text" class="form-control" placeholder="Name" id="ename" name="epname"  autofocus >
                      </div>
                      <div class="form-group">
                          <label>Cost </label><input type="text" class="form-control" placeholder="Cost" id="ecost" name="epcost"  value="">
                      </div>
                      <div class="form-group">
                          <label>Description</label><input type="text" class="form-control" placeholder="Description" id="edsc" name="epdsc"  value="">
                      </div>
                      
                  <div class="modal-footer">
                    <button type="submit" name="upd" id="upd123" class="btn  btn-primary">Update</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                  </div>
                  </fieldset>
              </form>
          </div>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>
<!-- end of modal -->
<div class="panel-body"></div>
<table class="table table-bordered" id="example">
      <thead>
          <tr>
              <th>Sr. No</th> 
              <th>Package Name</th>
              <th>Cost</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
    <?php
      $cnt=0;
      $sql=mysql_query("SELECT * FROM packages WHERE status=1");
      // echo "<table border=1><th>name</th><th>username</th><th>password</th>";
        while($row=mysql_fetch_array($sql))
        {  
          $cnt++;  
      
          $id=$row['id'];
    ?>
   <tr>
      <td><?php echo $cnt;?></td>
      <td><?php echo $row['package_name'];?></td>
      <td><?php echo $row['cost'];?></td>
      <td><?php echo $row['description'];?></td>
 
      <td>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" onclick="efun(<?php echo $id;?>);"><i class="fa fa-pencil"></i></button>
        <button type="button" name="delete'.$row['id'].'" class="btn btn-danger" onclick='do_block(<?php echo $row['id'];?>)'><i class="fa fa-trash-o"></i></button>
      </td>
    </tr>

      <?php } ?>
      </tbody>
     </table>
      </div>
    </div>
  </div>
</div>

<script>
function efun(id)
{
    $.ajax({
             url:'get_packages.php',
             type:'POST',
             data:{
                    id:id
             },
             success: function(data)
             {
                var obj = $.parseJSON(data);
                $('#data').val(obj.id);
                $('#ename').val(obj.package_name);
                $('#ecost').val(obj.cost);
                $('#edsc').val(obj.description);
                if(data==1)
                {
                    alert("update");
                }

             } 

    });

}

// script for insert 
$('form#editform123').submit(function(e){

        e.preventDefault();
          
          $('button#upd123').button('loading');
            $.ajax({

                        url:'update_packages.php',
                        type: "POST",
                        data: new FormData(this),
                        contentType:false,
                        processData:false,
                       success: function(data)
                        {
                                // alert(data);
                            $('button#upd123').button('reset');
                            if(data==1)
                            {
                                alert("Updated Successfully..");
                              location.reload();
                            }
                            
                            
                           else {

                                alert("Error");
                            }   
                        }
                    });
                  });

// script for insert 
$('form#myformm').submit(function(e){

        e.preventDefault();

 
          
          $('button#submit').button('loading');
            $.ajax({

                        url:'insert_packages.php',
                        type: "POST",
                        data: new FormData(this),
                        contentType:false,
                        processData:false,
                       success: function(data)
                        {
                                // alert(data);
                            $('button#submit').button('reset');
                            if(data==1)
                            {
                                alert("Inserted Successfully..");
                              location.reload();
                            }
                            
                           else
                           {
                            alert("Error");
                           }
                        }
                    });
                 
                });

</script>

   <!--Script for block doctor in doctor list-->
    <script>
        function do_block(id){

                $.ajax({

                    url:'delete_packages.php',
                    type:'POST',
                    data:{
                             id:id
                        },
                    success:function(data)
                      {

                      //alert(data);
                        if(data==1)
                        {
                            alert('Deleted succesfully.');
                            window.location.reload();
                        }
                     if(data==2)
                        {
                            alert('Record not deleted.');
                            window.location.reload(); // this function reload page after performing an action.
                        }                
                        
                    }
                });
          }
    </script>