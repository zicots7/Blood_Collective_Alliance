<link href="footer.css" rel="stylesheet">
<?php
echo'
<footer class="main-footer">
        <div class="footer-lower">
          <div class="container-fluid">
            <div class="row text-center">
              <div class="col-md-6 col-sm-12 col-xs-12 footer-logo text-center "><span id="copyYear">© 2023 -2024</span> <a href="#" target="_blank">by Blood Colkective Allaince</a></div>
              <div class="col-md-6 col-sm-12 col-xs-12 footer-logo text-center "> ®&nbsp;Designed and Developed by<a href="#" target="_blank"> BCA Dept. of Burdwan Raj College</a> </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 footer-logo text-center ">
              <span><a id="mylink" href="#">Terms &amp; Conditions</a></span> |
              <span><a id="mylink" href="#">Privacy Policy</a></span> | <span><a id="mylink" href="#">Accessibility Statement</a></span> |
              <span id="updatetime">Last Updated : May 16 2024</span> | 
            </div>
            <script>
              document.getElementById("copyYear").innerHTML = "&copy; 2023 -" + new Date().getFullYear();
              var d = (new Date()).toString().split(" ").splice(1, 3).join(" ");
              document.getElementById("updatetime").innerHTML = "Last Updated : " + d;
            </script>

          </div>
        </div>
      </footer>
';
?>

