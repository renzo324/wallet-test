// document.getElementById("edit").onclick=show();
document.getElementById('wallet').onload = walletStream();
function walletStream(){
  var endpoint = "https://cors-anywhere.herokuapp.com/www.wallet.infinitysoftware.io/functions.php?email="+session['email'];
  var xhr= new XMLHttpRequest();
  xhr.open('GET', endpoint, true);
  xhr.onload = function(){
    if (this.status == 200){
      var response = JSON.parse(this.response);
      // console.log(response);
      console.log(session);
      // var render = '';

      // for (var i = 0, len = response.length; i < len; i++){
      //   render += '';
      // }
      // document.getElementById('walletFeed').innerHTML = x;
    };
  };
  xhr.send();
}
document.getElementById('refresh').addEventListener(click, refresh);
function refresh(){
  window.location.reload();
}
function show() {
  var x = document.getElementById("usersActive");
  var y = document.getElementById("usersInactive");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
document.getElementById("reset").onclick=reset();
function reset(){
  location.reload;
}
function readURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });
  