// Fungsi salam untuk menampilkan alert
function salam() {
  alert("Selamat datang di website kami!");
}

// Fungsi contoh penggunaan let
function contohLet() {
  let y = 10;
  if (true) {
      let y = 20;
      console.log("Nilai dalam blok:", y); // Output: 20
  }
  console.log("Nilai luar blok:", y); // Output: 10
}

// Panggil fungsi contohLet
contohLet();

// Contoh penggunaan const (baris di bawah ini akan menyebabkan error)
// const z = 100;
// z = 200; // Tidak bisa mengubah nilai const

// Variabel dengan berbagai tipe data
let nama = "Budi"; // String
let umur = 30; // Number
let isStudent = false; // Boolean
let buah = ["Apel", "Mangga", "Jeruk"]; // Array
let mahasiswa = { nama: "Rina", usia: 20, jurusan: "Informatika" }; // Object

// Menampilkan output ke console
console.log(nama);  // Output: Budi
console.log(buah[1]); // Output: Mangga
console.log(mahasiswa.jurusan); // Output: Informatika
