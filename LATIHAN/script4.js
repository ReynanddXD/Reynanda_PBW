function cekNilai() {
  const nim = document.getElementById("nim").value;
  const nilaiInput = document.getElementById("nilai").value;
  const hasil = document.getElementById("hasil");

  if (nim.trim() === "" || nilaiInput.trim() === "") {
    hasil.style.color = "red";
    hasil.textContent = "Isi form dengan lengkap!";
    return;
  }

  const nilai = parseFloat(nilaiInput);

  if (isNaN(nilai) || nilai < 0 || nilai > 100) {
    hasil.style.color = "red";
    hasil.textContent = "Nilai tidak valid!";
    return;
  }

  let hurufMutu = "";

  if (nilai >= 80) {
    hurufMutu = "A";
  } else if (nilai >= 70) {
    hurufMutu = "B";
  } else if (nilai >= 60) {
    hurufMutu = "C";
  } else if (nilai >= 50) {
    hurufMutu = "D";
  } else {
    hurufMutu = "E";
  }

  hasil.style.color = "green";
  hasil.textContent = `NIM: ${nim}, Nilai: ${nilai}, Huruf Mutu: ${hurufMutu}`;
}
