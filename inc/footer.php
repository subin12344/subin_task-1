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
    $("#insertBtn").click(function() {
      $("#container").show();
      //  console.log(formdata);
      saveformNew();
    })

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

    function tabledata() {
      $.ajax({
        url: "tabledata.php",
        type: "POST",
        data: tabledata,
        success: function(data) {
          $(".table").html(data);
          // console.log(data);
        }
      })
    }
    tabledata();
    $("#my_customer").click(function() {
      // alert("Coding on process ");
      $("#container").show();

    })
  });
</script>
</body>

</html>