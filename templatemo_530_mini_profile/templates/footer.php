        <footer class="col-12">
            <p class="text-center tm-copyright-text">
            Copyright 2020 Mini Profile Page 
            
            - Design: Template Mo</p>
          </footer>
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- section -->
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
      function detectMsBrowser() {
        using_ms_browser =
          navigator.appName == "Microsoft Internet Explorer" ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Edge") > -1) ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Trident") > -1);

        if (using_ms_browser == true) {
          alert(
            "Please use Chrome or Firefox for the best browsing experience!"
          );
        }
      }
      function setBrandMarginTop() {
        var bottomContainerHeight = $(".tm-welcome-container").height();

        $(".tm-brand-container-outer").css({
          "margin-top": -bottomContainerHeight + "px"
        });
      }

      $(function() {
        setBrandMarginTop();
        detectMsBrowser();

        // Handle window resize event
        $(window).resize(function() {
          setBrandMarginTop();
        });
      });
    </script>
  </body>
</html>