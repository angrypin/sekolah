$('#buttonLogin').click(() => {
  $.post(
    'assets/php/login.php',
    {
      username: $('#username').val(),
      password: $('#password').val()
    }, (resp) => {
      if(resp.success)
        $('#buttonLogin').text('login sukses');
        location.reload();
    }
  );
});

$('#buttonLogout').click(() => {
  $.get(
    'assets/php/logout.php',
    (resp) => {
      location.reload();
    }
  )
});