(function($) {
    $(document).ready(function() {
      var colors = ["red", "green", "blue"];
      var i = 0;
      setInterval(function() {
        $('#title').css('color', colors[i]);
        i = (i + 1) % colors.length;
      }, 1000);
    });
  })(jQuery);