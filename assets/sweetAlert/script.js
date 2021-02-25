const flashdata = $('.flash-data').data('flashdata');
  if (flashdata) {
    Swal.fire(
      'Data Admin',
      'Berhasil ' + flashdata,
      'success'
    )
  }

  // Untuk Ubah Password
  const flashdatapassword = $('.flash-data_password').data('flashdata');
  if (flashdatapassword) {
    Swal.fire(
      'Password Anda',
      'Berhasil ' + flashdatapassword,
      'success'
    )
  }

  const flashdatapasswordNot = $('.flash-data_passwordnot').data('flashdata');
  if (flashdatapasswordNot) {
    Swal.fire(
      'Password Kamu',
      flashdatapasswordNot,
      'error'
    )
  }