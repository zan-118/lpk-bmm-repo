$(document).ready(function() {
    // Menampilkan modal ketika halaman dimuat
    $(window).on('load', function() {
      $('#welcomeModal').modal('show');
    });
  
    // Back to Top script
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn();
      } else {
        $('.back-to-top').fadeOut();
      }
    });
  
    $('.back-to-top').click(function() {
      $('html, body').animate({ scrollTop: 0 }, 800);
      return false;
    });
  
    // Mengubah href tombol Hubungi Kami
    
  });
  