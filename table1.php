<html>
  <head>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
        width: 800px;
        text-align: center;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>User_No</th>
          <th>User_ID</th>
          <th>User_name</th>
          <th>User_Phone</th>
          <th>User_Address</th>
        </tr>
      </thead>
      <tbody>
        <?php
                $mysql_hostname = '1.0.0.52';
                $mysql_username = 'root';
                $mysql_password = 'It1';
                $mysql_database = 'member';
                $mysql_port = '3306';
                $mysql_charset = 'UTF8';
                $connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);
                if($connect->connect_errno){
                 echo '[연결실패..] : '.$connect->connect_error.'';
                }else{
                echo '[연결성공!]'.'<br>';
                }
          $jb_sql = "SELECT * FROM member LIMIT 5;";
          $jb_result = mysqli_query( $connect, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
          echo '<tr><td>' . $jb_row[ 'no' ] . '</td><td>' . $jb_row[ 'id' ] . '</td><td>' . $jb_row[ 'name' ] . '</td><td>' . $jb_row[ 'phone' ] . '</td><td>' . $jb_row[ 'address' ] .'</td></tr>';
          }
        ?>
 </tbody>
    </table>
  </body>
</html>
