 $(document).ready(function () {
        $("#l1").click(function () {
          $(".box2,.box3").hide();
          $(".box1").show();
        });
      });
      $(document).ready(function () {
        $("#l2").click(function () {
          $(".box1,.box3").hide();
          $(".box2").show();
        });
      });
      $(document).ready(function () {
        $("#l3").click(function () {
          $(".box1,.box2").hide();
          $(".box3").show();
        });
      });   
