<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "dbneedid";

$conn = new mysqli($servername, $username, $password, $dbname);

// function check($usnama, $passw){
//     global $conn;
//     $sql = "SELECT id, username, password FROM login";
//     $result = $conn->query($sql);
//     while($row = $result->fetch_assoc()) {
//         if($usnama==$row['username']){
//             if ($passw == $row['password']){
//                 session_start();
//                 $_SESSION['username'] = $row['username'];
//                 setcookie('username', $row['username'], time()+(60*15));
//                 header('location:index.php');
//                 exit;                
//             }
//             else{
//                 echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";
//             }
//             break;

//         }elseif($usnama == "" || $passw == ""|| $usnama!=$row['username']){ 
//             if($row['id']==2){//index row sebanyak ...
//                 // perulangan. jika data username dan password pada database bertambah, maka index row pada parameter elif terakhir disesuaikan
//                 echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";
//             }else{
//                 continue;
//             }
            
//         }
//         else{
//             continue;
//         }  
//     }  
// }

function inpReg($first_name, $last_name, $email, $username, $password){
    global $conn;
    $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `username`, `password`)
        VALUES ('".$first_name."','".$last_name."','".$email."','".$username."','".$password."');";

    if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrasi berhasil')</script>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


function readUser(){
  global $conn;
  $sql = "SELECT id, first_name, last_name, email, username, password FROM user";
  $result = $conn->query($sql);
  // if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            global $daftar_username;
            $daftar_username[] = $row["username"];
            // $row["username"];
        }
    // }
    // }
}
readUser();
// echo $daftar_username[1];
// if ($daftar_username)
// for ($i = 0 ; $i count($daftar_username); $i++) {
//     // echo $daftar_username[$i];
//     echo $i;
// }
for ($i = 0 ; $i <= 2; $i++) {
    // echo $daftar_username[$i];
    echo $i;
}
// echo count($daftar_username);
// function delete($id){
//     global $conn;
//     $sql = "DELETE FROM `city` WHERE ID=$id";

//     if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Data Berhasil Dihapus')</script>";
//     } 
//     else {
//     echo "Error saat menghapus data: " . $conn->error;
//     }
// }

// function update($id,$nama,$kodenegara,$distrik,$populasi){
//     global $conn;
//     $sql = "UPDATE `city` SET `Name`='$nama',`CountryCode`='$kodenegara',
//     `District`='$distrik',`Population`='$populasi' WHERE ID=$id";

//     if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Data nama dan username berhasil diubah')</script>";
//     } else {
//     echo "Error saat memperbarui data: " . $conn->error;
//     }
// }

// function insert($id,$nama,$kodenegara,$distrik,$populasi){
//     global $conn;
//     $sql = "INSERT INTO `city` (`ID`, `Name`, `CountryCode`, `District`,`Population`)
//         VALUES ('".$id."','".$nama."','".$kodenegara."','".$distrik."','".$populasi."');";

//     if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Berhasil Menambahkan Data')</script>";
//     } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
// function insert1($nama,$kodenegara,$distrik,$populasi){
//     global $conn;
//     $sql = "INSERT INTO `city` (`Name`, `CountryCode`, `District`,`Population`)
//         VALUES ('".$nama."','".$kodenegara."','".$distrik."','".$populasi."');";

//     if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Berhasil Menambahkan Data')</script>";
//     } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }


?>