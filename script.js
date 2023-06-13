function konfirmasi() {
    let hasil = confirm("Apakah Anda yakin ingin melanjutkan?");
    
    if (hasil == true) {
      alert("Apakah anda ingin membeli?");
      var nama = prompt('masukkan namamu');
	    alert('hai ' + nama + ' silahkan klik');
        window.location.href = "https://wa.me/6281243434855";
    } else {
      alert("Terima Kasih");
    }
  }