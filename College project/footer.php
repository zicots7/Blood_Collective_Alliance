
<?php
function display_footer(){
echo'
<style>
.both a {
            color: #007bff ; /* Blue color for links #BF222B*/
            text-decoration: none; /* Remove underline */
}
.both1 a:hover{
text-decoration: underline; /* Underline on hover */
            color: red;
}
.both a:hover {
            text-decoration: underline; /* Underline on hover */
            color: red;
}
#footer-font{
    font-family: "Poppins", sans-serif; 
}
.main-footer{
    background: #ec7e7e;
}
</style>
<footer class="main-footer">
        <div class="footer-lower">
          <div class="container-fluid mt-0 pt-2 pb-2">
            <div class="row text-center both">
              <div class="col-md-6 col-sm-12 col-xs-12 footer-logo text-center "><span id="copyYear">© 2023 - 2024 </span> by <a href="#" target="_blank">Blood Collective Allaince</a></div>
              <div class="col-md-6 col-sm-12 col-xs-12 footer-logo text-center both"> 
              ®&nbsp;Designed and Developed by <a href="https://www.linkedin.com/in/sudip-howlader-7638532a9" target="_blank"> Sudip Howlader</a> & <a href="https://www.linkedin.com/in/trinankur-samanta-3ab687150" target="_blank"> Trinankur Samanta </a>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 footer-logo text-center both1 ">
              <span><a id="mylink" href="..\College project\terms_condition.php">Terms &amp; Conditions</a></span> |
              <span><a id="mylink" href="..\College Project\privacy_policy.php">Privacy Policy</a></span> |            <span id="updatetime"><b>Last Updated : May 16 2024</b></span>
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
}
display_footer();
?>

