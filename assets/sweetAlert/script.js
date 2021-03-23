// untuk semua 

// untuk admin
const flashdata = $('.flash-data').data('flashdata');
  if (flashdata) {
    Swal.fire(
      'Data Admin',
      'Berhasil ' + flashdata,
      'success'
    )
  }

const AmbilDarah = $('.flash-ambil').data('flashdata');
  if (AmbilDarah) {
    Swal.fire(
      'Darah',
      AmbilDarah,
      'success'
    )
  }

// untuk data Pendonor
const flashdataa = $('.flash-dataa').data('flashdata');
  if (flashdataa) {
    Swal.fire(
      'Data Pendonor',
      flashdataa,
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
  // Akhir Untuk Ubah Password


  // untuk petugas
  const flashdatapetugas = $('.flash-dataPetugas').data('flashdata');
  if (flashdatapetugas) {
    Swal.fire(
      'Data Petugas',
      'Berhasil ' + flashdatapetugas,
      'success'
    )
  }


// register
  const flashdatalog = $('.flash-datalog').data('flashdata');
  if (flashdatalog) {
    Swal.fire(
      'Hallo',
      flashdatalog,
      'error'
    )
  }

// register
  const flashdatalogin = $('.flash-datalogin').data('flashdata');
  if (flashdatalogin) {
    Swal.fire(
      flashdatalogin,
      'Anda Berhasil Log In',
      'success'
    )
  }
  


  // Untuk tobol hapus
  $('.tombol-hapuss').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title:'Yakin Inggin Hapus.?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result)=>{
      if(result.value){
        document.location.href=href;
      }
    })

  });

  // Untuk tobol Logout
  $('.logout').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title:'Kamu Yakin Inggin Inggin Keluar.?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Keluar'
    }).then((result)=>{
      if(result.value){
        document.location.href=href;
      }
    })

  });

  
