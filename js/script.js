function updateAdList() {
	$.ajax({
		url: 'ad_list.php',
		success: function (data) {
			$('#ad-list-container').html(data);
		},
		error: function ($e) {
		}
	});
}

$(document).ready(function () {
	//load all ads when page loaded
	updateAdList();
//deleteing
  $(document).on('click', '.description__delete', function() {
  var id = $(this).data('adId');
  $.ajax({
    type: 'POST',
    url: 'remove_ad.php',
    data: {id},
    success: function(result) {
      updateAdList();
    },
  });
});

//add new ad observer
  $("#add-new-ad").submit(function (e) {
    e.preventDefault();
                var fd = new FormData(this);
    $.ajax({
      type: 'POST',
      url: 'new_ad.php',
      data: fd,
                        processData: false,
                        contentType: false, 
      success: function (result) {
        updateAdList();
      },
      error: function (jqXHR, exception) {
        console.log('error');
      }
    });
  });

//login customer 

  $("#login-form").submit(function (e) {
    e.preventDefault();
    var fd = new FormData(this);
    
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: fd,
      processData: false,
      contentType: false,
      success: function (result) {
        $('#author-buttons').hide();
        $('.message').html('Hello mr. ' + result + ' !');
      },
      error: function (jqXHR, exception) {
        console.log('error');
      }
    });
  });

//modal login
  $("#send-login").on("click", function(){

	  var author_name = $("#author_name").val().trim();
	  var password = $("#password").val().trim();

	  if (author_name == "") {
		  $("#errorMess").text("Enter Email");  
		  return false;
	  }
	  else if (password == "") {
		  $("#errorMess").text("Enter password");
		  return false;
	  }

	  $("#errorMess").text("");

	  $.ajax({
		  url: 'login.php',
		  type: 'POST',
		  data: { 'author_name': author_name, 'password': password }, 
		  success: function (result) {
			  $('#author-buttons').hide();
			  $('#message').html('Hello mr. ' + result + ' ! <button id=\"logout-button\" class=\"btn btn-danger\">Log out</button>');
			  $("#login-close").trigger('click');
		  },
	  });
  });

  $(document).on("click", '#logout-button', function () { alert("Hello"); })

  


});