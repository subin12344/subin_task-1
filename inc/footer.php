<!-- /.content-wrapper -->
<!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- DataTables  & Plugins -->
<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>
<script src="Functions/common.js"></script>
<script>
  $(document).ready(function() {
    //................................................................container show
    $("#insertBtn").click(function() {

      $("#container").show();
      //  console.log(formdata);
      saveformNew();
    })
    $("#Customer").click(function(){
      $("#update").hide();
        $("#insertBtn").show();

    })
    $(".add").click(function(){
      $("#update").hide();
        $("#insertBtn").show();

    })
    //................................................................insert start

    function saveformNew() {
      // alert("Click me");
      var formdata = $("#form").serializeArray();

      formdata.push({

        name: 'method',

        value: "test"

      });
      var post_data = formdata;
      var onsuccess = function(data) {

        var response = JSON.parse(data);

        tabledata();
        if (response == 1) {
          $("#result").text("inserted successfull");

        }
        if (response == 0) {
          $("#result").text("insert error");
        }
        if (response == 3) {
          $("#result").text("Enter The Correct Email");

        }
        if (response == 4) {
          $("#result").text("Enter The Valied Phone Number");
        }
        if (response == 5) {
          $("#result").text("Fill All Colums");
        }
        if (response != "") {

          if (response.type == 1) {

          } else {}

        }

      }

      do_ajax_call(post_data, onsuccess, url = 'insert.php');

    }
    //........................................................................insert end

    //................................................................show data function start

    function tabledata() {
      // $.ajax({
      //   url: "tabledata.php",
      //   type: "POST",
      //   data: tabledata,
      //   success: function(data) {
      //     $(".table").html(data);
      //     // console.log(data);
      //   }
      // })
 

      var onsuccess = function(data) {
        $(".table").html(data);
      }
      do_ajax_call('', onsuccess, url = "tabledata.php")
    }
    tabledata();
    //................................................................show data function end



    $("#my_customer").click(function() {
      // alert("Coding on process ");
 
      $("#container").show();

    })
    
    //................................................................text box show start

    $(".table").on("click", "#edit", function() {
      var num = $(this).attr("data-id");
      
      let a = {data:num};
      var onsuccess = function(data) {
        // console.log(data);
        var response=JSON.parse(data);
        // console.log(response[0]);
        $("#hid").val(response[0].id);
        $("#name").val(response[0].Name);
        var newnum = response[0].Phone_number;

          var phone_no=newnum.slice(-10);
          // console.log(phone_no);
        $("#phone").val(phone_no);
        // console.log(response[0].Phone_number);
        $("#email").val(response[0].Email_ID);
        $("#passport").val(response[0].Passport_ID);
        $("#exp_date").val(response[0].Expiry_Date);
        $("#update").show();
        $("#insertBtn").hide();
        // console.log(response[0].id);
      }
      // alert(id);
      do_ajax_call( a, onsuccess, url = 'showdata.php');

    })
    //................................................................text box show end




    //................................................................text box show end
    
    //................................................................update start

    $("#update").click(function(){
      var formdata = $("#form").serializeArray();
      var onsuccess = function(response) {
        // console.log(response);
        tabledata();
        if (response == 1) {
          $("#result").text("Update successfull");

        }
        if (response == 0) {
          $("#result").text("Update error");
        }
        if (response == 3) {
          $("#result").text("Enter The Correct Email");

        }
        if (response == 4) {
          $("#result").text("Enter The Valied Phone Number");
        }
        if (response == 5) {
          $("#result").text("Fill All Colums");
        }
      }
      do_ajax_call(formdata, onsuccess, url = "update.php");
    })
    //................................................................update end


    //................................................................Delete Start

    $(".table").on("click", "#delate", function() {
      var num = $(this).attr("data-id");
      //  alert(num);
      let a = {data:num};
      var onsuccess = function(response) {
        tabledata();
        if (response == 0) {
          $("#result").text("Delete successfull");

        }
        if (response == 1) {
          $("#result").text("Delete error");
        }

      }
      do_ajax_call(a, onsuccess, url = "delete.php");
    })



  });
</script>
</body>

</html>