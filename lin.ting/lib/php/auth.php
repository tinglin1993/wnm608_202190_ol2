<?php 

function MYSQLIAuth(){
   return [
      "localhost",  //mysql host
      "Tinglin_ixd608",    //mysql user name
      "Tinglin_ixd608",  //mysql user password  
      "Tinglin_ixd608" //mysql database name
   ];
}

function PDOAuth() {
   return [
      "mysql:host=localhost;dbname=Tinglin_ixd608",  // host and database name
      "Tinglin_ixd608", //mysql user name
      "Tinglin_ixd608",  //mysql user password  
      [PDO:: MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
   ];
}